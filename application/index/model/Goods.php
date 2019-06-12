<?php
namespace app\index\model;
use think\Model;
use catetree\Catetree;
class Goods extends Model
{
	//获取指定推荐位的推荐商品
   public function getRecposGoods($recposId,$limit=''){
   		$_hotIds=db('rec_item')->where(array('value_type'=>1,'recpos_id'=>$recposId))->select();
		$hotIds=array();
		foreach ($_hotIds as $k => $v) {
			$hotIds[]=$v['value_id'];
		}
		$map['id']=array('IN',$hotIds);
		$recRes=$this->field('id,mid_thumb,goods_name,shop_price')->where($map)->limit($limit)->select();
		return $recRes;
   }

   //获取首页一、二级分类下的所有的推荐商品
   public function getIndexRecposGoods($cateId,$recposId){
		$cateTree= new Catetree();
		$sonIds=$cateTree->childrenids($cateId,db('category'));
		$sonIds[]=$cateId;
		//2、获取新品推荐位里符合条件的商品信息
		$_recGoods=db('rec_item')->where(array('value_type'=>1,'recpos_id'=>$recposId))->select();
		$recGoods=array();
		foreach ($_recGoods as $kk => $vv) {
			$recGoods[]=$vv['value_id'];
		}
		$map['category_id']=array('IN',$sonIds);
		$map['id']=array('IN',$recGoods);
		// dump($map); 
		$goodsRes=db('goods')->where($map)->limit(6)->order('id DESC')->select();
		return $goodsRes;
   }

   /**
    * 商品价格的查询，如果设定的会员价格，就按会员价格，如果没有设定会员价格，则按照会员折扣率计算
    * @param  [int] $goods_id   商品id
    * @param  [prcie] $shop_price   商品价格
    * @return [type]           [description]
    */
   public function getMemberPrice($goods_id,$shop_price){
      $levelId=session('level_id');
      $levelRate=session('level_rate');
      if($levelId){
        $memberPrice=db('member_price')->where(['goods_id'=>$goods_id,'mlevel_id'=>$levelId])->find();
        if($memberPrice){
            $shop_price=$memberPrice['mprice'];
        }else{
            $shop_price=$shop_price * $levelRate / 100;
        }
      }

      return $shop_price;
   }






}
