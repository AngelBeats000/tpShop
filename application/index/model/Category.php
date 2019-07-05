<?php
namespace app\index\model;
use think\Model;
use think\Db;
class Category extends Model
{
	//顶级和二级分类获取
   public function getCates(){
      $cateRes=$this->where(array('pid'=>0))->order('sort desc')->select();
      foreach ($cateRes as $k => $v) {
         $cateRes[$k]['children']=$this->where(array('pid'=>$v['id']))->select();
      }
      return $cateRes;
   }

	//通过顶级分类id获取二级和三级子分类
	public function getSonCates($id){
		$cateRes=$this->where(array('pid'=>$id))->select();//获取二级分类
		foreach ($cateRes as $k => $v) {
			$cateRes[$k]['children']=$this->where(array('pid'=>$v['id']))->select();//获取三级分类
		}
		return $cateRes;
	}   

	//通过顶级分类获取相关的关联搜索词
	public function getCategoryWords($id){
		$cwRes=db('categoryWords')->where('category_id','=',$id)->select();
		return $cwRes;
	}

	//获取当前栏目关联品牌及推广信息
	public function getCategoryBrands($id){
		$data=array();
		$brand=db('brand');
		$categoryBrands=db('categoryBrands')->where(array('category_id'=>$id))->find();
		$brandsIdArr=explode(',', $categoryBrands['brands_id']);
		foreach ($brandsIdArr as $k => $v) {
			$data['brands'][]=$brand->find($v);
		}
		//推广信息
		$data['promotion']['pro_img']=$categoryBrands['pro_img'];
		$data['promotion']['pro_url']=$categoryBrands['pro_url'];
		return $data;
	}

	//首页推荐分类获取
	public function getRecCategorys($recposId,$pid=0){
		$_cateRes=db('rec_item')->where(array('recpos_id'=>$recposId,'value_type'=>2))->select();
		$cateRes=array();
		foreach ($_cateRes as $k => $v) {
			$catesArr=db('category')->where(array('id'=>$v['value_id'],'pid'=>$pid))->find();
			if($catesArr){
				$cateRes[]=$catesArr;
			}
		}
		return $cateRes;
	}

	//筛选获取方案一，直接根据栏目表的属性值查找对应的属性，然后把属性的可选值作为筛选
    // 缺点：可能存在该筛选条件下没有商品
	public function SearchAttrIds1($id){
		$attrRes=[];
		if(cache('attrRes_'.$id)){
			$attrRes=cache('attrRes_'.$id);
		}else{
			$sai = db('Category')->where('id',$id)->value('search_attr_ids');
			if($sai){
				$attrRes = db('attr')->where('id','in',$sai)->field('attr_name,id,attr_value')->select();
				foreach ($attrRes as $k => $v) {
					if($v['attr_value']){
						$attrRes[$k]['attr_values']=explode(",", $v['attr_value']);
					}
				}
			}
			cache('attrRes_'.$id, $attrRes, 3600);
		}
		
		return $attrRes;
	}

	// 方案二。根据栏目表的属性值search_attr_ids查找对应的属性名，如颜色。硬盘。cpu的id，用来查找good_attr的attr_value(红色。黄色。绿色等),然后去除重复的数据
    // 缺点：操作复杂，效率不高。 但是可保证每个筛选条件下都有商品
	public function SearchAttrIds2($id){
		if(cache('attrRes_'.$id)){
			$attrRes=cache('attrRes_'.$id);
		}else{
			$cateInfo = db('category')->find($id);
			$sai = $cateInfo['search_attr_ids'];
	        $attrRes = db('attr')->field('id, attr_name')->where('id','in',$sai)->select();
	        foreach ($attrRes as $k => $v) {
	            $attrValues = db('goods_attr')->field('attr_value, attr_id, goods_id')->where('attr_id',$v['id'])->select();
	            // $attrValues=array_unique_fb($attrValues);
	            //判断当前商品是否属于当前栏目
	            foreach ($attrValues as $k1 => $v1) {
	                $categoryId = db('goods')->where('id', $v1['goods_id'])->value('category_id');
	                if($categoryId != $id){
	                    unset($attrValues[$k1]);
	                }
	            }
	            if(!$attrValues){
	                unset($attrRes[$k]);
	            }else{
	                $attrRes[$k]['attr_values'] = assoc_unique($attrValues, 'attr_value');   //二维数组去重
	            }
	        }
	        cache('attrRes_'.$id, $attrRes, 3600);
		}
		
        return $attrRes;
	}

	// 价格区间计算
	public function price($id){
		if(cache('priceSection_'.$id)){
			$priceSection=cache('priceSection_'.$id);
		}else{
			$psNum = db('category')->where('id',$id)->value('ps_num');  //价格区间数
	        $goodsPrice=db('goods')->field('MIN(shop_price) min_price, MAX(shop_price) max_price')->where('category_id',$id)->find(); //查找最高价和最低价
	       	if($goodsPrice['min_price'] == $goodsPrice['max_price']){
	       		$sprice = 0;
	       	}else{
	       		$sprice = intval(($goodsPrice['max_price'] - $goodsPrice['min_price']) / $psNum);
	       	}
	        $priceSection = [];
	        $firstPrice = intval($goodsPrice['min_price']);
	        $goodsTable = Db::name('goods');
	        for($i = 0; $i < $psNum; $i++){
	        	// 把价格区间的格式变成  最低价 - 39   40-59  60-最高价 
	            if($i==0){
	                $_priceSection = $firstPrice.'-'.(ceil(($firstPrice+$sprice)/10)*10-1);
	            }elseif($i == ($psNum-1)){
	                $_priceSection = (ceil($firstPrice/10)*10).'-'.intval($goodsPrice['max_price']);
	            }else{
	                $startPrice = ceil($firstPrice/10)*10;
	                $endPrice = ceil(($firstPrice+$sprice)/10)*10-1;
	                $_priceSection = $startPrice.'-'.$endPrice; 
	            }
	            // 排除价格区间内没有商品的区间
	            $_priceSection = explode('-',$_priceSection);
	            $startPrice = $_priceSection[0];
	            $endPrice = $_priceSection[1];
	            $goodsCount = db('goods')->where('shop_price','between',[$startPrice,$endPrice])->where('category_id',$id)->where('on_sale','1')->count('id');
	            if($goodsCount){
	            	$priceSection[] = $startPrice .'-'. $endPrice;
	            }

	            $firstPrice+=$sprice;
	        }
	        cache('priceSection_'.$id, $priceSection, 3600);
		}
		
        return $priceSection;
	}

	/**
	 * 栏目下商品的品牌
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	public function brand($id){
		if(cache('categoryBrand_'.$id)){
			$brandRes=cache('categoryBrand_'.$id);
		}else{
			$_brandRes = db('goods')->field('brand_id')->where(array('category_id'=>$id))->select();
	        $_brandRes = assoc_unique($_brandRes, 'brand_id');
	        $brandRes = array();
	        foreach ($_brandRes as $k => $v) {
	            if($v['brand_id']){
	                $brandRes[] = db('brand')->field('id, brand_name')->find($v['brand_id']);
	            }
	        }
			cache('categoryBrand_'.$id, $brandRes, 3600);
		}
		return $brandRes;
	}

	 /**
     * 商品筛选
     * @return [type] [description]
     */
    public function search_goods($cateId){
        $where = [
            'g.on_sale'=>1,
            // 'g.category_id'=>$cateId
        ];
        // 价格筛选
        if(input('price')){
            $priceArr=explode('-',input('price'));
            $where['g.shop_price']=['between',[$priceArr[0],$priceArr[1]]];
        }

        // 品牌筛选
        if(input('brand')){
            $where['g.brand_id'] = input('brand');
        }
        // 排序方式
        $orderBy='xl';
        $orderWay='DESC';
        $ob = input('ob');
        $ow = input('ow');
        if($ob && in_array($ob, ['xl','price','addtime','pl'])){
            $orderBy = $ob;
            if($ow && in_array($ow, ['asc','desc'])){
                $orderWay = $ow;
            }
        }

        // 自定义属性筛选
        $filterAttr = input('filter_attr');
        $_attrGoodsIds = null;         //循环每个条件的商品，然后取重复的值    ，如 array('1,2,3,4,5','2,3,47,8','3,4,5,6') 取重复的商品id
        if($filterAttr){
            $filterAttr = explode('.',$filterAttr);
            foreach ($filterAttr as $k => $v) {
                if($v){
                    $_v = explode('-', $v);
                    $attrGoodsIds = Db::name('goods_attr')->field('GROUP_CONCAT(goods_id) goods_id')->where(['attr_id'=>$_v[1], 'attr_value'=>$_v[0]])->find();
                    dump($attrGoodsIds);
                    // 每次查询完之后取重复的值
                    if($_attrGoodsIds == null){
                        $_attrGoodsIds = explode(',', $attrGoodsIds['goods_id']);
                    }else{
                        $tempArr = explode(',', $attrGoodsIds['goods_id']);
                        $_attrGoodsIds = array_intersect($_attrGoodsIds, $tempArr);     //取重复函数
                        if(empty($_attrGoodsIds)){
                            break;   //如果没有重复的则直接退出循环
                        }
                    }
                }
            }

            if($_attrGoodsIds){
                $where['g.id'] = array('in',$_attrGoodsIds);
            }else{
                $where['g.id'] = array('eq', 0);
            }

        }

        $goodsRes = db('goods')->field("g.id,g.sm_thumb, g.goods_name, g.shop_price, g.mid_thumb, IFNULL(SUM(b.goods_num), 0) xl, (SELECT COUNT(id) FROM tp_comment c WHERE g.id=c.goods_id) pl, (SELECT group_concat(mid_photo) FROM tp_goods_photo gp WHERE g.id=gp.goods_id) mid_photo, (SELECT group_concat(id) FROM tp_recpos WHERE rec_type=1 AND id IN(SELECT recpos_id FROM tp_rec_item WHERE value_type=1 AND g.id=value_id)) recpos")->alias('g')->join('order_goods b','g.id = b.goods_id AND b.order_id IN(SELECT id FROM tp_order WHERE pay_status=1)','LEFT')->where($where)->group('g.id')->order("$orderBy $orderWay")->paginate(24);
        return $goodsRes;
    }

}
