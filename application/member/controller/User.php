<?php

/**
 * @Author: Huang LongPan
 * @Date:   2019-06-02 20:14:40
 * @Last Modified by:   Huang LongPan
 * @Last Modified time: 2019-06-05 15:33:17
 */
namespace app\member\controller;
use app\index\controller\Base;

/**
 * 
 */
class User extends Base
{
	
	public function index(){

		return view();
	}

	public function logout(){
		session(NULL);
		cookie('username', NULL);
		cookie('password', NULL);
		$this->success('退出成功');
	}
}