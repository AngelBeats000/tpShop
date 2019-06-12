<?php

/**
 * @Author: Huang LongPan
 * @Date:   2019-06-08 22:24:30
 * @Last Modified by:   Huang LongPan
 * @Last Modified time: 2019-06-12 21:53:27
 */
namespace app\index\model;
use think\Model;
use think\Db;
/**
 * 
 */
class Cart extends Model
{
	/**
	 * 添加购物车，把数据添加到cookie
	 * 格式：   cart[商品id-商品属性,商品属性=>商品数量]
	 * @param [type]  $goodsId   商品id
	 * @param string  $goodsAttr [商品属性]
	 * @param integer $goodsNum  [商品数量]
	 */
	public function addToCart($goodsId,$goodsAttr='',$goodsNum=1){
		$cart=isset($_COOKIE['cart']) ? unserialize($_COOKIE['cart']) : array(); //如果cookie里面有数据，这把cookie先反序列化赋给cart，没有就定义数组
		$key=$goodsId.'-'.$goodsAttr;         //组合数组的键
		if(isset($cart[$key])){
			$cart[$key] += $goodsNum;			  //购买的数量，如果购物车已经有数据，则购买数量增加
		}else{
			$cart[$key] = $goodsNum;
		}
		$aMonth=time()+30*24*3600;				//存入cookie的时间
		setcookie('cart', serialize($cart), $aMonth, '/');
	}

	/**
	 * 清空购物车
	 * @return [type] [description]
	 */
	public function clearCart(){
		setcookie('cart','',1,'/');
	}

	/**
	 * 删除购物车里面的一条数据
	 * @param  [type] $goodsId   [商品id]
	 * @param  string $goodsAttr [商品属性]
	 * @return [type]            [description]
	 */
	public function delCart($id_attr){
		$cart=isset($_COOKIE['cart']) ? unserialize($_COOKIE['cart']) : array();     //如果cookie里面有数据，这把cookie先反序列化赋给cart，没有就定义数组
		$key=$id_attr;         //组合数组的键
		unset($cart[$key]);
		$aMonth=time()+30*24*3600;				//存入cookie的时间
		setcookie('cart',serialize($cart),$aMonth, '/');
	}

	/**
	 * 批量删除购物车数据
	 * @param  [type] $CartValue [传递过来的购物车数据字符串，以“|”分隔]
	 * @return [type]            [description]
	 */
	public function deleteCartGoods($CartValue){
		$cart=isset($_COOKIE['cart']) ? unserialize($_COOKIE['cart']) : array();   
		$cartArr=explode('|',$CartValue);	//转换成数组
		foreach ($cartArr as $k => $v) {
			unset($cart[$v]);
		}
		$aMonth=time()+30*24*3600;				//存入cookie的时间
		setcookie('cart',serialize($cart),$aMonth, '/');
	}

	/**
	 * 修改购物车里面的数量
	 * @param  [type] $goodsId   [商品id]
	 * @param  string $goodsAttr [商品属性]
	 * @param  [type] $goodsNum  [商品数量]
	 * @return [type]            [description]
	 */
	public function updateCart($id_attr,$goodsNum){
		$cart=isset($_COOKIE['cart']) ?  unserialize($_COOKIE['cart']) : array();     //如果cookie里面有数据，这把cookie先反序列化赋给cart，没有就定义数组
		$key=$id_attr;         //组合数组的键
		$cart[$key] = $goodsNum;			  //购买的数量，如果购物车已经有数据，则购买数量增加
		$aMonth=time()+30*24*3600;				//存入cookie的时间
		setcookie('cart', serialize($cart), $aMonth, '/');
	}

	/**
	 * 获取购物车信息
	 * @return [type] [description]
	 */
	public function getGoodsListInCart(){
		$goods=model('Goods');
		$cart=isset($_COOKIE['cart']) ? unserialize($_COOKIE['cart']) : array();
		$_cart=array();
		foreach ($cart as $k => $v) {
			$arr=explode('-',$k);
			// 商品信息获取开始
			$goodsInfo=$goods->field('id,goods_name,sm_thumb,shop_price')->find($arr[0]);
			$memberPrice=$goods->getMemberPrice($arr[0],$goodsInfo['shop_price']);
			$_cart[$k]['goods_name']=$goodsInfo['goods_name'];
			$_cart[$k]['sm_thumb']=$goodsInfo['sm_thumb'];
			$_cart[$k]['shop_price']=$memberPrice;
			$_cart[$k]['number']=$v;
			$_cart[$k]['id']=$arr[0];
			$_cart[$k]['goods_id_attr_id']=$k;    //单独保存$k，用于区分复选框同一商品，不同属性
			// 商品信息获取结束
			$goodsStr=[];
			// 商品属性信息获取开始
			if($arr[1]){
				$goodsAttrRes=Db::name('goods_attr')->alias('ga')->join('attr a','ga.attr_id = a.id')->field('attr_value,attr_name,attr_price')->where('ga.id','in',$arr[1])->select();
				foreach ($goodsAttrRes as $k1 => $v1) {
					$_cart[$k]['shop_price'] += $v1['attr_price'];     //属性价格累计到商品价格
					$goodsStr[]=$v1['attr_name'].':'.$v1['attr_value'];
				}
				$_cart[$k]['goodsStr']=implode('<br>',$goodsStr);
			}else{
				$_cart[$k]['goodsStr']='<br>';
			}
			
			// 商品属性信息获取结束
		}
		return $_cart;
	}

	/**
	 * 购物车数据改动时，计算选中的商品的总价、节省价
	 * @param  [string] $recId [传递过来的id字符串,商品间一|分隔，属性间以','分隔] 1-7,8|1-8,9|3|4
	 * @return [array]        [返回包括商品总数、商品总金额、商品优惠总金额的数组]
	 */
	public function ajaxCartGoodsAmount($recId){
		$goods=model('goods');
		$recIdArr=explode('|',$recId);
		$cart=isset($_COOKIE['cart']) ? unserialize($_COOKIE['cart']) : array();
		//删除未选定的购物车中的商品
		foreach ($cart as $k => $v) {
			// $arr=explode('-',$k);
			if(!in_array($k,$recIdArr)){
				unset($cart[$k]);
			}
		}

		//开始计算
		$_cart['subtotal_number']=0;  //商品总数
		$_cart['goods_amount']=0;  //商品总金额
		$_cart['save_total_amount']=0;  //优惠节省总金额
		foreach ($cart as $k => $v) {
			$_cart['subtotal_number'] += $v;     //计算总数
			//开始计算总金额
			$arr=explode('-',$k);
			$goodsInfo=$goods->field('shop_price')->find($arr[0]);
			$memberPrice=$goods->getMemberPrice($arr[0],$goodsInfo['shop_price']);
 			
 			//计算节省的价格
			$_cart['save_total_amount'] += ($goodsInfo['shop_price'] - $memberPrice) * $v;   
			
			if($arr[1]){
				$goodsAttrRes=Db::name('goods_attr')->field('attr_price')->where('id','in',$arr[1])->select();
				foreach ($goodsAttrRes as $k1 => $v1) {
					$memberPrice += $v1['attr_price'];     //属性价格累计到商品价格
				}
			}
			$_cart['goods_amount'] += $memberPrice * $v;
		}

		return $_cart;
	}
}