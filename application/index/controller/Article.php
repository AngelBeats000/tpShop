<?php
namespace app\index\controller;
use think\Cache;
class Article extends Base
{
    public function index($id)
    {
    	//当前文章内容
        //（伪）#滑稽# 动态缓存
        $artName=$id.'article';
        if(Cache::get($artName)){
            $arts=Cache::get($artName);
        }else{
            $arts=db('article')->find($id);
            Cache::set($artName,$arts,3600);
        }
    	
    	//普通左侧栏目分类
        //缓存
        if(Cache::get('comCates')){
            $comCates=Cache::get('comCates');
        }else{
            $comCates=model('cate')->getComCates();
            Cache::set('comCates',$comCates,3600);
        }
    	
    	//帮助左侧栏目分类
        //缓存
        if(Cache::get('helpCates')){
            $helpCates=Cache::get('helpCates');
        }else{
            $helpCates=model('cate')->shopHelpCates();
            Cache::set('helpCates',$helpCates,3600);
        }
    	
        // 面包屑导航获取
        // 缓存
        $artsCate_id=$arts['cate_id'];
        if(Cache::get($artsCate_id)){
            $position=Cache::get($artsCate_id);
        }else{
            $position=model('cate')->position($arts['cate_id']);
            Cache::set($artsCate_id,$position,3600);
        }

        // $position[]=model('cate')->find($arts['cate_id']);
        // dump($position); die;
    	$this->assign([
    		'show_right'=>1,//文章列表和商品列表头部偏移判断
    		'comCates'=>$comCates,
    		'helpCates'=>$helpCates,
    		'arts'=>$arts,
            'position'=>$position,
    		]);
        return view('article');
    }
}
