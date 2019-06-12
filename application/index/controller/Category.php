<?php
namespace app\index\controller;

class Category extends Base 
{
    public function index($id)
    {
        return view('category');
    }

    public function getCateInfo($id){
    	$mCategory=model('Category');
    	//获取二级和三级子分类
    	$cateRes=$mCategory->getSonCates($id);
    	//获取关联词
    	$cwRes=$mCategory->getCategoryWords($id);
    	//获取关联品牌及推广信息
    	$brands=$mCategory->getCategoryBrands($id);
    	// dump($brands); die;
    	$data=array();
    	$cat=''; 
    	foreach ($cateRes as $k => $v) {
    		$cat.='<dl class="dl_fore1"><dt><a href="'.url('index/Category/index',['id'=>$v['id']]).'" target="_blank">'.$v['cate_name'].'</a></dt><dd>';
			    	foreach ($v['children'] as $k1 => $v1) {
			    		$cat.='<a href="'.url('index/Category/index',['id'=>$v1['id']]).'" target="_blank">'.$v1['cate_name'].'</a>';
			    	}
			$cat.='</dd></dl>
				<div class="item-brands"><ul></ul></div>
				<div class="item-promotions"></div>';
    	}
		
		$channels='';
		foreach ($cwRes as $k => $v) {
			$channels.='<a href="'.$v['link_url'].'" target="_blank">'.$v['word'].'</a>';
		}
		$bransAdContent='';
		$bransAdContent.='
		<div class="cate-brand">';
	            foreach ($brands['brands'] as $k => $v) {
	            	$bransAdContent.=
	            	'<div class="img">
	            		<a href="'.$v['brand_url'].'" target="_blank" title="'.$v['brand_name'].'"><img src="'.config('view_replace_str.__uploads__').'/'.$v['brand_img'].'"></a>
	            	</div>';
	            }
	    $bransAdContent.='</div>';
	    $bransAdContent.='
		<div class="cate-promotion">
	        <a href="'.$brands['promotion']['pro_url'].'" target="_blank"><img width="199" height="97" src="'.config('view_replace_str.__uploads__').'/'.$brands['promotion']['pro_img'].'"></a>
	    </div>';
    	$data['topic_content']=$channels;
    	$data['cat_content']=$cat;
    	$data['brands_ad_content']=$bransAdContent;
    	$data['cat_id']=$id;
    	return json($data);
    }

}
