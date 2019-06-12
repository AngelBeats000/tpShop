<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:81:"D:\phpstudy\PHPTutorial\WWW\shop\public/../application/member\view\user\index.htm";i:1559480639;s:81:"D:\phpstudy\PHPTutorial\WWW\shop\public/../application/index\view\common\head.htm";i:1559480329;s:83:"D:\phpstudy\PHPTutorial\WWW\shop\public/../application/index\view\common\footer.htm";i:1516245587;}*/ ?>
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="童攀课堂-php课堂-www.tongpankt.com" />
<meta name="Description" content="童攀课堂-php课堂-www.tongpankt.com" />
<title>交流群：383432579</title>
<link rel="shortcut icon" href="favicon.ico" />
<link rel="stylesheet" type="text/css" href="__index__/css/base.css" />
<link rel="stylesheet" type="text/css" href="__index__/css/style.css" />
<link rel="stylesheet" type="text/css" href="__index__/css/iconfont.css" />
<link rel="stylesheet" type="text/css" href="__index__/css/purebox.css" />
<link rel="stylesheet" type="text/css" href="__index__/css/quickLinks.css" />
<script type="text/javascript" src="__index__/js/jquery-1.9.1.min.js"></script><script type="text/javascript" src="__index__/js/jquery.json.js"></script><script type="text/javascript" src="__index__/js/transport_jquery.js"></script>
<link rel="stylesheet" type="text/css" href="__index__/css/user.css">
<link rel="stylesheet" type="text/css" href="__index__/js/perfect-scrollbar.min.css" />
</script>
<style type="text/css">
	.nav{
		height: 90px;
	}
	.nav-main{
		height: 90px !important;
		line-height: 120px !important;
	}
	.nav .nav-main li a:hover, .nav .nav-main li a.curr {
		color:#02807A;
}
	.w1200{
		height: 90px;
	}
	.navitems{
		float: right;
	}
	.dsc-zoom {
    border-bottom: 2px solid #02807A;
}
</style>
</head>
<body>
<div class="site-nav" id="site-nav">
    <div class="w w1390">
        <div class="fl">
          <div class="txt-info" id="ECS_MEMBERZONE">     
	<a href="#" class="link-login red">请登录</a>
	    <a href="#" class="link-regist">免费注册</a>
    	<div class="scrollBody" id="scrollBody"></div>  
            </div>
        </div>
        <ul class="quick-menu fr">
            <?php if(is_array($navRes['top']) || $navRes['top'] instanceof \think\Collection || $navRes['top'] instanceof \think\Paginator): $i = 0; $__LIST__ = $navRes['top'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$top_nav): $mod = ($i % 2 );++$i;?>
            <li>
            	<div class="dt"><a <?php if($top_nav['open'] == 1): ?> target="_blank" <?php endif; ?> href="<?php echo $top_nav['nav_url']; ?>" ><?php echo $top_nav['nav_name']; ?></a></div>
            </li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>
</div>
<div class="header">
    <div class="w w1390">
        <div class="logo">
            <div class="logoImg"><a href="#"><img src="__index__/img/logo.png" /></a></div>
        </div>
        <div class="dsc-search">
            <div class="form">
                <form id="searchForm" name="searchForm" method="get" action="search.php" onSubmit="return checkSearchForm()" class="search-form">
                        <input autocomplete="off" onKeyUp="lookup(this.value);" name="keywords" type="text" id="keyword" value="内衣" class="search-text"/>
                    <input type="hidden" name="store_search_cmt" value="0">
                    <button type="submit" class="button button-goods" onclick="checkstore_search_cmt(0)" >搜商品</button>
                </form>
    <ul class="keyword">
    <li><a href="#" target="_blank">周大福</a></li>
    <li><a href="#" target="_blank">内衣</a></li>
    <li><a href="#" target="_blank">Five Plus</a></li>
    <li><a href="#" target="_blank">手机</a></li>
    </ul>
    
                <div class="suggestions_box" id="suggestions" style="display:none;">
                    <div class="suggestions_list" id="auto_suggestions_list">
                        &nbsp;
                    </div>
                </div>
                
            </div>
        </div>
        <div class="shopCart" data-ectype="dorpdown" id="ECS_CARTINFO" data-carteveval="0">
            
<div class="shopCart-con dsc-cm">
	<a href="#">
		<i class="iconfont icon-carts"></i>
		<span>我的购物车</span>
		<em class="count cart_num">0</em>
	</a>
</div>
<div class="dorpdown-layer" ectype="dorpdownLayer">
        <div class="prompt"><div class="nogoods"><b></b><span>购物车中还没有商品，赶紧选购吧！</span></div></div>
    </div>

<script type="text/javascript">
//ajax异步获取顶级分类下的子分类、品牌、频道等相关信息在右侧菜单显示
var ajax_cate_url="<?php echo url('index/Category/getCateInfo'); ?>";
//加载中图片路径
var load_img="__index__/img/loadGoods.gif";
// 上面自定义
function changenum(rec_id, diff, warehouse_id, area_id)
{
	var cValue = $('#cart_value').val();
    var goods_number =Number($('#goods_number_' + rec_id).text()) + Number(diff);
 
	if(goods_number < 1)
	{
		return false;	
	}
	else
	{
		change_goods_number(rec_id,goods_number, warehouse_id, area_id, cValue);
	}
}
function change_goods_number(rec_id, goods_number, warehouse_id, area_id, cValue)
{
	if(cValue != '' || cValue == 'undefined'){
	   var cValue = $('#cart_value').val(); 
	}   
	Ajax.call('flow.php?step=ajax_update_cart', 'rec_id=' + rec_id +'&goods_number=' + goods_number +'&cValue=' + cValue +'&warehouse_id=' + warehouse_id +'&area_id=' + area_id, change_goods_number_response, 'POST','JSON');                
}
function change_goods_number_response(result)
{    
	var rec_id = result.rec_id;           
    if (result.error == 0)
    {
       $('#goods_number_' +rec_id).val(result.goods_number);//更新数量
       $('#goods_subtotal_' +rec_id).html(result.goods_subtotal);//更新小计
       if (result.goods_number <= 0)
        {
			//数量为零则隐藏所在行
            $('#tr_goods_' +rec_id).style.display = 'none';
            $('#tr_goods_' +rec_id).innerHTML = '';
        }
        $('#total_desc').html(result.flow_info);//更新合计
        if($('ECS_CARTINFO'))
        

		if(result.group.length > 0){
			for(var i=0; i<result.group.length; i++){
				$("#" + result.group[i].rec_group).html(result.group[i].rec_group_number);//配件商品数量
				$("#" + result.group[i].rec_group_talId).html(result.group[i].rec_group_subtotal);//配件商品金额
			}
		}

		$("#goods_price_" + rec_id).html(result.goods_price);
		$(".cart_num").html(result.subtotal_number);
	}
	else if (result.message != '')
	{
		$('#goods_number_' +rec_id).val(result.cart_Num);//更新数量
		alert(result.message);
	}                
}

function deleteCartGoods(rec_id,index)
{
	Ajax.call('delete_cart_goods.php', 'id='+rec_id+'&index='+index, deleteCartGoodsResponse, 'POST', 'JSON');
}

/**
 * 接收返回的信息
 */
function deleteCartGoodsResponse(res)
{
  if (res.error)
  {
    alert(res.err_msg);
  }
  else if(res.index==1)
  {
		Ajax.call('get_ajax_content.php?act=get_content', 'data_type=cart_list', return_cart_list, 'POST', 'JSON');
  }
  else
  {
	  $("#ECS_CARTINFO").html(res.content);
	  $(".cart_num").html(res.cart_num);
  }
}

function return_cart_list(result)
{
	$(".cart_num").html(result.cart_num);
	$(".pop_panel").html(result.content);
	tbplHeigth();
}
</script>        </div>
    </div>
</div>
<div class="nav dsc-zoom">
    <div class="w <?php if(isset($show_right)){ echo 'w1200'; }else{ echo 'w1390'; } ?>">
        <div class="categorys <?php if(!isset($show_nav)){ echo 'site-mast'; } ?>">
            <div class="categorys-type"><a href="#" target="_blank">全部商品分类</a></div>
            <div class="categorys-tab-content">
                <div class="categorys-items" id="cata-nav">
                <!-- 菜单开始 -->
                <?php if(is_array($cateRes) || $cateRes instanceof \think\Collection || $cateRes instanceof \think\Paginator): $i = 0; $__LIST__ = $cateRes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i;?>
					<div class="categorys-item" ectype="cateItem" data-id="<?php echo $cate['id']; ?>" data-eveval="0">
                        <div class="item item-content">
							<i class="iconfont <?php echo $cate['iconfont']; ?>"></i>
							<div class="categorys-title">
								<strong>
							         <a href="<?php echo url('index/Category/index',array('id'=>$cate['id'])); ?>" target="_blank"><?php echo $cate['cate_name']; ?></a>
							    </strong>
								<span>

                                    <?php if(is_array($cate['children']) || $cate['children'] instanceof \think\Collection || $cate['children'] instanceof \think\Paginator): $i = 0; $__LIST__ = $cate['children'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$son_cate): $mod = ($i % 2 );++$i;if($i < 3): ?>
                                    <a href="<?php echo url('index/Category/index',array('id'=>$son_cate['id'])); ?>" target="_blank"><?php echo $son_cate['cate_name']; ?></a>
                                    <?php endif; endforeach; endif; else: echo "" ;endif; ?>
        	                    </span>
							</div>
                        </div>
                        <div class="categorys-items-layer" ectype="cateLayer">
                            <div class="cate-layer-con clearfix">
                                <div class="cate-layer-left">
                                    <div class="cate_channel" ectype="channels_<?php echo $cate['id']; ?>"></div>
                                    <div class="cate_detail" ectype="subitems_<?php echo $cate['id']; ?>"></div>
                                </div>
                                <div class="cate-layer-rihgt" ectype="brands_<?php echo $cate['id']; ?>"></div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                <?php endforeach; endif; else: echo "" ;endif; ?>

                    <!-- 菜单结束 -->
	    </div>
        </div></div>
        <div class="nav-main" id="nav">
            <ul class="navitems">
	            <li><a href="<?php echo url('index/Index/index'); ?>" class="curr">首页</a></li>
                <?php if(is_array($navRes['mid']) || $navRes['mid'] instanceof \think\Collection || $navRes['mid'] instanceof \think\Paginator): $i = 0; $__LIST__ = $navRes['mid'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$mid_nav): $mod = ($i % 2 );++$i;?>
	            <li><a <?php if($mid_nav['open'] == 1): ?> target="_blank" <?php endif; ?> href="<?php echo $mid_nav['nav_url']; ?>"  ><?php echo $mid_nav['nav_name']; ?></a></li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
        	</ul>
        </div>
    </div>
</div>
<div class="user-content clearfix">
    <div class="user-side" ectype="userSide">
<div class="user-mod user-perinfo">
    <div class="profile clearfix">
<div class="avatar">
    <a href="#" class="u-pic">
<img src="__index__/img/touxiang.jpg" alt="">
    </a>
</div>
<div class="name">
    <h2>70769833-218428</h2>
    <div class="user-rank user-rank-1">铜牌</div>
</div>
    </div>
    <div class="account">
<div class="item clearfix">
    <div class="item-name">账户资料：</div>
    <div class="item-main">
<b class="integrity"><em style="width: 45%;"></em></b><span>45%</span>
    </div>
</div>
<div class="item clearfix">
    <div class="item-name">账户安全：</div>
    <div class="item-main safe">
<a href="#" class="iconfont icon-email "><span class="tip">邮箱未验证</span></a>
<a href="#" class="iconfont icon-see "><span class="tip">实名认证未完成</span></a>
<a href="#" class="iconfont icon-password active"><span class="tip">密码已设置</span></a>
<a href="#" class="iconfont icon-mobile-phone active"><span class="tip">手机已验证</span></a>
    </div>
</div>
    </div>
</div>
<div class="user-mod">
    <div class="side-menu">
	<dl>
<dt><i class="square"></i><span>订单中心</span></dt>
<dd>
	<p><a href="#" target="_self">我的订单</a></p>
	<p><a href="#" target="_self">收货地址</a></p>
	<p><a href="#" target="_self">缺货登记</a></p>
	<p><a href="#" target="_self">退换货订单</a></p>
</dd>
    </dl>
    <dl>
<dt><i class="square"></i><span>会员中心</span></dt>
<dd>
	<p><a href="#" target="_self">用户信息</a></p>
	<p><a href="#" target="_self">账户安全</a></p>
	<p><a href="#"> 我的发票</a></p>
	</dd>
	</dl>
    </div></div>
    </div>
    <div class="user-main" ectype="userMain" data-action="default">


<ul class="user-index-order-statu clearfix">
    <li>
<a href="#">
<div class="circle"><i class="iconfont icon-columns"></i></div>
<div class="info">
    <p>待付款</p>
    <div class="num">0</div>
</div>
</a>
    </li>
    <li>
<a href="#">
<div class="circle"><i class="iconfont icon-truck-alt"></i></div>
<div class="info">
    <p>待收货</p>
    <div class="num">0</div>
</div>
</a>
    </li>
    <li>
<a href="#">
<div class="circle"><i class="iconfont icon-edit"></i></div>
<div class="info">
    <p>待评价</p>
    <div class="num">0</div>
</div>
</a>
    </li>
    <li>
<a href="#">
<div class="circle"><i class="iconfont icon-complete"></i></div>
<div class="info">
    <p>已完成</p>
    <div class="num">0</div>
</div>
</a>
    </li>
</ul>
<ul class="user-index-wallet clearfix">
    <li>
<div class="words"></div>
<div class="info info-line">
    <a href="#"><em>¥</em>0.00</a>
</div>
    </li>
    <li>
<div class="words"></div>
<div class="info info-line">
    <a href="#">红包（<span class="red">0</span>）</a>
    
</div>
    </li>
    <li>
<div class="words"></div>
<div class="info">
    <a href="#">优惠券（<span class="red">1</span>）</a><br>
    <div class="num"><a href="#" target="_blank" class="line">领券</a></div>
</div>
    </li>
    <li>
<div class="words"></div>
<div class="info info-line">
    <a href="#">储值卡（<span class="red">0</span>）</a>
</div>
    </li>
    <li>
<div class="words"></div>
<div class="info info-line"><a href="#">0</a></div>
    </li>
</ul>
<div class="user-mod">
    <div class="user-section">
<div class="user-title">
    <h2>我的订单</h2>
    <a href="#" class="more">查看所有订单</a>
</div>
<div class="user-index-order-list">
    <div class="no_records">
<i class="no_icon"></i>
<div class="no_info no_info_line">
<h3>主人，您近期还没有购买任何商品哟~</h3>
<div class="no_btn">
    <a href="#" class="sc-btn sc-red-btn">去逛商城</a>
</div>
</div>
    </div>
</div>
    </div>
    
    <div class="user-section">
<div class="user-title">
    <h2>近期收藏</h2>
    <a href="#" class="more">查看所有收藏</a>
</div>
<div class="user-index-collection-list">
    <div class="no_records">
<i class="no_icon"></i>
<div class="no_info">
<h3>主人，您近期还没有收藏商品呦~</h3>
</div>
    </div>
</div>
    </div>
    <div class="user-section">
<div class="user-title">
    <h2>帮助</h2>
</div>
<ul class="user-help-list clearfix">
    <li><a href="#" class="ftx-05" target="_blank">售后服务保证</a></li>
    <li><a href="#" class="ftx-05" target="_blank">退换货原则</a></li>
    <li><a href="#" class="ftx-05" target="_blank">支付方式说明</a></li>
    <li><a href="#" class="ftx-05" target="_blank">配送支付智能查询 </a></li>
    <li><a href="#" class="ftx-05" target="_blank">货到付款区域</a></li>
    <li><a href="#" class="ftx-05" target="_blank">订购方式</a></li>
</ul>
    </div>
    </div>






	





	


	


	








	
















     </div>
</div>

<div class="footer-new">
    <div class="footer-new-top">
    	<div class="w w1200">
            <div class="service-list">
<div class="service-item">
    <i class="f-icon f-icon-qi"></i>
    <span>七天包退</span>
</div>
<div class="service-item">
    <i class="f-icon f-icon-zheng"></i>
    <span>正品保障</span>
</div>
<div class="service-item">
    <i class="f-icon f-icon-hao"></i>
    <span>好评如潮</span>
</div>
<div class="service-item">
    <i class="f-icon f-icon-shan"></i>
    <span>闪电发货</span>
</div>
<div class="service-item">
    <i class="f-icon f-icon-quan"></i>
    <span>权威荣誉</span>
</div>
            </div>
            <div class="contact">
<div class="contact-item contact-item-first"><i class="f-icon f-icon-tel"></i><span>4000-000-000</span></div>
<div class="contact-item">
	    <a id="IM" im_type="dsc" onclick="openWin(this)" href="javascript:;" class="btn-ctn"><i class="f-icon f-icon-kefu"></i><span>咨询客服</span></a>
    </div>
            </div>
        </div>
    </div>
    <div class="footer-new-con">
    	<div class="fnc-warp">
            <div class="help-list">
            <?php if(is_array($helpCateRes) || $helpCateRes instanceof \think\Collection || $helpCateRes instanceof \think\Paginator): $i = 0; $__LIST__ = $helpCateRes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i;?>
                <div class="help-item">
                    <h3><?php echo $cate['cate_name']; ?> </h3>
                    <ul>
                        <?php if(is_array($cate['arts']) || $cate['arts'] instanceof \think\Collection || $cate['arts'] instanceof \think\Paginator): $i = 0; $__LIST__ = $cate['arts'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$art): $mod = ($i % 2 );++$i;?>
                        <li><a href="<?php if($art['link_url']): ?> <?php echo $art['link_url']; else: ?> <?php echo url('index/Article/index',array('id'=>$art['id'])); endif; ?>"><?php echo $art['title']; ?></a></li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>               
                </div>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
            <div class="qr-code">
<div class="qr-item qr-item-first">
    <div class="code_img"><img src="__index__/img/ecjia_qrcode.png"></div>
    <div class="code_txt">官方网址</div>
</div>
<div class="qr-item">
    <div class="code_img"><img src="__index__/img/ectouch_qrcode.png"></div>
    <div class="code_txt">在线课程</div>
</div>
            </div>
    	</div>
    </div>
    <div class="footer-new-bot">
    	<div class="w w1200">
             
            <p class="copyright_links">
<a href="#">首页</a>
<?php if(is_array($shopInfoRes) || $shopInfoRes instanceof \think\Collection || $shopInfoRes instanceof \think\Paginator): $i = 0; $__LIST__ = $shopInfoRes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$arts): $mod = ($i % 2 );++$i;?>
<span class="spacer"></span>
<a href="<?php echo url('index/Article/index',array('id'=>$arts['id'])); ?>"><?php echo $arts['title']; ?></a>
<?php endforeach; endif; else: echo "" ;endif; ?>
 
 
            </p>
        
        <p><span>©&nbsp;2015-2017&nbsp;tongpankt.com&nbsp;版权所有&nbsp;&nbsp;</span><span>ICP备案证书号:</span><a href="#">豫ICP备*****号-1</a>&nbsp;<a href="#">POWERED by童攀课堂</a></p>
        
        <p class="copyright_auth">&nbsp;</p>
    </div>
    </div>
    
    
    <div class="hide" id="pd_coupons">
        <span class="success-icon m-icon"></span>
        <div class="item-fore">
            <h3>领取成功！感谢您的参与，祝您购物愉快~</h3>
            <div class="txt ftx-03">本活动为概率性事件，不能保证所有客户成功领取优惠券</div>
        </div>
    </div>
    
    
    <div class="hidden">
        <input name="seller_kf_IM" value="" rev="" ru_id="" type="hidden">
        <input name="seller_kf_qq" value="349488953" type="hidden">
        <input name="seller_kf_tel" value="4000-000-000" type="hidden">
        <input name="user_id" value="62" type="hidden">
    </div>
</div>
<script type="text/javascript" src="__index__/js/suggest.js"></script><script type="text/javascript" src="__index__/js/scroll_city.js"></script><script type="text/javascript" src="__index__/js/utils.js"></script>
<script type="text/javascript" src="__index__/js/warehouse.js"></script><script type="text/javascript" src="__index__/js/warehouse_area.js"></script>

<script type="text/javascript" src="__index__/js/jquery.SuperSlide.2.1.1.js"></script><script type="text/javascript" src="__index__/js/jquery.yomi.js"></script><script type="text/javascript" src="__index__/js/common.js"></script><script type="text/javascript" src="__index__/js/jquery.validation.min.js"></script><script type="text/javascript" src="__index__/js/jquery.nyroModal.js"></script><script type="text/javascript" src="__index__/js/perfect-scrollbar/perfect-scrollbar.min.js"></script><script type="text/javascript" src="__index__/js/ZeroClipboard.js"></script><script type="text/javascript" src="__index__/js/dsc-common.js"></script>
<script type="text/javascript" src="__index__/js/jquery.purebox.js"></script>
<script type="text/javascript">
function init() {
    var clip = null;
    var val = $("#affTextarea").text();
    if(val){
clip = new ZeroClipboard.Client();
ZeroClipboard.setMoviePath("js/ZeroClipboard/ZeroClipboard.swf");
clip.setHandCursor(true);   
clip.addEventListener('mouseOver', function (client) {
    clip.setText(val);
});

clip.addEventListener('complete', function (client, text){
    pbDialog("复制成功","",1,"","",120);
});
clip.glue('clip_button', 'clip_container' );
    }
}

$(window).load(function(){
    init();
})

$(function(){
    $(".nyroModal").nyroModal();
});


</script>
    

 
 
 
</body>
</html>