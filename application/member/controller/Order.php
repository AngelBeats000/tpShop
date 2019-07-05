<?php
namespace app\member\controller;
use app\index\controller\Base;
class Order extends Base
{
	//订单列表
    public function orderlist(){
        $uid = session('uid');
        // 按条件获取不同状态的订单
        $orderStatus = input('order_status');
        $map = array();
        if(!$orderStatus){
            $orderStatus = 1;
        }
        if($orderStatus == 1){
            $map['id'] = ['>',1];
        }elseif($orderStatus == 2){
            $map['order_status'] = 0;
        }elseif($orderStatus == 3){
            $map['pay_status'] = 0;
        }elseif($orderStatus == 4){
            $map['post_status'] = 1;
        }elseif($orderStatus == 5){
            $map['order_status'] = 1;
        }else{
            $map['id'] = ['>',1];
        }


        if($uid){   
            $orderRes = db('order')->field('id,out_trade_no,user_id,order_total_price,order_status,pay_status,post_status,order_time,name')->where('user_id',$uid)->where('del_status',0)->where($map)->paginate(10,false,['query'=>request()->param()])->each(function($item, $key){
                    $orderid = $item["id"]; //获取数据集中的id
                    $goodsRes = db('orderGoods')->alias('og')->field('g.mid_thumb,g.goods_name,og.member_price,og.goods_attr_str,og.goods_num')->join('goods g',"g.id = og.goods_id")->where('order_id',$orderid)->select(); //根据ID查询相关其他信息
                    $item['goods'] = $goodsRes; //给数据集追加字段num并赋值
                    return $item;
                });
            $order = db('order');
            //全部订单的数量
            $totalCount = $order->where('del_status',0)->count();
            //未完成
            $notDoneCount = $order->where(['del_status'=>0, 'order_status'=>0])->count();
            //未支付
            $notPayCount = $order->where(['del_status'=>0, 'pay_status'=>0])->count();
            //待收货
            $notGetCount = $order->where(['del_status'=>0, 'post_status'=>1])->count();
            //已完成订单数量
            $doneCount = $order->where(['del_status'=>0, 'order_status'=>1])->count();

            $this->assign([
                'orderRes'=>$orderRes,
                'totalCount'=>$totalCount,
                'notDoneCount'=>$notDoneCount,
                'notPayCount'=>$notPayCount,
                'notGetCount'=>$notGetCount,
                'doneCount'=>$doneCount,
                'orderStatus'=>$orderStatus
                ]);
            return view();
        }else{
            $this->error('请先登录','member/account/login');
        }
        
    }

    // 订单详情列表
    public function orderDetail(){
        $uid = session('uid');
        if($uid){
            $orderId = input('id');
            if(!$orderId){
                $this->error('非法操作！');
            }
            $orders = db('order')->find($orderId);
            if(!$orders){
                $this->error('非法操作！');
            }
            if($orders['user_id']!=$uid){
                $this->error('无法查看他人的订单');
            }

            //订单进度
            $progress = 1;
            if($orders['pay_status'] == 1){
                $progress = 2;
                if($orders['post_status'] == 1){
                    $progress = 3;
                }

                if($orders['post_status'] == 2){
                    $progress = 4;
                    if($orders['order_status'] == 1){
                        $progress = 5;
                    }
                }
            }
            //当前订单商品查询
            $goodsRes = db('orderGoods')->alias('og')->field('g.id,g.mid_thumb,g.goods_name,og.member_price,og.goods_attr_str,og.goods_num')->join('goods g',"g.id = og.goods_id")->where('order_id',$orderId)->select(); 
            // dump($goodsRes);
            $this->assign([
                'orders'=>$orders,
                'orderProgress'=>$progress,
                'goodsRes'=>$goodsRes
                ]);
            return view();
        }else{
            $this->error('请先登录','member/account/login');
        }
        
    }

    public function orderDel(){
        $uid=session('uid');
        if($uid){
            $orderId = input('id');
            $userId = db('order')->where('id',$orderId)->value('user_id');
            if($uid != $userIdr){
                $this->error('无法删除他人的订单');
            }
            $save = db('order')->update(['id'=>$orderId, 'del_status'=>1]);
            if($save){
                $this->success('删除订单成功！');
            }else{
                $this->error('删除订单失败！');
            }
        }else{
            $this->error('请先登录','index/account/login');
        }
        
    }

}
