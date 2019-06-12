<?php

/**
 * @Author: Huang LongPan
 * @Date:   2019-05-31 20:40:04
 * @Last Modified by:   Huang LongPan
 * @Last Modified time: 2019-05-31 20:43:00
 */
namespace app\admin\controller;
use think\Cache;
use think\Controller;
/**
 * 
 */
class Base	extends Controller
{	
	//清除缓存
    public function delCache(){
        if(Cache::clear()){
        	$this->success('清空缓存成功', 'index/index');
        }else{
        	$this->error('清空缓存失败');
        }
    }
}