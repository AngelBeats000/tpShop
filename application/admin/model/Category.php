<?php
namespace app\admin\model;
use think\Model;
class Category extends Model
{
    protected $field=true;
    protected static function init()
    {

        category::beforeUpdate(function ($category) {
            // 商品id
            $categoryId=$category->id;
            // 新增商品属性
            $categoryData=input('post.');
            //处理商品推荐位
            db('rec_item')->where(array('value_type'=>2,'value_id'=>$categoryId))->delete();
            if(isset($categoryData['recpos'])){
                foreach ($categoryData['recpos'] as $k => $v) {
                    db('rec_item')->insert(['recpos_id'=>$v,'value_id'=>$categoryId,'value_type'=>2]);
                }
            } 

            //分类筛选条件的修改
            $attrIds = $category['attr_id'];
            foreach ($attrIds as $k => $v) {
                if(empty($v)){
                    unset($attrIds[$k]);
                }
            }
            if($attrIds){
                $category->search_attr_ids = implode(',', $attrIds);
            }

        });

        category::afterInsert(function($category){
            //接受表单数据
            $categoryData=input('post.');
            $categoryId=$category->id;
            //处理商品推荐位
            if(isset($categoryData['recpos'])){
                foreach ($categoryData['recpos'] as $k => $v) {
                    db('rec_item')->insert(['recpos_id'=>$v,'value_id'=>$categoryId,'value_type'=>2]);
                }
            }
        });

        category::beforeInsert(function ($category) {
            $data = input('post.');
            $attrIds = $data['attr_id'];
            foreach ($attrIds as $k => $v) {
                if(empty($v)){
                    unset($attrIds[$k]);
                }
            }
            if($attrIds){
                $category->search_attr_ids = implode(',', $attrIds);
            }
        });
    }

    public function searchAttrArr($Categorys){
        $searchAttrArr = array();
        $attrIds=explode(',',$Categorys['search_attr_ids']);  //获取当前分类下的筛选属性id
        if($attrIds){
            $searchAttrArr=db('attr')->field('id,attr_name,type_id')->where('id','in',$attrIds)->select(); //获取当前分类下的筛选属性id对应的属性的名称和属性值所对应的属性
        }
        return $searchAttrArr;
    }
        

}