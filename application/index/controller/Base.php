<?php
namespace app\index\controller;
use think\Controller;
use think\Cache;

class Base extends Controller
{
    public $config;//配置项数组

    public function _initialize(){
    	$this->_getFooterArts();//获取并分配底部帮助信息
        $this->_getNav();//获取并分配导航
    	$this->_getConfs();//获取并分配配置项，为config赋值
        $this->_getCates();
    }

    private function _getCates(){
        $cateRes=model('Category')->getCates();
        $this->assign([
            'cateRes'=>$cateRes,
            ]);
    }

    private function _getFooterArts(){
        $mArticle=model('Article');
        if(Cache::get('helpCateRes')){
            $helpCateRes=Cache::get('helpCateRes');
        }else{
            $helpCateRes=$mArticle->getFooterArts();//底部帮助信息
            Cache::set('helpCateRes',$helpCateRes,3600*24);
        }
        if(Cache::get('shopInfoRes')){
            $shopInfoRes=Cache::get('shopInfoRes');
        }else{
            $shopInfoRes=$mArticle->getShopInfo();//底部帮助信息
            Cache::set('shopInfoRes',$shopInfoRes,3600*24);
        }       
    	$this->assign([
    		'helpCateRes'=>$helpCateRes,
            'shopInfoRes'=>$shopInfoRes,
    		]);
    }

    private function _getNav(){
        if(Cache::get('nav')){
            $navRes=Cache::get('nav');
        }else{
            $_navRes=db('nav')->order('sort DESC')->select();
            $navRes=array();
            foreach ($_navRes as $k => $v) {
                $navRes[$v['pos']][]=$v;
            }
            Cache::set('nav',$navRes,3600*24);
        }
    	
    	$this->assign([
    		'navRes'=>$navRes,
    		]);
    }

    private function _getConfs(){
        if(Cache::get('confRes')){
            $confRes=Cache::get('confRes');
        }else{
            $confRes=model('Conf')->getConfs();
            Cache::set('confRes',$confRes,3600);
        }
        $this->config=$confRes;
        $this->assign([
            'configs'=>$confRes,
            ]);
    }


}
