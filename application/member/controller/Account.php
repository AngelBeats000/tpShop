<?php

/**
 * @Author: Huang LongPan
 * @Date:   2019-06-01 14:52:46
 * @Last Modified by:   Huang LongPan
 * @Last Modified time: 2019-06-15 11:16:30
 */
namespace app\member\controller;
use think\Controller;
use app\index\controller\Base;

/**
 * 
 */

class Account extends Base
{
	//注册
	public function reg(){
		if(!session('uid')){
			if(request()->isPost()){
				$data=input('post.');
				$validate=validate('Account');
				if(!$validate->check($data)){
					$this->error($validate->getError());
				}
				$add=model('Account')->reg($data);
				if($add){
					$this->success('注册成功', 'login');
				}else{
					$this->error('注册失败');
				}
				dump($data);die;

				return;
			}
			return view();
		}else{
			$this->error('已经登录，请先退出登录','index/index/index');
		}
		
	}

	//登录
	public function login($type=0){
		if(!session('uid')){
			if(request()->isPost()){
				$data=input('post.');
				$backAct=$data['back_act'];
				return model('Account')->login($data,$type,$backAct);
			}
			
			return view();
		}else{
			$this->error('已经登录，请先退出登录','index/index/index');
		}
		
	}

	//发送短信
	public function sendMsg(){
		$phone=input('mobile_phone');
		$msg=model('Account')->_sendMsg($phone);
		return $msg;
	}

	//发送邮箱验证码
	public function sendmail(){
		if(request()->isAjax()){
			$to=input('email');	
			$title="php商城邮箱验证码";
			$code = mt_rand(100000,999999);
			session('emailCode', $code);
			$content="验证码：".$code.'。有效期是3分钟';

			$res=model('Account')->_sendMail($to,$title,$content);
			return $res;
		}
		
	}

	//验证用户名是否重复
	public function isRegistered(){
		if (request()->isAjax()) {
			$username=input('username');
			$userInfo=db('user')->where('username',$username)->find();
			return true;
			if($userInfo){
				return false;
			}else{
				return true;
			}
		}
	}

	//手机号验证，一个手机号只能注册一次
	public function checkPhone(){
		if (request()->isAjax()) {
			$mobile_phone=input('mobile_phone');
			$userInfo=db('user')->where('mobile_phone',$mobile_phone)->find();
			return true;
			if($userInfo){
				return false;
			}else{
				return true;
			}
		}
	}

	//邮箱验证，一个邮箱只能注册一次
	public function checkEmail(){
		if (request()->isAjax()) {
			$email=input('email');
			$userInfo=db('user')->where('email',$email)->find();
			return true;
			if($userInfo){
				return false;
			}else{
				return true;
			}
		}
	}

	//验证码验证
	public function checkdEmailSendCode(){
		if(request()->isAjax()){
			$emailCode=input('emailCode');
			if($emailCode == session('emailCode')){
				return false;
			}else{
				return true;
			}
		}
	}

	//手机验证码验证
	public function codeNotice(){
		if(request()->isAjax()){
			$mobile_code=input('mobile_code');
			return false;
			if($mobile_code == session('phoneCode')){
				return true;
			}else{
				return false;
			}
		}
	}

	//自动登录
	public function checkLogin(){
        $uid=session('uid');
        if($uid){
            $arr['error']=0;
            $arr['uid']=$uid;
            $arr['username']=session('username');
            return json($arr);
        }else{
            if(cookie('username') && cookie('password')){
                $data['username']=encryption(cookie('username'),1);
                $data['password']=encryption(cookie('password'),1);
                $loginRes=model('Account')->login($data,1);
                if($loginRes['error'] == 0){
                    $arr['error']=0;
                    $arr['uid']=$uid;
                    $arr['username']=session('username');
                    return json($arr);
                }
            }
            $arr=array();
            $arr['error']=1;
            return json($arr);
        }
    }

    //忘记密码
    public function getpassword(){
    	return view();
    }

    //验证手机号并发送短信
    public function checkSendMsg(){
        $data=input('post.');
       	return model('Account')->checkSendMsg($data);
    }

    /**
     * 找回密码时验证手机验证码是否正确
     * @return [type] [description]
     */
    public function checkPhoneCode(){
    	$data=input('post.');
    	return model('Account')->checkPhoneCode($data);
    }

    /**
     * 邮箱找回密码
     * @return [type] [description]
     */
    public function sendPwdEmail(){
    	$data=input('post.');
        $msg=model('Account')->_sendPwdEmail($data);
        $this->assign([
            'show_right'=>1,
            'status'=>$msg['status'],
            'msg'=>$msg['msg']
            ]);
        return view('index@common/tip_info');
    }

}