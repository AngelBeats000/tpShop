<?php

/**
 * @Author: Huang LongPan
 * @Date:   2019-05-28 20:52:33
 * @Last Modified by:   Huang LongPan
 * @Last Modified time: 2019-06-02 20:55:44
 */
namespace app\common\model;
use think\Model;
/**
 * 
 */
class CategoryAd extends Model
{
	// 获取栏目下左侧的三个位置的图片
	public function getCategoryAd($id){
		$_data=db('CategoryAd')->where('category_id',$id)->select();
		$data=array();
		foreach ($_data as $k => $v) {
			$data[$v['position']][]=$v;
		}
		return $data;
	}

}