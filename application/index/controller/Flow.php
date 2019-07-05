<?php

/**
 * @Author: Huang LongPan
 * @Date:   2019-06-09 21:19:37
 * @Last Modified by:   Huang LongPan
 * @Last Modified time: 2019-06-20 19:45:36
 */
namespace app\index\controller;
use think\Controller;
use think\Db;
/**
 * 
 */
class Flow extends Base
{
	/**
	 * [addToCart 商品界面点击立即购买，跳转到购物车]
	 */
	public function addToCart(){
		if(request()->isPost()){
			$data=input('goods');
			// dump($data);die;
			$goodsObj=json_decode($data);
			// dump($data);die;
			model('Cart')->addToCart($goodsObj->goods_id,$goodsObj->goods_attr,$goodsObj->number);
			return json(['error'=>0,'one_step_buy'=>1]);    //error=0,加入购物车成功，库存没问题，error=2库存不足，没有加入购物车
		}
		
	}

	/**
	 * 计算购物车数量
	 */
	public function CartGoodsNum(){
		return model('Cart')->CartGoodsNum();
	}

	/**
	 * [flow1 购物车第一步界面]
	 * @return [type] [description]
	 */
	public function flow1(){
		$cartGoodsRes=model('Cart')->getGoodsListInCart();
		// dump($cartGoodsRes);die;
		$this->assign('cartGoodsRes',$cartGoodsRes);
		return view();
	}

	/**
	 * 去支付页面，地址等信息的填写
	 * @return [type] [description]
	 */
	public function flow2(){
		$uid=session('uid');
		if(!$uid){
			$this->error('请先登录','index/Flow/flow1');
		}
		$data=input('post.');
		$doGoods=$data['cart_value'];
		if($doGoods){
			// 获取收货地址等信息
			$uAdress=Db::name('adress')->where('user_id',$uid)->find();
			//获取购物车信息
			$cartGoodsArr=model('Cart')->getGoodsListInCart($doGoods);
			dump($cartGoodsArr);
			$this->assign([
				'cartGoodsArr'=>$cartGoodsArr,
				'uAdress'=>$uAdress,
				'doGoods'=>$doGoods
		]);
			return view();
		}else{
			$this->error('未选择商品');
		}
	}

	/**
	 * flow2提交的数据处理
	 * @return [type] [description]
	 */
	public function flow3(){
		if(request()->isPost()){
			$uid = session('uid');
			if($uid){
				$data=input('post.');
				// dump($data);die;
				$orderId = model('Flow')->flow3($uid,$data);
				$this->success('新增成功', url('index/Flow/flow4' ,array('orderId' => $orderId),''));
			}else{
				$this->error('请先登录');
			}
		}
	}

	/**
	 * 支付页面
	 * @return [type] [description]
	 */
	public function flow4(){
		$oid=input('orderId');
		$orderRes=Db::name('order')->field('out_trade_no , order_total_price , payment , pay_status , distribution , name , phone , province , city , county , address , payment')->find($oid);
		dump($orderRes);
		dump(PAY_PLUS);
		if($orderRes['payment']==1 && $orderRes['pay_status']==0){
			include(PAY_PLUS . '/pay/alipay/pagepay/pagepay.php');
			$html=$response;
			$this->assign('html',$html);
		}
		$this->assign('ordRes',$orderRes);
		return view();
	}

	/**
	 * 微信支付二维码
	 * @param  [type] $outTradeNo [description]
	 * @return [type]             [description]
	 */
	public function wxewm($outTradeNo){
		//获取订单总价
        $orderTotalPrice = db('order')->where('out_trade_no',$outTradeNo)->value('order_total_price');
        $orderTotalPrice = $orderTotalPrice*100;
        $payPlus = PAY_PLUS.'/pay/wxpay/';
        include($payPlus.'index2.php');
        $obj = new \WeiXinPay2();
        $qrurl = $obj->getQrUrl($outTradeNo,$orderTotalPrice);
         //生成二维码
         \QRcode::png($qrurl);
	}

	/**
	 * 异步获取支付是否完成
	 * @return [type] [description]
	 */
	public function getPayStatus(){
		$outid=input('out_trade_no');
		$payStatus=db('order')->where('out_trade_no',$outid)->value('pay_status');
		return json(['payStatus'=>$payStatus]);
	}

	//支付宝支付成功页面
	 public function paySuccess(){
        $arr = input('get.');
        $outTradeNo = $arr['out_trade_no'];
        $orderInfo = db('order')->where('out_trade_no',$outTradeNo)->find();
        $this->assign([
            'orderInfo'=>$orderInfo
            ]);
        return view();

    }

    // 微信支付成功
    public function wxPaySuccess(){
        $payPlus = PAY_PLUS.'./pay/wxpay/';
        include($payPlus.'notify.php'); 
        new \Notify();  
    }

    //支付宝支付完异步处理页面
    public function aliNotify(){
        $orderDB = db('order');
        include(PAY_PLUS.'./pay/alipay/notify_url.php');
    }


	/**
	 * 每次打开购物车时，计算选中的商品总价、数量、优惠金额
	 * @return [type] [description]
	 */
	public function ajaxCartGoodsAmount(){
		if(request()->isPost()){
			$recId=input('rec_id');
			$cart=model('Cart')->ajaxCartGoodsAmount($recId);
			return json($cart);
		}	
	}

	/**
	 * 单删除购物车一条数据
	 * @return [type] [description]
	 */
	public function dropGoods(){
		$id=input('id_attr');
		model('Cart')->delCart($id);
		$this->redirect('index/Flow/flow1',302);
	}

	/**
	 * 批量删除购物车数据
	 * @return [type] [description]
	 */
	public function deleteCartGoods(){
		$cartValue=input('cart_value');		//以“|”分隔的购物车数据
		model('Cart')->deleteCartGoods($cartValue);
		return json(['status'=>1]);     //删除成功
	}

	/**
	 * 修改购物车数量
	 * @return [type] [description]
	 */
	public function updateCart(){
		$id_attr=input('rec_id');
		$number=input('goods_number');
		model('Cart')->updateCart($id_attr,$number);
		return json(['error'=>0]);
	}

	/**
	 * 点击去支付时提示的登录框
	 * @return [type] [description]
	 */
	public function loginDailog(){
		$backAct = input('back_act','');
        $ajaxLoginUrl = url('member/Account/login');
		$content="<div class=\"login-wrap\">\n    \n    <div class=\"login-form\">\n    \t    \t<div class=\"coagent\">\n            <div class=\"tit\"><h3>用第三方账号直接登录<\/h3><span><\/span><\/div>\n            <div class=\"coagent-warp\">\n            \t                                    <a href=\"user.php?act=oath&type=qq&user_callblock=flow.php\" class=\"qq\"><b class=\"third-party-icon qq-icon\"><\/b><\/a>\n                                            <\/div>\n        <\/div>\n                <div class=\"login-box\">\n            <div class=\"tit\"><h3>账号登录<\/h3><span><\/span><\/div>\n            <div class=\"msg-wrap\"><\/div>\n            <div class=\"form\">\n            \t<form name=\"formLogin\" action=\"user.php\" method=\"post\" onSubmit=\"userLogin();return false;\">\n                \t<div class=\"item\">\n                        <div class=\"item-info\">\n                            <i class=\"iconfont icon-name\"><\/i>\n                            <input type=\"text\" id=\"loginname\" name=\"username\" class=\"text\" value=\"\"  \/>\n                        <\/div>\n                    <\/div>\n                    <div class=\"item\">\n                        <div class=\"item-info\">\n                            <i class=\"iconfont icon-password\"><\/i>\n                            <input type=\"password\"   style=\"display:none\"\/>\n                            <input type=\"password\" id=\"nloginpwd\" name=\"password\" value=\"\" class=\"text\"  \/>\n                        <\/div>\n                    <\/div>\n                                        <div class=\"item\">\n                        <input id=\"remember\" name=\"remember\" type=\"checkbox\" class=\"ui-checkbox\">\n                        <label for=\"remember\" class=\"ui-label\">请保存我这次的登录信息。<\/label>\n                    <\/div>\n                    <div class=\"item item-button\">\n                    \t<input type=\"hidden\" name=\"dsc_token\" value=\"c125d234e15ffb1a86841a60e23a2991\" \/>\n                        <input type=\"hidden\" name=\"act\" value=\"act_login\" \/>\n                        <input type=\"hidden\" name=\"back_act\" value=\"".$backAct."\" \/>\n                        <input type=\"submit\" name=\"submit\" value=\"登&nbsp;&nbsp;录\" class=\"btn sc-redBg-btn\" \/>\n                    <\/div>\n                    <div class=\"lie\">\n                    \t<a href=\"user.php?act=get_password\" class=\"notpwd gary fl\" target=\"_blank\">忘记密码？<\/a>\n                    \t<a href=\"user.php?act=register\" class=\"notpwd red fr\" target=\"_blank\">免费注册<\/a>                    <\/div>\n                <\/form>\n            <\/div>\n    \t<\/div>        \n    <\/div>\n    <script type=\"text\/javascript\">\n\t\tvar username_empty=\"<i><\/i>\u8bf7\u8f93\u5165\u7528\u6237\u540d\";\n    \tvar username_shorter=\"<i><\/i>\u7528\u6237\u540d\u957f\u5ea6\u4e0d\u80fd\u5c11\u4e8e 4 \u4e2a\u5b57\u7b26\u3002\";\n    \tvar username_invalid=\"<i><\/i>\u7528\u6237\u540d\u53ea\u80fd\u662f\u7531\u5b57\u6bcd\u6570\u5b57\u4ee5\u53ca\u4e0b\u5212\u7ebf\u7ec4\u6210\u3002\";\n    \tvar password_empty=\"<i><\/i>\u8bf7\u8f93\u5165\u5bc6\u7801\";\n    \tvar password_shorter=\"<i><\/i>\u767b\u5f55\u5bc6\u7801\u4e0d\u80fd\u5c11\u4e8e 6 \u4e2a\u5b57\u7b26\u3002\";\n    \tvar confirm_password_invalid=\"<i><\/i>\u4e24\u6b21\u8f93\u5165\u5bc6\u7801\u4e0d\u4e00\u81f4\";\n    \tvar captcha_empty=\"<i><\/i>\u8bf7\u8f93\u5165\u9a8c\u8bc1\u7801\";\n    \tvar email_empty=\"<i><\/i>Email \u4e3a\u7a7a\";\n    \tvar email_invalid=\"<i><\/i>Email \u4e0d\u662f\u5408\u6cd5\u7684\u5730\u5740\";\n    \tvar agreement=\"<i><\/i>\u60a8\u6ca1\u6709\u63a5\u53d7\u534f\u8bae\";\n    \tvar msn_invalid=\"<i><\/i>msn\u5730\u5740\u4e0d\u662f\u4e00\u4e2a\u6709\u6548\u7684\u90ae\u4ef6\u5730\u5740\";\n    \tvar qq_invalid=\"<i><\/i>QQ\u53f7\u7801\u4e0d\u662f\u4e00\u4e2a\u6709\u6548\u7684\u53f7\u7801\";\n    \tvar home_phone_invalid=\"<i><\/i>\u5bb6\u5ead\u7535\u8bdd\u4e0d\u662f\u4e00\u4e2a\u6709\u6548\u53f7\u7801\";\n    \tvar office_phone_invalid=\"<i><\/i>\u529e\u516c\u7535\u8bdd\u4e0d\u662f\u4e00\u4e2a\u6709\u6548\u53f7\u7801\";\n    \tvar mobile_phone_invalid=\"<i><\/i>\u624b\u673a\u53f7\u7801\u4e0d\u662f\u4e00\u4e2a\u6709\u6548\u53f7\u7801\";\n    \tvar msg_un_blank=\"<i><\/i>\u7528\u6237\u540d\u4e0d\u80fd\u4e3a\u7a7a\";\n    \tvar msg_un_length=\"<i><\/i>\u7528\u6237\u540d\u6700\u957f\u4e0d\u5f97\u8d85\u8fc715\u4e2a\u5b57\u7b26\uff0c\u4e00\u4e2a\u6c49\u5b57\u7b49\u4e8e2\u4e2a\u5b57\u7b26\";\n    \tvar msg_un_format=\"<i><\/i>\u7528\u6237\u540d\u542b\u6709\u975e\u6cd5\u5b57\u7b26\";\n    \tvar msg_un_registered=\"<i><\/i>\u7528\u6237\u540d\u5df2\u7ecf\u5b58\u5728,\u8bf7\u91cd\u65b0\u8f93\u5165\";\n    \tvar msg_can_rg=\"<i><\/i>\u53ef\u4ee5\u6ce8\u518c\";\n    \tvar msg_email_blank=\"<i><\/i>\u90ae\u4ef6\u5730\u5740\u4e0d\u80fd\u4e3a\u7a7a\";\n    \tvar msg_email_registered=\"<i><\/i>\u90ae\u7bb1\u5df2\u5b58\u5728,\u8bf7\u91cd\u65b0\u8f93\u5165\";\n    \tvar msg_email_format=\"<i><\/i>\u683c\u5f0f\u9519\u8bef\uff0c\u8bf7\u8f93\u5165\u6b63\u786e\u7684\u90ae\u7bb1\u5730\u5740\";\n    \tvar msg_blank=\"<i><\/i>\u4e0d\u80fd\u4e3a\u7a7a\";\n    \tvar no_select_question=\"<i><\/i>\u60a8\u6ca1\u6709\u5b8c\u6210\u5bc6\u7801\u63d0\u793a\u95ee\u9898\u7684\u64cd\u4f5c\";\n    \tvar passwd_balnk=\"<i><\/i>\u5bc6\u7801\u4e2d\u4e0d\u80fd\u5305\u542b\u7a7a\u683c\";\n    \tvar msg_phone_blank=\"<i><\/i>\u624b\u673a\u53f7\u7801\u4e0d\u80fd\u4e3a\u7a7a\";\n    \tvar msg_phone_registered=\"<i><\/i>\u624b\u673a\u5df2\u5b58\u5728,\u8bf7\u91cd\u65b0\u8f93\u5165\";\n    \tvar msg_phone_invalid=\"<i><\/i>\u65e0\u6548\u7684\u624b\u673a\u53f7\u7801\";\n    \tvar msg_phone_not_correct=\"<i><\/i>\u624b\u673a\u53f7\u7801\u4e0d\u6b63\u786e\uff0c\u8bf7\u91cd\u65b0\u8f93\u5165\";\n    \tvar msg_mobile_code_blank=\"<i><\/i>\u624b\u673a\u9a8c\u8bc1\u7801\u4e0d\u80fd\u4e3a\u7a7a\";\n    \tvar msg_mobile_code_not_correct=\"<i><\/i>\u624b\u673a\u9a8c\u8bc1\u7801\u4e0d\u6b63\u786e\";\n    \tvar msg_confirm_pwd_blank=\"<i><\/i>\u786e\u8ba4\u5bc6\u7801\u4e0d\u80fd\u4e3a\u7a7a\";\n    \tvar msg_identifying_code=\"<i><\/i>\u9a8c\u8bc1\u7801\u4e0d\u80fd\u4e3a\u7a7a\";\n    \tvar msg_identifying_not_correct=\"<i><\/i>\u9a8c\u8bc1\u7801\u4e0d\u6b63\u786e\";\n    \t\t\/* *\n\t\t * \u4f1a\u5458\u767b\u5f55\n\t\t*\/ \n\t\tfunction userLogin()\n\t\t{\n\t\t\tvar frm = $(\"form[name='formLogin']\");\n\t\t\tvar username = frm.find(\"input[name='username']\");\n\t\t\tvar password = frm.find(\"input[name='password']\");\n\t\t\tvar captcha = frm.find(\"input[name='captcha']\");\n\t\t\tvar dsc_token = frm.find(\"input[name='dsc_token']\");\n\t\t\tvar error = frm.find(\".msg-error\");\n\t\t\tvar msg = '';\n\t\t\t\n\t\t\tif(username.val()==\"\"){\n\t\t\t\terror.show();\n\t\t\t\tusername.parents(\".item\").addClass(\"item-error\");\n\t\t\t\tmsg += username_empty;\n\t\t\t\tshowMesInfo(msg);\n\t\t\t\treturn false;\n\t\t\t}\n\t\t\t\n\t\t\tif(password.val()==\"\"){\n\t\t\t\terror.show();\n\t\t\t\tpassword.parents(\".item\").addClass(\"item-error\");\n\t\t\t\tmsg += password_empty;\n\t\t\t\tshowMesInfo(msg);\n\t\t\t\treturn false;\n\t\t\t}\n\t\t\t\n\t\t\tif(captcha.val()==\"\"){\n\t\t\t\terror.show();\n\t\t\t\tcaptcha.parents(\".item\").addClass(\"item-error\");\n\t\t\t\tmsg += captcha_empty;\n\t\t\t\tshowMesInfo(msg);\n\t\t\t\treturn false;\n\t\t\t}\n\t\t\tvar back_act=frm.find(\"input[name='back_act']\").val();\n\t\t\t\n\t\t\t\t\t\t\tAjax.call( '".$ajaxLoginUrl."', 'username=' + username.val()+'&password='+password.val()+'&dsc_token='+dsc_token.val()+'&captcha='+captcha.val()+'&back_act='+back_act, return_login , 'POST', 'JSON');\n\t\t\t\t\t}\n\t\t\n\t\tfunction return_login(result)\n\t\t{\n\t\t\tif(result.error>0)\n\t\t\t{\n\t\t\t\tshowMesInfo(result.message);\t\n\t\t\t}\n\t\t\telse\n\t\t\t{\n\t\t\t\tif(result.ucdata){\n\t\t\t\t\t$(\"body\").append(result.ucdata)\n\t\t\t\t}\n\t\t\t\tlocation.href=result.url;\n\t\t\t}\n\t\t}\n\t\t\n\t\tfunction showMesInfo(msg) {\n\t\t\t$('.login-wrap .msg-wrap').empty();\n\t\t\tvar info = '<div class=\"msg-error\"><b><\/b>' + msg + '<\/div>';\n\t\t\t$('.login-wrap .msg-wrap').append(info);\n\t\t}\n\t<\/script>\n<\/div>\n";
        $content=stripcslashes($content);
        return json(["error"=>0,"message"=>"","content"=>$content]);
	}
}