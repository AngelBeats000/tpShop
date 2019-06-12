<?php

/**
 * @Author: Huang LongPan
 * @Date:   2019-06-09 21:19:37
 * @Last Modified by:   Huang LongPan
 * @Last Modified time: 2019-06-12 21:54:49
 */
namespace app\index\controller;
use think\Controller;
/**
 * 
 */
class Flow extends Base
{
	/**
	 * [addToCart 商品界面点击立即购买，跳转到购物车]
	 */
	public function addToCart(){
		if(request()->isPost()){
			$data=input('goods');
			// dump($data);die;
			$goodsObj=json_decode($data);
			// dump($data);die;
			model('Cart')->addToCart($goodsObj->goods_id,$goodsObj->goods_attr,$goodsObj->number);
			return json(['error'=>0,'one_step_buy'=>1]);    //error=0,加入购物车成功，库存没问题，error=2库存不足，没有加入购物车
		}
		
	}

	/**
	 * [flow1 购物车第一步界面]
	 * @return [type] [description]
	 */
	public function flow1(){
		$cartGoodsRes=model('Cart')->getGoodsListInCart();
		// dump($cartGoodsRes);die;
		$this->assign('cartGoodsRes',$cartGoodsRes);
		return view();
	}

	/**
	 * 每次打开购物车时，计算选中的商品总价、数量、优惠金额
	 * @return [type] [description]
	 */
	public function ajaxCartGoodsAmount(){
		if(request()->isPost()){
			$recId=input('rec_id');
			$cart=model('Cart')->ajaxCartGoodsAmount($recId);
			return json($cart);
		}	
	}

	/**
	 * 单删除购物车一条数据
	 * @return [type] [description]
	 */
	public function dropGoods(){
		$id=input('id_attr');
		model('Cart')->delCart($id);
		$this->redirect('index/Flow/flow1',302);
	}

	/**
	 * 批量删除购物车数据
	 * @return [type] [description]
	 */
	public function deleteCartGoods(){
		$cartValue=input('cart_value');		//以“|”分隔的购物车数据
		model('Cart')->deleteCartGoods($cartValue);
		return json(['status'=>1]);     //删除成功
	}

	public function updateCart(){
		$id_attr=input('rec_id');
		$number=input('goods_number');
		model('Cart')->updateCart($id_attr,$number);
		
	}
}