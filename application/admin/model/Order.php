<?php

/**
 * @Author: Huang LongPan
 * @Date:   2019-06-21 22:11:10
 * @Last Modified by:   Huang LongPan
 * @Last Modified time: 2019-06-22 20:03:06
 */
namespace app\admin\model;
use think\Model;
use think\Db;
// use phpoffice\phpexcel\Classes\PHPExcel;
/**
 * 
 */
class Order extends Model
{
	/**
	 * 订单查询条件的判断
	 * @param  array  $data [description]
	 * @return [type]       [description]
	 */
	public function orderSelect($data=array()){
		if($data['select_base']=='order_trade_no'){
			$where['out_trade_no'] = ['=',trim($data['select_value'])];
		}else{
			$where['username'] = ['=',trim($data['select_value'])];
		}
		return $where;
	}

	public function status($getData){
        $status = $getData['status'];
        $where = array();
                // no_paied  未支付
        // paied     已支付
        // no_post   未发货
        // posted    已发货
        // got_goods 已收货
        switch ($getData['status']) {
        	case 'no_paied':
        		$where['pay_status'] = ['=',0];
        		break;
        	case 'paied':
            	$where['pay_status'] = ['=',1];
        		break;
        	case 'no_post':
            	$where['post_status'] = ['=',0];
        		break;
        	case 'posted':
            	$where['post_status'] = ['=',1];
        		break;
        	case 'got_goods':
            	$where['post_status'] = ['=',2];
        		break;
        	default:
        		$where['pay_status'] = ['>',-1];
        		break;
        }
        return $where;
	}

	public function exportOrders($getData){
		$map1=[];
		$map2=[];
		$phpexcel=new \PHPExcel();
        $phpexcel->setActiveSheetIndex(0);
        $sheet=$phpexcel->getActiveSheet();
		//修复导出文档无法打开 
        $phpexcel->getProperties()->setCreator("文档创建者添翼博客")
									->setTitle("PHPExcel" . time())
									->setSubject("B2Cshop导出". time())
									->setDescription("phpexcel导出excel无法打开，提示文件格式或文件名无效，文件损毁，解决办法". time())
									->setKeywords("phpexcel");
									ob_end_clean();
		//结束 
        if(isset($getData['status'])){
            $map1=$this->status($getData);      //状态
		}
		if(isset($getData['select_value'])){
			$map2=$this->orderSelect($getData);
		}	
			// 根据未支付。已支付。未发货。已发货。已收货查询

		$orderRes=Db::name('order')->alias('o')->join('user u','o.user_id = u.id')->field('o.*,u.username')->where($map1)->where($map2)->select();
        $arr=[
            'id'=>'订单id',
            'out_trade_no'=>'订单编号',
            'goods_total_price'=>'商品总额',
            'pay_status'=>'支付状态',
            'order_status'=>'订单状态',
            'post_status'=>'配送状态',
            'distribution'=>'配送方',
            'payment'=>'支付方式',
            'name'=>'收货人',
            'phone'=>'手机号',
            'username'=>'用户名',
            'order_time'=>'下单时间'
        ];
        array_unshift($orderRes,$arr);
        $row = 0;
        foreach ($orderRes as $k => $v) {
            $row += 1;
            if($v['pay_status'] == 0){
                $v['pay_status'] = '未支付';
            }else{
                $v['pay_status'] = '已支付';
            }

            switch ($v['order_status']) {
            	case '0':
            		$v['order_status'] = '未完成';
            		break;
            	case '1':
            		$v['order_status'] = '已完成';
            		break;
            	case '2':
            		$v['order_status'] = '申请退款';
            		break;
            	case '3':
            		$v['order_status'] = '退款成功';
            		break;
            	default:
            		$v['order_status'] = '订单状态错误';
            		break;
            }

            switch ($v['post_status']) {
            	case '0':
            		$v['post_status'] = '未发货';
            		break;
            	case '1':
            		$v['post_status'] = '已发货';
            		break;
            	case '2':
            		$v['post_status'] = '已收货';
            		break;
            	default:
            		$v['post_status'] = '发货状态错误';
            		break;
            }

            switch ($v['payment']) {
            	case '0':
            		$v['payment'] = '支付宝';
            		break;
        		case '1':
            		$v['payment'] = '微信';
            		break;
            	default:
            		$v['payment'] = '余额';
            		break;
            }
            if($k){
               $v['order_time'] = date("Y-m-d H:i:s",$v['order_time']); 
            }
       
            // dump($v['order_time']); die;
            $sheet->setCellValue('A'.$row,$v['id'])
                  ->setCellValue('B'.$row,$v['out_trade_no'])
                  ->setCellValue('C'.$row,$v['goods_total_price'])
                  ->setCellValue('D'.$row,$v['pay_status'])
                  ->setCellValue('E'.$row,$v['order_status'])
                  ->setCellValue('F'.$row,$v['post_status'])
                  ->setCellValue('G'.$row,$v['distribution'])
                  ->setCellValue('H'.$row,$v['payment'])
                  ->setCellValue('I'.$row,$v['name'])
                  ->setCellValue('J'.$row,$v['phone'])
                  ->setCellValue('K'.$row,$v['username'])
                  ->setCellValue('L'.$row,$v['order_time']);
        }
        header('Content-Type: application/vnd.ms-excel');//设置下载前的头信息
        header('Content-Disposition: attachment;filename="dingdan.xlsx"');
        header('Cache-Control: max-age=0');
        $phpwriter=new \PHPExcel_Writer_Excel2007($phpexcel);
        $phpwriter->save('php://output');
        exit;
	}

}