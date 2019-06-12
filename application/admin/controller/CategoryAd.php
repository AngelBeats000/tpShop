<?php

/**
 * @Author: Huang LongPan
 * @Date:   2019-05-28 19:58:19
 * @Last Modified by:   Huang LongPan
 * @Last Modified time: 2019-05-29 19:24:59
 */
namespace app\admin\controller;
use think\Controller;
class CategoryAd extends Controller
{
    public function lst()
    {
    	$cbRes=db('categoryAd')->field('cb.*,c.cate_name')->alias('cb')->join('category c',"cb.category_id = c.id")->order('cb.id DESC')->paginate(10);
    	$this->assign([
    		'cbRes'=>$cbRes,
    		]);
        return view('list');
    }

    public function add()
    {
    	if(request()->isPost()){
    		$data=input('post.');
            if($data['position']=='B' || $data['position']=='C'){
                $cas=db('CategoryAd')->where(['category_id'=>$data['category_id'],'position'=$data['position']])->select();
                if($cas){   
                    $this->error('该位置已经有推荐，请先删除原位置');
                }
            }
    		// $data['link_url'];  http://
    		if($data['link_url'] && stripos($data['link_url'],'http://') === false){
    			$data['link_url']='http://'.$data['link_url'];
    		}
    		//处理图片上传
    		if($_FILES['img_url']['tmp_name']){
    			$data['img_url']=$this->upload();
    		}else{
    			$this->error('暂无图片');
    		}
    		//验证
   //  		$validate = validate('link');
   //  		if(!$validate->check($data)){
			//     $this->error($validate->getError());
			// }
    		$add=db('categoryAd')->insert($data);
    		if($add){
    			$this->success('添加关联推荐成功！','lst');
    		}else{
    			$this->error('添加关联推荐失败！');
    		}
    		return;
    	}
        //获取所有的顶级分类
        $cateRes=model('Category')->where(array('pid'=>0))->select();
        $this->assign([
            'cateRes'=>$cateRes
            ]);
        return view();
    }

    public function edit()
    {
        //当前记录信息
        $categoryAd=db('categoryAd')->find(input('id'));
        if(request()->isPost()){
            $data=input('post.');

            if($data['position']=='B' || $data['position']=='C'){
                $cas=db('CategoryAd')->where(['category_id'=>$data['category_id'],'position'=$data['position']])->select();
                if($cas){   
                    $this->error('该位置已经有推荐，请先删除原位置');
                }
            }
            
            // $data['link_url'];  http://
            if($data['link_url'] && stripos($data['link_url'],'http://') === false){
                $data['link_url']='http://'.$data['link_url'];
            }
            //处理图片上传
            if($_FILES['img_url']['tmp_name']){
                //如果有原图请删除
                if($categoryAd['img_url']){
                    $cbImg=IMG_UPLOADS.$categoryAd['img_url'];
                    if(file_exists($cbImg)){
                        @unlink($cbImg);
                    }
                }
                $data['img_url']=$this->upload();
            }
            //验证
   //       $validate = validate('link');
   //       if(!$validate->check($data)){
            //     $this->error($validate->getError());
            // }
            $add=db('categoryAd')->update($data);
            if($add){
                $this->success('修改关联推荐成功！','lst');
            }else{
                $this->error('修改关联推荐失败！');
            }
            return;
        }
        //获取所有的顶级分类
        $cateRes=model('Category')->where(array('pid'=>0))->select();
        $this->assign([
            'cateRes'=>$cateRes,
            'categoryAd'=>$categoryAd,
            ]);
        return view();
    }

    public function del($id)
    {
        $cbObj=db('categoryAd');
        $cbs=$cbObj->field('img_url')->find($id);
        if($cbs['img_url']){
            $cbImg=IMG_UPLOADS.$cbs['img_url'];
            if(file_exists($cbImg)){
                @unlink($cbImg);
            }
        }
    	$del=$cbObj->delete($id);
    	if($del){
			$this->success('删除关联推荐成功！','lst');
		}else{
			$this->error('删除关联推荐失败！');
		}
    }

    //上传图片
    public function upload(){
	    // 获取表单上传文件 例如上传了001.jpg
	    $file = request()->file('img_url');
	    
	    // 移动到框架应用根目录/public/uploads/ 目录下
	    if($file){
	        $info = $file->move(ROOT_PATH . 'public' . DS . 'static'. DS .'uploads');
	        if($info){
	            return $info->getSaveName();
	        }else{
	            // 上传失败获取错误信息
	            echo $file->getError();
	            die;
	        }
	    }
	}


}