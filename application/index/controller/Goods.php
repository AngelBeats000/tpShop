<?php
namespace app\index\controller;

class Goods extends Base
{
    public function index()
    {
    	$id=input('id');
    	$goodsInfo=db('goods')->find($id);		//商品基本信息的获取
    	$goodsPhoto=db('goods_photo')->field('big_photo,mid_photo,sm_photo')->where('goods_id',$id)->select();      //获取商品相册
    	//商品主图信息组合到商品相册数组里面
    	if($goodsInfo['og_thumb']){
    		$goodsThumb=[
    			'big_photo'=>$goodsInfo['big_thumb'],
    			'mid_photo'=>$goodsInfo['mid_thumb'],
    			'sm_photo'=>$goodsInfo['sm_thumb']
    		];
    		array_unshift($goodsPhoto, $goodsThumb);         
    	}

        //获取商品属性信息
        $gaArr=db('goods_attr')->alias('ga')->join('attr a','ga.attr_id = a.id')->field('ga.*,a.attr_name,a.attr_type')->where('ga.goods_id',$id)->select();
        $radioAttrArr=array();   //单选属性
        $uniAttrArr=array();     //唯一属性

        foreach ($gaArr as $k => $v) {
            if($v['attr_type'] == 1){
                $radioAttrArr[$v['attr_name']][]=$v;           //以单选属性类别重组单选属性
            }else{
                $uniAttrArr[]=$v;
            }
        }
        // dump($radioAttrArr);
    	$this->assign([
    		'goodsInfo'=>$goodsInfo,
    		'goodsPhoto'=>$goodsPhoto,
            'radioAttrArr'=>$radioAttrArr,
            'uniAttrArr'=>$uniAttrArr
    	]);
        return view('goods');
    }

    /**
     * [动态的获取实际上商品的价格]
     * @param  [type] $goods_id   商品id
     * @param  [type] $shop_price [商品价格]
     * @return [type]             [实际商品的价格]
     */
    public function ajaxGetMemberPrice($goods_id,$shop_price){
    	if(request()->isAjax()){
    		$price=model('goods')->getMemberPrice($goods_id,$shop_price);
    		return json($price);
    	}
    }
}
