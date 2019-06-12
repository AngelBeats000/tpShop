<?php

/**
 * @Author: Huang LongPan
 * @Date:   2019-05-30 15:47:03
 * @Last Modified by:   Huang LongPan
 * @Last Modified time: 2019-05-30 16:54:33
 */

namespace app\admin\controller;
use think\Controller;
use catetree\Catetree;

class AlternateImg extends Controller
{
    public function lst()
    {
    	$cate=new Catetree();
        $cateObj=db('AlternateImg');
        if(request()->isPost()){
            $data=input('post.');
            $cate->cateSort($data['sort'],$cateObj);
            $this->success('排序成功！',url('lst'));
        }
    	$cateRes=$cateObj->order('sort DESC')->select();
    	$this->assign([
    		'linkRes'=>$cateRes,
    		]);
        return view('list');
    }

    public function add()
    {
    	if(request()->isPost()){
    		$data=input('post.');
    		// $data['link_url'];  http://
    		if($data['link_url'] && stripos($data['link_url'],'http://') === false){
    			$data['link_url']='http://'.$data['link_url'];
    		}
    		//处理图片上传
    		if($_FILES['img_src']['tmp_name']){
    			$data['img_src']=$this->upload();
    		}
    		//验证
   //  		$validate = validate('link');
   //  		if(!$validate->check($data)){
			//     $this->error($validate->getError());
			// }
    		$add=db('AlternateImg')->insert($data);
    		if($add){
    			$this->success('添加轮播图成功！','lst');
    		}else{
    			$this->error('添加轮播图失败！');
    		}
    		return;
    	}
        return view();
    }

    public function edit()
    {
    	if(request()->isPost()){
    		$data=input('post.');
    		// $data['link_url'];  http://
    		if($data['link_url'] && stripos($data['link_url'],'http://') === false){
    			$data['link_url']='http://'.$data['link_url'];
    		}
    		//处理图片上传
    		if($_FILES['img_src']['tmp_name']){
    			$oldlinks=db('AlternateImg')->field('img_src')->find($data['id']);
    			$oldlinkImg=IMG_UPLOADS.$oldlinks['img_src'];
    			if(file_exists($oldlinkImg)){
    				@unlink($oldlinkImg);
    			}
    			$data['img_src']=$this->upload();
    		}
    		//验证
   //  		$validate = validate('link');
   //  		if(!$validate->check($data)){
			//     $this->error($validate->getError());
			// }
    		$save=db('AlternateImg')->update($data);
    		if($save !== false){
    			$this->success('修改轮播图成功！','lst');
    		}else{
    			$this->error('修改轮播图失败！');
    		}
    		return;
    	}
    	$id=input('id');
    	$links=db('AlternateImg')->find($id);
    	$this->assign([
    		'links'=>$links,
    		]);
        return view();
    }

    public function del($id)
    {
        $linkObj=db('AlternateImg');
        $links=$linkObj->field('img_src')->find($id);
        if($links['img_src']){
            $linkImg=IMG_UPLOADS.$links['img_src'];
            if(file_exists($linkImg)){
                @unlink($linkImg);
            }
        }
    	$del=$linkObj->delete($id);
    	if($del){
			$this->success('删除轮播图成功！','lst');
		}else{
			$this->error('删除轮播图失败！');
		}
    }

    //上传图片
    public function upload(){
	    // 获取表单上传文件 例如上传了001.jpg
	    $file = request()->file('img_src');
	    
	    // 移动到框架应用根目录/public/uploads/ 目录下
	    if($file){
	        $info = $file->move(ROOT_PATH . 'public' . DS . 'static'. DS .'uploads');
	        if($info){
	        	$img = $info->getSaveName();
	        	$img = str_replace('\\','/',$img);
	            return $img;
	        }else{
            // 上传失败获取错误信息
            echo $file->getError();
            die;
	        }
	    }
	}


}