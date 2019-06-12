<?php
namespace app\common\model;
use think\Model;
class Article extends Model
{
    public function getFooterArts()
    {
    	//获取帮助分类
        $helpCateRes=model('cate')->where(array('cate_type'=>3))->order('sort DESC')->select();
        foreach ($helpCateRes as $k => $v) {
        	$helpCateRes[$k]['arts']=$this->where(array('cate_id'=>$v['id']))->select();
        }
        return $helpCateRes;
    }

    public function getShopInfo(){
    	$artArr=$this->where('cate_id','=',3)->field('id,title')->select();
    	return $artArr;
    }

    //获取相应栏目下的文章，如公告的3篇文章和促销的3篇文章
    public function getArticle($cate_id,$limit=10){
        $Article=$this->field('id,title,link_url')->where('cate_id',$cate_id)->limit($limit)->select();
        return $Article;
    }
}
