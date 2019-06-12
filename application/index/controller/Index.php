<?php
namespace app\index\controller;
use think\Cache;     //缓存

class Index extends Base
{
    public function index()
    {
        //调用首页轮播图
        if(Cache::get('AlternateRes')){
            $AlternateRes=Cache::get('AlternateRes');
        }else{
            $AlternateRes=model('AlternateImg')->getAlternateImg(5);
            Cache::set('AlternateRes',$AlternateRes,3600*24);
        }
        
        //调用首页的3篇公告和3篇促销文章
        if(Cache::get('Article1')){
            $Article1=Cache::get('Article1');
        }else{
            $Article1=model('Article')->getArticle(26,3);
            Cache::set('Article1',$Article1,3600*24);
        }
        if(Cache::get('Article2')){
            $Article2=Cache::get('Article2');
        }else{
            $Article2=model('Article')->getArticle(27,3);
            Cache::set('Article2',$Article2,3600*24);
        }
       

    	// 调用首页推荐商品
        //缓存
        if(Cache::get('hotGoodsRes')){
            $hotGoodsRes=Cache::get('hotGoodsRes');
        }else{
            $hotGoodsRes=model('goods')->getRecposGoods(8,20);
            Cache::set('hotGoodsRes',$hotGoodsRes,3600);
        }
    	
        //首页大循环
        if(Cache::get('categoryRes')){
           $categoryRes=Cache::get('categoryRes');
        }else{
            $categoryRes=model('category')->getRecCategorys(5,0);//首页推荐 推荐位的顶级分类
            foreach ($categoryRes as $k => $v) {
                //获取顶级分类下被设为 首页推荐的二级分类
                $categoryRes[$k]['children']=model('category')->getRecCategorys(5,$v['id']);
                //获取二级栏目及其子栏目下的精品推荐商品，用于首页显示
                foreach ($categoryRes[$k]['children'] as $k1 => $v1) {
                    //1、获取当前主分类下所有的子分类id
                    $categoryRes[$k]['children'][$k1]['bestGoods']=model('Goods')->getIndexRecposGoods($v1['id'],7);
                }
                //获取新品推荐
                $categoryRes[$k]['newRecGoods']=model('Goods')->getIndexRecposGoods($v['id'],4);

                //获取该顶级栏目下的品牌信息
                $categoryRes[$k]['brands']=model('category')->getCategoryBrands($v['id']);

                //获取栏目下三个位置的图片
                $categoryRes[$k]['position']=model('categoryAd')->getCategoryAd($v['id']);
            }
            Cache::set('categoryRes',$categoryRes,3600*24);
        }
    	
    	// dump($categoryRes);die;
    	$this->assign([
    		'show_right'=>1,//文章列表和商品列表头部偏移判断
    		'show_nav'=>1,//首页导航默认展开，其他页面默认收缩
    		'categoryRes'=>$categoryRes,  //首页大分类数据
            'hotGoodsRes'=>$hotGoodsRes, //首页推荐商品
            'Article1'=>$Article1,   //3篇公告和3篇促销文章
            'Article2'=>$Article2,
            'AlternateRes'=>$AlternateRes,     //轮播图调用
    		]);
        return view();
    }
}
