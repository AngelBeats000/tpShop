<?php

/**
 * @Author: Huang LongPan
 * @Date:   2019-06-22 20:35:14
 * @Last Modified by:   Huang LongPan
 * @Last Modified time: 2019-06-22 20:39:51
 */
namespace app\admin\model;
use think\Model;
/**
 * 
 */
class User extends Model
{
	/**
	 * 添加处理
	 * @param array $data [description]
	 */
	public function add($data=array()){
		$data['password'] = md5($data['password']);
        if(!$data['register_time']){
            $data['register_time'] = time();
        }else{
            $data['register_time'] = strtotime($data['register_time']);
        }

        if(!$data['points']){
            $data['points'] = 0;
        }

		$add=$this->insert($data);
		return $add;
	}

	/**
	 * 修改处理
	 * @param  array  $data [description]
	 * @return [type]       [description]
	 */
	public function edit($data=array()){
		if($data['password']){
            $data['password'] = md5($data['password']);
        }else{
            unset($data['password']);
        }
        
        if(!$data['register_time']){
            $data['register_time'] = time();
        }else{
            $data['register_time'] = strtotime($data['register_time']);
        }

        if(!$data['points']){
            $data['points'] = 0;
        }

        $save=db('user')->update($data);
        return $save;
	}
}