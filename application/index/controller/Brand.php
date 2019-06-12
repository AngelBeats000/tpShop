<?php

/**
 * @Author: Huang LongPan
 * @Date:   2019-05-29 20:56:49
 * @Last Modified by:   Huang LongPan
 * @Last Modified time: 2019-05-29 22:11:58
 */
namespace app\index\controller;
use think\Controller;
/**
 * 
 */
class Brand extends Controller
{
	
	//ajax换一批
	public function lst(){
		if(request()->isAjax()){
			$data=array();
			$brandRes=db('brand')->order('id desc')->paginate(17);
			$data['totalPage']=$brandRes->lastPage();
			$brands=$brandRes->items();
			$html='';
			$html.='<div class="brand-list" id="recommend_brands"><ul>';
			foreach ($brands as $k => $v) {
				$html.='<li><div class="brand-img"><a href="'.$v['brand_url'].'" target="_blank"><img src="'.config('view_replace_str.__uploads__').'/'.$v['brand_img'].'"></a></div><div class="brand-mash"></div></li>';
			}
			$html.='</ul><a href="javascript:void(0);" ectype="changeBrand" class="refresh-btn"><i class="iconfont icon-rotate-alt"></i><span>换一批</span></a></div>';
			$data['brands']=$html;
			return json($data);
		}
	}
}