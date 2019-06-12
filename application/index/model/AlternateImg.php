<?php

/**
 * @Author: Huang LongPan
 * @Date:   2019-05-30 16:41:42
 * @Last Modified by:   Huang LongPan
 * @Last Modified time: 2019-05-30 16:44:51
 */
namespace app\index\model;
use think\Model;

/**
 * 
 */
class AlternateImg extends Model
{
	
	public function getAlternateImg($limit=5){
		$AlternateRes=$this->where('status',1)->order('sort desc')->limit($limit)->select();
		return $AlternateRes;
	}
}