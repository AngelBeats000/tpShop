<?php

/**
 * @Author: Huang LongPan
 * @Date:   2019-06-15 21:52:59
 * @Last Modified by:   Huang LongPan
 * @Last Modified time: 2019-06-18 21:20:13
 */
namespace app\index\model;
use think\Model;
use think\Db;
/**
 * 订单提交处理
 */
class Flow extends Model
{
	public function flow3($uid,$data=array()){
		//处理收货地址表
		$adres=[
			'user_id'=>$uid,                      //用户id
			'name'=>$data['consignee'],				//收货人姓名
			'county'=>$data['county'],				//县城
			'province'=>$data['province'],			//省
			'city'=>$data['city'],					//市
			'adress'=>$data['address'],				//详细地址
			'phone'=>$data['mobile'],				//手机号
			'tel'=>$data['tel'],					//固话
			'zipcode'=>$data['zipcode'],			//邮编
			'sign_building'=>$data['sign_building'],//地址别名
			'best_time'=>$data['best_time'],		//最佳送货时间
			'email'=>$data['email'],				//邮箱
		];
		$uAdres=Db::name('adress')->where('user_id',$uid)->find();
		if($uAdres){
			Db::name('adress')->where('user_id',$uid)->update($adres);
		}else{
			Db::name('adress')->insert($adres);
		}

		//商品总价计算
		$goodsAmount=model('cart')->doGoodsPriceCount($data['cart_value']);
		// 处理订单表
		$orderData=[
			'out_trade_no'=>time().rand(111111,999999),  //订单号
			'user_id'=>$uid,							//用户id
			'goods_total_price'=>$goodsAmount,			//商品总额
			'order_total_price'=>$goodsAmount+0,		//订单总额=商品总金额+运费
			'payment'=>$data['payment'],				//支付方式
			'distribution'=>$data['distribution'],		//配送方式
			'name'=>$data['consignee'],					//收件人
			'phone'=>$data['mobile'],					//联系电话
			'province'=>$data['province'],				//省
			'city'=>$data['city'],						//市
			'county'=>$data['county'],					//县
			'address'=>$data['address'],				//详细地址
			'post_spent'=>10,							//运费
			'order_time'=>time()						//下单时间
		];
		$orderId = Db::name('order')->insertGetId($orderData);
		// 处理订单商品表
		if($orderId){
			$cartRes = model('Cart')->getGoodsListInCart($data['cart_value']);
			foreach ($cartRes as $k => $v) {
				$orderGoodsArr=[
					'goods_id'=>$v['id'],					//商品id
					'goods_name'=>$v['goods_name'],			//商品名称
					'member_price'=>$v['shop_price'],		//会员价
					'shop_price'=>$v['member_price'], 		//本店价
					'markte_price'=>$v['markte_price'],		//市场价
					'goods_attr_id'=>$v['goods_id_attr_id'],//商品属性id
					'goods_attr_str'=>$v['goodsStr'],		//商品属性字符串
					'goods_num'=>$v['number'],              //商品数量
					'order_id'=>$orderId						//订单编号
				];
				Db::name('order_goods')->insert($orderGoodsArr);
			}
		}
		
		return $orderId;

	}
}