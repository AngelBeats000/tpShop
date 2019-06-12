<?php

/**
 * @Author: Huang LongPan
 * @Date:   2019-06-02 15:05:13
 * @Last Modified by:   Huang LongPan
 * @Last Modified time: 2019-06-05 15:03:23
 */
namespace app\member\model;
use think\Model;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception; 
use ChuanglanSmsHelper\ChuanglanSmsApi;
/**
 * 
 */
class Account extends Model
{
	//邮箱验证码
	public function _sendMail($to, $title, $content){
	    $mail = new PHPMailer();
	    // 设置为要发邮件
	    $mail->IsSMTP();
	    // 是否允许发送HTML代码做为邮件的内容
	    $mail->IsHTML(TRUE);
	    $mail->CharSet='UTF-8';
	    // 是否需要身份验证
	    $mail->SMTPAuth=TRUE;
	    /*  邮件服务器上的账号是什么 -> 到163注册一个账号即可 */
	    $mail->From="13166991785@163.com";
	    $mail->FromName="php商城";
	    $mail->Host="smtp.163.com";  //发送邮件的服务协议地址
	    $mail->Username="13166991785";
	    $mail->Password="ddnmdhy12138";
	    // 发邮件端口号默认25
	    $mail->Port = 25;
	    // 收件人
	    $mail->AddAddress($to);
	    // 邮件标题
	    $mail->Subject=$title;
	    // 邮件内容
	    $mail->Body=$content;
	    $sendRes=$mail->Send();
	    if($sendRes){
	    	$msg=['status'=>0,'msg'=>'发送成功'];
	    }else{
	    	$msg=['status'=>1,'msg'=>'发送失败'];
	    }
	    return json($msg);
	}

	//手机验证码   
	/*
		$phone:电话号码
		$type: 0:注册时的验证码，1：找回密码时的验证码    2:向用户发送新密码
		$password    新密码
	 */
	public function _sendMsg($phone,$type=0,$password=0){
		$clapi = new ChuanglanSmsApi();
		$code = mt_rand(100000,999999);
		if($type==0){
			session('phoneCode', $code);
			$result = $clapi -> sendSMS($phone,'欢迎您注册，验证码是：'.$code);     //第一个参数是手机号，第二个是短信内容
		}elseif($type==1){
			session('getPasswordPhoneNum', $phone);
			session('getPasswordCode', $code);
			$result = $clapi -> sendSMS($phone,'您的验证码是：'.$code.'，请妥善保管');     //第一个参数是手机号，第二个是短信内容
		}else{
			$result = $clapi -> sendSMS($phone,'您的新密码是：'.$password.'，请妥善保管');     //第一个参数是手机号，第二个是短信内容
		}
		
		if(!is_null(json_decode($result))){
			$output=json_decode($result,true);
			if(isset($output['code']) && $output['code']=='0' ){
				$msg=['status'=>0,'msg'=>'发送成功'];
			}else{
				$msg=['status'=>1,'msg'=>$output['errrMsg']];
			}
		}else{
			$msg=['status'=>1,'msg'=>$result];
		}
		return json($msg);
	}

	//注册
	public function reg($data){
		$userData=[];
		$userData['username']=$data['username'];
		$userData['password']=md5($data['password']);
		$userData['email']=$data['email'];
		$userData['mobile_phone']=$data['mobile_phone'];
		$userData['register_type']=$data['register_type'];
		$userData['register_time']=time();
		$add=db('user')->insert($userData);
		return $add;
	}

	//登录
	public function login($data,$type=0){
		$userData=array();
		$userData['username']=$data['username'];
		$userData['password']=md5($data['password']);
		$user=db('user')->where('username',$userData['username'])->whereOr('email',$userData['username'])->whereOr('mobile_phone',$userData['username'])->find();
		if($user){
			if( $user['password'] == $userData['password'] ){
				session('uid', $user['id']);
				session('username', $user['username']);
				$memberLevel=db('member_level')->field('id,rate')->where('bom_point','<=',$user['points'])->where('top_point','>=',$user['points'])->find();   // 查询当前会员的折扣率和会员等级的id
				session('level_id', $memberLevel['id']);
				session('level_rate', $memberLevel['rate']);
				if(isset($data['remember'])){
					$aMonth=7*24*60*60;
					$username=encryption($user['username'],0);
					$password=encryption($data['password'],0);
					cookie('username',$username , $aMonth,'/');
					cookie('password', $password, $aMonth,'/');
				}
				 $arr=[
                    'error'=>0,
                    'message'=>"",
                ];
                if($type==1){
                	return $arr;
                }else{
                	return json($arr);
                }
			}else{
				$arr=[
	                'error'=>1,
	                'message'=>"<i class='iconfont icon-minus-sign'></i>用户名或者密码错误",
	                'url'=>'',
                ];
                if($type==1){
                	return $arr;
                }else{
                	return json($arr);
                }
			}
		}else{
			$arr=[
				'error'=>1,
				'message'=>'<i class="iconfont icon-minus-sign"></i>用户名或密码错误',
				'url'=>''
			];
			if($type==1){
            	return $arr;
            }else{
            	return json($arr);
            }
		}
	}

	//
	public function checkSendMsg($data){
		$phoneNum=trim($data['phoneNum']);
        if($phoneNum){
            $users=db('user')->where(array('mobile_phone'=>$phoneNum))->find();
            if($users){
                return $this->_sendMsg($phoneNum,1);
            }else{
                $arr['msg']='用户不存在！';
                $arr['status']=1;
                return json($arr); 
            }
        }else{
            $arr['msg']='请填写手机号！';
            $arr['status']=1;
            return json($arr);
        }
	}

	/**
	 * 验证找回密码时的验证码验证
	 * @param  [type] $data 传递过来的验证码
	 * @return [type]       [description]
	 */
	public function checkPhoneCode($data){
		$mobileCode=trim($data['mobile_code']);
        $sCode=session('getPasswordCode');
        $mobilePhone=session('getPasswordPhoneNum');
        if($sCode == $mobileCode){
        	$password=mt_rand(100000,999999);
            $_password=md5($password);
            $update=db('user')->where(array('mobile_phone'=>$mobilePhone))->update(['password'=>$_password]);
            if($update){
                $this->_sendMsg($mobilePhone,2,$password);
                session(NULL);
            }else{
                return false;
            }
        }else{
            return false;
        }
	}

	/**
	 * 邮箱找回密码
	 * [_sendPwdEmail description]
	 * @return [type] [description]
	 */
	public function _sendPwdEmail($data){
		$userData['username']=trim($data['user_name']);
        $userData['email']=trim($data['email']);
        //信息比对
        $users=db('user')->where(array('username'=>$userData['username']))->find();
        if($users){
            if($users['email'] == $userData['email']){
                $password=mt_rand(100000,999999);
                $_password=md5($password);
                $update=db('user')->where(array('username'=>$userData['username']))->update(['password'=>$_password]);
                if($update){
                	$title='PHP商城';
                	$content="您的新密码是：".$password."请保管好，可以登录后再进行修改";
                    $_msg=$this->_sendMail($userData['email'],$title,$content);
                    $msg['status']=0;
                    $msg['msg']='修改密码成功！';
                }else{
                    $msg['status']=3;
                    $msg['msg']='修改密码失败！';
                }
            }else{
               $msg['status']=2;
               $msg['msg']='您填写的电子邮件地址错误，请重新输入！';
            }
        }else{
            $msg['status']=1;
            $msg['msg']='您填写的用户名不存在，请重新输入！';
        }

        return $msg;
	}
}