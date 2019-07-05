<?php

/**
 * @Author: Huang LongPan
 * @Date:   2019-06-20 19:50:47
 * @Last Modified by:   Huang LongPan
 * @Last Modified time: 2019-06-22 20:03:14
 */
namespace app\admin\controller;
use think\Controller;
use think\Db;
use phpoffice\phpexcel\Classes\PHPExcel;
/**
 * 
 */
class Order extends Controller
{	
	/**
	 * 列表
	 * @return [type] [description]
	 */
	public function lst(){
		// dump(input('get.'));
		$select_value='';	  //查询条件内容，
		$select_base='';      //查询条件，用户名，订单号
		$orderStatus='';      //筛选类型
		$map2 = [];
		$map1 = [];
		// 根据用户名或
		if(request()->isGet()){
			$data = input('get.');
			if(!empty($data['select_value'])){
				$select_value=$data['select_value'];
				$select_base=$data['select_base'];
				$map1=model('Order')->orderSelect($data);
			}
			// 根据未支付。已支付。未发货。已发货。已收货查询
			$getData = input('get.');
			if(isset($getData['status'])){
				$map2=model('Order')->status($getData);
				$orderStatus=$getData['status'];
			}
		}

		$orderArr=Db::name('order')->alias('o')->join('user u','o.user_id = u.id')->field('o.*,u.username')->where($map1)->where($map2)->paginate(10,false,['query' => request()->param()]);

		$this->assign([
			'orderRes'=>$orderArr,
			'select_base'=>$select_base,
			'select_value'=>$select_value,
			'orderStatus'=>$orderStatus
		]);
		return view('list');
	}

	/**
	 * 订单打印
	 * @return [type] [description]
	 */
	public function exportOrders(){
		$data=input('get.');
		model('Order')->exportOrders($data);
	}
	/**
	 * 订单查询条件页面
	 * @return [type] [description]
	 */
	public function orderSelect(){
		return view();
	}

	/**
	 *	订单详情
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	public function detail($id){
		$orderInfo=Db::name('order')->alias('o')->join('user u','o.user_id = u.id')->field('o.*,u.username')->find($id);
		$this->assign('orderInfo',$orderInfo);
		return view();
	}

	/**
	 * 订单修改
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	public function edit($id){
		if(request()->isPost()){
			$data=input('post.');
            $userId = db('user')->where('username',$data['username'])->value('id');
            if($userId){
                $data['user_id'] = $userId;
            }
            $data['order_time'] = strtotime($data['order_time']);
    		//验证
    		$validate = validate('order');
    		if(!$validate->check($data)){
			    $this->error($validate->getError());
			}
    		$save=db('order')->strict(false)->update($data);
    		if($save !== false){
    			$this->success('修改订单成功！','lst');
    		}else{
    			$this->error('修改订单失败！');
    		}
    		return;
		}
		$orderInfo=Db::name('order')->alias('o')->join('user u','o.user_id = u.id')->field('o.*,u.username')->find($id);
		$this->assign('orderInfo',$orderInfo);
		return view();
	}

	/**
	 * 订单商品查询
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	public function orderGoods($id){
		$GoodsArr=Db::name('order_goods')->where('order_id',$id)->paginate(10);
		$this->assign('GoodsArr',$GoodsArr);
		return view();
	}

	/**
	 * 订单商品修改
	 * @return [type] [description]
	 */
	public function orderGoodsEdit(){
        if(request()->isPost()){
            $data = input('post.');
            $save = db('order_goods')->update($data);
            if($save !== false){
                $this->success('修改订单商品成功！');
            }else{
                $this->error('修改订单商品失败！');
            }
        }
        $orderGoodsId = input('id');
        $orderGoodsInfo = db('orderGoods')->find($orderGoodsId);
        $this->assign([
            'orderGoodsInfo'=>$orderGoodsInfo,
            ]);
        return view();
    }

    /**
     * 订单商品删除
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function orderGoodsDel($id){
        $res = db('orderGoods')->delete($id);
        $this->success('删除订单商品成功！');
    }

    /**
     * 订单删除
     * @return [type] [description]
     */
	public function del(){
		$order=db('order');
        $del=$order->delete($id);
        Db::name('order_goods')->where('order_id',$id)->delete();
    	if($del){
			$this->success('删除订单成功！','lst');
		}else{
			$this->error('删除订单失败！');
		}
	}

}