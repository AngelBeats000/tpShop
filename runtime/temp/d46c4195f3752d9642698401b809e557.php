<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:81:"D:\phpstudy\PHPTutorial\WWW\shop\public/../application/index\view\index\index.htm";i:1559206006;s:81:"D:\phpstudy\PHPTutorial\WWW\shop\public/../application/index\view\common\head.htm";i:1559550175;s:83:"D:\phpstudy\PHPTutorial\WWW\shop\public/../application/index\view\common\footer.htm";i:1559549771;}*/ ?>
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $configs['site_keywords']; ?>" />
<meta name="Description" content="<?php echo $configs['site_description']; ?>" />
<title><?php echo $configs['site_name']; ?></title>
<link rel="shortcut icon" href="favicon.ico" />
<link rel="stylesheet" type="text/css" href="__index__/css/base.css" />
<link rel="stylesheet" type="text/css" href="__index__/css/style.css" />
<link rel="stylesheet" type="text/css" href="__index__/css/iconfont.css" />
<link rel="stylesheet" type="text/css" href="__index__/css/purebox.css" />
<link rel="stylesheet" type="text/css" href="__index__/css/quickLinks.css" />
<script type="text/javascript" src="__index__/js/jquery-1.9.1.min.js"></script><script type="text/javascript" src="__index__/js/jquery.json.js"></script><script type="text/javascript" src="__index__/js/transport_jquery.js"></script>
<script type="text/javascript">
var json_languages = {"ok":"\u786e\u5b9a","determine":"\u786e\u5b9a","cancel":"\u53d6\u6d88","drop":"\u5220\u9664","edit":"\u7f16\u8f91","remove":"\u79fb\u9664","follow":"\u5173\u6ce8","pb_title":"\u63d0\u793a","Prompt_information":"\u63d0\u793a\u4fe1\u606f","title":"\u63d0\u793a","not_login":"\u60a8\u5c1a\u672a\u767b\u5f55","close":"\u5173\u95ed","cart":"\u8d2d\u7269\u8f66","js_cart":"\u8d2d\u7269\u8f66","all":"\u5168\u90e8","go_login":"\u53bb\u767b\u9646","select_city":"\u8bf7\u9009\u62e9\u5e02","comment_goods":"\u8bc4\u8bba\u5546\u54c1","submit_order":"\u63d0\u4ea4\u8ba2\u5355","sys_msg":"\u7cfb\u7edf\u63d0\u793a","no_keywords":"\u8bf7\u8f93\u5165\u641c\u7d22\u5173\u952e\u8bcd\uff01","adv_packup_one":"\u8bf7\u53bb\u540e\u53f0\u5e7f\u544a\u4f4d\u7f6e","adv_packup_two":"\u91cc\u9762\u8bbe\u7f6e\u5e7f\u544a\uff01","more":"\u66f4\u591a","Please":"\u8bf7\u53bb","set_up":"\u8bbe\u7f6e\uff01","login_phone_packup_one":"\u8bf7\u8f93\u5165\u624b\u673a\u53f7\u7801","more_options":"\u66f4\u591a\u9009\u9879","Pack_up":"\u6536\u8d77","no_attr":"\u6ca1\u6709\u66f4\u591a\u5c5e\u6027\u4e86","search_Prompt":"\u53ef\u8f93\u5165\u6c49\u5b57,\u62fc\u97f3\u67e5\u627e\u54c1\u724c","most_input":"\u6700\u591a\u53ea\u80fd\u9009\u62e95\u9879","multi_select":"\u591a\u9009","checkbox_Packup":"\u8bf7\u6536\u8d77\u5168\u90e8\u591a\u9009","radio_Packup":"\u8bf7\u6536\u8d77\u5168\u90e8\u5355\u9009","contrast":"\u5bf9\u6bd4","empty_contrast":"\u6e05\u7a7a\u5bf9\u6bd4\u680f","Prompt_add_one":"\u6700\u591a\u53ea\u80fd\u6dfb\u52a04\u4e2a\u54e6^_^","Prompt_add_two":"\u60a8\u8fd8\u53ef\u4ee5\u7ee7\u7eed\u6dfb\u52a0","button_compare":"\u6bd4\u8f83\u9009\u5b9a\u5546\u54c1","exist":"\u60a8\u5df2\u7ecf\u9009\u62e9\u4e86%s","count_limit":"\u6700\u591a\u53ea\u80fd\u9009\u62e94\u4e2a\u5546\u54c1\u8fdb\u884c\u5bf9\u6bd4","goods_type_different":"%s\u548c\u5df2\u9009\u62e9\u5546\u54c1\u7c7b\u578b\u4e0d\u540c\u65e0\u6cd5\u8fdb\u884c\u5bf9\u6bd4","compare_no_goods":"\u60a8\u6ca1\u6709\u9009\u5b9a\u4efb\u4f55\u9700\u8981\u6bd4\u8f83\u7684\u5546\u54c1\u6216\u8005\u6bd4\u8f83\u7684\u5546\u54c1\u6570\u5c11\u4e8e 2 \u4e2a\u3002","btn_buy":"\u8d2d\u4e70","is_cancel":"\u53d6\u6d88","select_spe":"\u8bf7\u9009\u62e9\u5546\u54c1\u5c5e\u6027","Province":"\u8bf7\u9009\u62e9\u6240\u5728\u7701\u4efd","City":"\u8bf7\u9009\u62e9\u6240\u5728\u5e02","District":"\u8bf7\u9009\u62e9\u6240\u5728\u533a\u57df","Street":"\u8bf7\u9009\u62e9\u6240\u5728\u8857\u9053","Detailed_address_null":"\u8be6\u7ec6\u5730\u5740\u4e0d\u80fd\u4e3a\u7a7a","Select_attr":"\u8bf7\u9009\u62e9\u5c5e\u6027","Focus_prompt_one":"\u60a8\u5df2\u5173\u6ce8\u8be5\u5e97\u94fa\uff01","Focus_prompt_login":"\u60a8\u5c1a\u672a\u767b\u5f55\u5546\u57ce\u4f1a\u5458\uff0c\u4e0d\u80fd\u5173\u6ce8\uff01","Focus_prompt_two":"\u767b\u5f55\u5546\u57ce\u4f1a\u5458\u3002","store_focus":"\u5e97\u94fa\u5173\u6ce8\u3002","Focus_prompt_three":"\u60a8\u786e\u5b9e\u8981\u5173\u6ce8\u6240\u9009\u5e97\u94fa\u5417\uff1f","Focus_prompt_four":"\u60a8\u786e\u5b9e\u8981\u53d6\u6d88\u5173\u6ce8\u5e97\u94fa\u5417\uff1f","Focus_prompt_five":"\u60a8\u8981\u5173\u6ce8\u8be5\u5e97\u94fa\u5417\uff1f","Purchase_quantity":"\u8d85\u8fc7\u9650\u8d2d\u6570\u91cf.","My_collection":"\u6211\u7684\u6536\u85cf","shiping_prompt":"\u6682\u4e0d\u652f\u6301\u914d\u9001","Have_goods":"\u6709\u8d27","No_goods":"\u65e0\u8d27","No_shipping":"\u65e0\u6cd5\u914d\u9001","Deliver_back_order":"\u4e0b\u5355\u540e\u7acb\u5373\u53d1\u8d27","Time_delivery":" \u65f6\u53d1\u8d27","goods_over":"\u6b64\u5546\u54c1\u6682\u65f6\u552e\u5b8c","Stock_goods_null":"\u5546\u54c1\u5e93\u5b58\u4e0d\u8db3","purchasing_prompt_two":"\u5bf9\u4e0d\u8d77\uff0c\u8be5\u5546\u54c1\u5df2\u7ecf\u7d2f\u8ba1\u8d85\u8fc7\u9650\u8d2d\u6570\u91cf","day_not_available":"\u5f53\u65e5\u65e0\u8d27","day_yes_available":"\u5f53\u65e5\u6709\u8d27","Already_buy":"\u5df2\u8d2d\u4e70","Already_buy_two":"\u4ef6\u5546\u54c1\u8fbe\u5230\u9650\u8d2d\u6761\u4ef6,\u65e0\u6cd5\u518d\u8d2d\u4e70","Already_buy_three":"\u4ef6\u8be5\u5546\u54c1,\u53ea\u80fd\u518d\u8d2d\u4e70","goods_buy_empty_p":"\u5546\u54c1\u6570\u91cf\u4e0d\u80fd\u5c11\u4e8e1\u4ef6","goods_number_p":"\u5546\u54c1\u6570\u91cf\u5fc5\u987b\u4e3a\u6570\u5b57","search_one":"\u8bf7\u586b\u5199\u7b5b\u9009\u4ef7\u683c","search_two":"\u8bf7\u586b\u5199\u7b5b\u9009\u5de6\u8fb9\u4ef7\u683c","search_three":"\u8bf7\u586b\u5199\u7b5b\u9009\u53f3\u8fb9\u4ef7\u683c","search_four":"\u5de6\u8fb9\u4ef7\u683c\u4e0d\u80fd\u5927\u4e8e\u6216\u7b49\u4e8e\u53f3\u8fb9\u4ef7\u683c","jian":"\u4ef6","letter":"\u4ef6","inventory":"\u5b58\u8d27","move_collection":"\u79fb\u81f3\u6211\u7684\u6536\u85cf","select_shop":"\u8bf7\u9009\u62e9\u5957\u9910\u5546\u54c1","Parameter_error":"\u53c2\u6570\u9519\u8bef","screen_price":"\u8bf7\u586b\u5199\u7b5b\u9009\u4ef7\u683c","screen_price_left":"\u8bf7\u586b\u5199\u7b5b\u9009\u5de6\u8fb9\u4ef7\u683c","screen_price_right":"\u8bf7\u586b\u5199\u7b5b\u9009\u53f3\u8fb9\u4ef7\u683c","screen_price_dy":"\u5de6\u8fb9\u4ef7\u683c\u4e0d\u80fd\u5927\u4e8e\u6216\u7b49\u4e8e\u53f3\u8fb9\u4ef7\u683c","invoice_ok":"\u4fdd\u5b58\u53d1\u7968\u4fe1\u606f","invoice_desc_null":"\u8f93\u5165\u5185\u5bb9\u4e0d\u80fd\u4e3a\u7a7a\uff01","invoice_desc_number":"\u60a8\u6700\u591a\u53ef\u4ee5\u6dfb\u52a03\u4e2a\u516c\u53f8\u53d1\u7968\uff01","invoice_packup":"\u8bf7\u9009\u62e9\u6216\u586b\u5199\u53d1\u7968\u62ac\u5934\u90e8\u5206\uff01","invoice_tax_null":"\u8bf7\u586b\u5199\u7eb3\u7a0e\u4eba\u8bc6\u522b\u7801","add_address_10":"\u6700\u591a\u53ea\u80fd\u6dfb\u52a010\u4e2a\u6536\u8d27\u5730\u5740","msg_phone_not":"\u624b\u673a\u53f7\u7801\u4e0d\u6b63\u786e","captcha_not":"\u9a8c\u8bc1\u7801\u4e0d\u80fd\u4e3a\u7a7a","captcha_xz":"\u8bf7\u8f93\u51654\u4f4d\u6570\u7684\u9a8c\u8bc1\u7801","captcha_cw":"\u9a8c\u8bc1\u7801\u9519\u8bef","Detailed_map":"\u8be6\u7ec6\u5730\u56fe","email_error":"\u90ae\u7bb1\u683c\u5f0f\u4e0d\u6b63\u786e\uff01","bid_prompt_null":"\u4ef7\u683c\u4e0d\u80fd\u4e3a\u7a7a!","bid_prompt_error":"\u4ef7\u683c\u8f93\u5165\u683c\u5f0f\u4e0d\u6b63\u786e\uff01","mobile_error_goods":"\u624b\u673a\u683c\u5f0f\u4e0d\u6b63\u786e\uff01","null_email_goods":"\u90ae\u7bb1\u4e0d\u80fd\u4e3a\u7a7a","select_store":"\u8bf7\u9009\u62e9\u95e8\u5e97\uff01","Product_spec_prompt":"\u8bf7\u9009\u62e9\u5546\u54c1\u89c4\u683c\u7c7b\u578b","reply_desc_one":"\u56de\u590d\u5e16\u5b50\u5185\u5bb9\u4e0d\u80fd\u4e3a\u7a7a","go_shoping":"\u53bb\u8d2d\u7269","loading":"\u6b63\u5728\u62fc\u547d\u52a0\u8f7d\u4e2d...","highest_price":"\u5df2\u662f\u6700\u9ad8\u4ef7\uff01","lowest_price":"\u5df2\u662f\u6700\u4f4e\u4ef7\uff01","no_history":"\u60a8\u5df2\u6e05\u7a7a\u6700\u8fd1\u6d4f\u89c8\u8fc7\u7684\u5546\u54c1","receive_coupons":"\u9886\u53d6\u4f18\u60e0\u5238","Immediate_use":"\u7acb\u5373\u4f7f\u7528","no_enabled":"\u5173\u95ed"};
//加载效果
var load_cart_info = '<img src="__index__/img/load/loadGoods.gif" height="108" class="ml100">';
var load_icon = '<img src="__index__/img/load/load.gif" width="200" height="200">';
</script></head>
<body class="home_visual_body">
	
        <div class="top-banner" style="background: rgb(255, 40, 125) none repeat scroll 0% 0%;">
            <div class="module w1200" data-type="range">
 
	    <a href="#" target="_blank"><img src="__index__/img/1494985021864887905.jpg" width="1200" height="80"></a>
    <i class="iconfont icon-cha" ectype="close"></i>
    
</div><div class="spec" data-spec="{&quot;picHeight&quot;:&quot;500&quot;,&quot;target&quot;:&quot;_blank&quot;,&quot;navColor&quot;:&quot;#ff287d&quot;,&quot;is_li&quot;:0,&quot;bg_color&quot;:[],&quot;pic_src&quot;:[&quot;__index__/img/1494985021864887905.jpg&quot;],&quot;link&quot;:&quot;&quot;,&quot;sort&quot;:[&quot;1&quot;]}"></div>
        </div>
        
    <script type="text/javascript">
    var login_url="<?php echo url('member/Account/checkLogin'); ?>";
    var logout_url="<?php echo url('member/User/logout'); ?>";
    var login="<?php echo url('member/Account/login'); ?>";
    var reg="<?php echo url('member/Account/reg'); ?>";
</script>
<div class="site-nav" id="site-nav">
    <div class="w w1390">
        <div class="fl">
          <div class="txt-info" id="ECS_MEMBERZONE">
            <div class='scrollBody' id='scrollBody'></div>
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
    <div class="homeindex" ectype="homeWrap">
    	
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    

<div class="content" style="min-height: 974px;"><div class="visual-item" data-mode="lunbo" data-purebox="banner" data-li="1" data-length="5" ectype="visualItme" style="display: block;" data-diff="0">
                                    
                                    <div class="view">
<div class="banner home-banner">
	<div class="bd">
    	<ul data-type="range">
            
        <?php if(is_array($AlternateRes) || $AlternateRes instanceof \think\Collection || $AlternateRes instanceof \think\Paginator): $i = 0; $__LIST__ = $AlternateRes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$AlternateRes): $mod = ($i % 2 );++$i;?>
	    <li style="background:url(__uploads__/<?php echo $AlternateRes['img_src']; ?>) center center no-repeat;"><div class="banner-width"><a href="<?php echo $AlternateRes['link_url']; ?>" style="height:500px;"></a></div></li>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    
</ul><div class="spec" data-spec=""></div>
    </div>
    <div class="hd"><ul></ul></div>
    <div class="vip-outcon">
        <div class="vip-con">
            <div class="insertVipEdit" data-mode="insertVipEdit">
 
<div ectype="user_info">
    <div class="avatar">
        <a href="user.php?act=profile"><img src="__index__/img/avatar.png"></a>
    </div>
    <div class="login-info">
        <span>Hi，欢迎来到大商创!</span>
        <a href="user.php" class="login-button">请登录</a>
        <a href="merchants.php" target="_blank" class="register_button">我要开店</a>
    </div>
</div>   
<div class="vip-item">
    <div class="tit">
                <a href="javascript:void(0);" class="tab_head_item">公告</a>
                <a href="javascript:void(0);" class="tab_head_item">促销</a>
            </div>
    <div class="con">
                <ul>
                        <?php if(is_array($Article1) || $Article1 instanceof \think\Collection || $Article1 instanceof \think\Paginator): $i = 0; $__LIST__ = $Article1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$art1): $mod = ($i % 2 );++$i;?>
                        <li><a href="<?php echo $art1['link_url']; ?>" target="_blank"><?php echo $art1['title']; ?></a></li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                <ul style="display:none;">
                        <?php if(is_array($Article2) || $Article2 instanceof \think\Collection || $Article2 instanceof \think\Paginator): $i = 0; $__LIST__ = $Article2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$art2): $mod = ($i % 2 );++$i;?>
                        <li><a href="<?php echo $art2['link_url']; ?>" target="_blank"><?php echo $art2['title']; ?></a></li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
            </div>
</div>
<div class="vip-item">
    <div class="tit">快捷入口</div>
    <div class="kj_con">
                        <div class="item item_1">
            <a href="history_list.php" target="_blank">
                <i class="iconfont icon-browse"></i>
                <span>我的浏览</span>
            </a>
        </div>
                                <div class="item item_2">
            <a href="user.php?act=collection_list" target="_blank">
                <i class="iconfont icon-zan-alt"></i>
                <span>我的收藏</span>
            </a>
        </div>
                                <div class="item item_3">
            <a href="user.php?act=order_list" target="_blank">
                <i class="iconfont icon-order"></i>
                <span>我的订单</span>
            </a>
        </div>
                                <div class="item item_4">
            <a href="user.php?act=account_safe" target="_blank">
                <i class="iconfont icon-password-alt"></i>
                <span>账号安全</span>
            </a>
        </div>
                                <div class="item item_5">
            <a href="user.php?act=affiliate" target="_blank">
                <i class="iconfont icon-share-alt"></i>
                <span>我要分享</span>
            </a>
        </div>
                                <div class="item item_6">
            <a href="merchants.php" target="_blank">
                <i class="iconfont icon-settled"></i>
                <span>商家入驻</span>
            </a>
        </div>
                    </div>
</div>
</div><div class="spec" data-spec=""></div>
            
        </div>
    </div>
</div>
                                    </div>
                                </div>

                                <div class="visual-item w1200" ectype="channel"><div class="seckill-channel" id="h-seckill">
	<div class="box-hd clearfix">
    	<i class="box_hd_arrow"></i>
    	<i class="box_hd_dec"></i>
		<i class="box-hd-icon"></i>
		<div class="sk-time-cd">
			<div class="sk-cd-tit">距结束</div>
			<div class="cd-time fl" ectype="time" data-time="2018-01-22 22:00:00">
				<div class="days hide">00</div>
				<span class="split hide">天</span>
				<div class="hours">05</div>
				<span class="split">时</span>
				<div class="minutes">57</div>
				<span class="split">分</span>
				<div class="seconds">46</div>
				<span class="split">秒</span>
			</div>
		</div>
        <div class="sk-more"><a href="seckill.php" target="_blank">更多秒杀</a> <i class="arrow"></i></div>
	</div>
	<div class="box-bd clearfix">
		<div class="tempWrap" style="overflow:hidden; position:relative; width:1210px"><ul style="width: 3872px; position: relative; overflow: hidden; padding: 0px; margin: 0px; left: -1936px;"><li class="opacity_img clone" style="float: left; width: 232px;">
				<div class="p-img"><a href="seckill.php?id=7" target="_blank"><img src="__index__/img/0_thumb_G_1489102299856.jpg" class="img-lazyload"></a></div>
				<div class="p-name"><a href="seckill.php?id=7" target="_blank" title="新款学院风韩版时尚太空棉宽松长袖印花圆领卫衣女">新款学院风韩版时尚太空棉宽松长袖印花圆领卫衣女</a></div>
				<div class="p-over">
					<div class="p-info">
						<div class="p-price">
							<span class="shop-price"><em>¥</em>145.00</span>
							<span class="original-price"><em>¥</em>279.59</span>
						</div>
					</div>
					<div class="p-btn">
															<a href="seckill.php?id=7&amp;act=view" target="_blank">立即抢购</a>
															</div>
				</div>
			</li>
						<li class="opacity_img" style="float: left; width: 232px;">
				<div class="p-img"><a href="seckill.php?id=58" target="_blank"><img src="__index__/img/0_thumb_G_1489106192791.jpg" class="img-lazyload"></a></div>
				<div class="p-name"><a href="seckill.php?id=58" target="_blank" title="歌梵 床头柜 地中海美式乡村蓝色田园床边柜 储物卧室家具 品质保障 用料环保 质保5年--不单卖">歌梵 床头柜 地中海美式乡村蓝色田园床边柜 储物卧室家具 品质保障 用料环保 质保5年--不单卖</a></div>
				<div class="p-over">
					<div class="p-info">
						<div class="p-price">
							<span class="shop-price"><em>¥</em>2312.00</span>
							<span class="original-price"><em>¥</em>240.00</span>
						</div>
					</div>
					<div class="p-btn">
															<a href="seckill.php?id=58&amp;act=view" target="_blank">立即抢购</a>
															</div>
				</div>
			</li>
						<li class="opacity_img" style="float: left; width: 232px;">
				<div class="p-img"><a href="seckill.php?id=8" target="_blank"><img src="__index__/img/0_thumb_G_1489102753231.jpg" class="img-lazyload"></a></div>
				<div class="p-name"><a href="seckill.php?id=8" target="_blank" title="新款韩版chic学生宽松短款外套上衣字母长袖连帽套头卫衣女潮">新款韩版chic学生宽松短款外套上衣字母长袖连帽套头卫衣女潮</a></div>
				<div class="p-over">
					<div class="p-info">
						<div class="p-price">
							<span class="shop-price"><em>¥</em>145.00</span>
							<span class="original-price"><em>¥</em>360.00</span>
						</div>
					</div>
					<div class="p-btn">
															<a href="seckill.php?id=8&amp;act=view" target="_blank">立即抢购</a>
															</div>
				</div>
			</li>
						<li class="opacity_img" style="float: left; width: 232px;">
				<div class="p-img"><a href="seckill.php?id=54" target="_blank"><img src="__index__/img/0_thumb_G_1490205126945.jpg" class="img-lazyload"></a></div>
				<div class="p-name"><a href="seckill.php?id=54" target="_blank" title="海得曼无线门铃 家用 不用电池门铃 智能自发电远距离一拖一拖二 按钮 不要电池 防水设计 两年换新">海得曼无线门铃 家用 不用电池门铃 智能自发电远距离一拖一拖二 按钮 不要电池 防水设计 两年换新</a></div>
				<div class="p-over">
					<div class="p-info">
						<div class="p-price">
							<span class="shop-price"><em>¥</em>334.00</span>
							<span class="original-price"><em>¥</em>99.60</span>
						</div>
					</div>
					<div class="p-btn">
															<a href="seckill.php?id=54&amp;act=view" target="_blank">立即抢购</a>
															</div>
				</div>
			</li>
						<li class="opacity_img" style="float: left; width: 232px;">
				<div class="p-img"><a href="seckill.php?id=9" target="_blank"><img src="__index__/img/0_thumb_G_1489102950633.jpg" class="img-lazyload"></a></div>
				<div class="p-name"><a href="seckill.php?id=9" target="_blank" title="韩都衣舍2017韩版女装新款黑白拼接插肩棒球服春季短外套HH5597妠 朴信惠同款 黑白拼接 插肩袖 棒球服">韩都衣舍2017韩版女装新款黑白拼接插肩棒球服春季短外套HH5597妠 朴信惠同款 黑白拼接 插肩袖 棒球服</a></div>
				<div class="p-over">
					<div class="p-info">
						<div class="p-price">
							<span class="shop-price"><em>¥</em>145.00</span>
							<span class="original-price"><em>¥</em>540.00</span>
						</div>
					</div>
					<div class="p-btn">
															<a href="seckill.php?id=9&amp;act=view" target="_blank">立即抢购</a>
															</div>
				</div>
			</li>
						<li class="opacity_img" style="float: left; width: 232px;">
				<div class="p-img"><a href="seckill.php?id=55" target="_blank"><img src="__index__/img/0_thumb_G_1490205156678.jpg" class="img-lazyload"></a></div>
				<div class="p-name"><a href="seckill.php?id=55" target="_blank" title="闽豹家用工具套装 五金工具箱 电工木工德国维修工具组套修理组合 质量稳定 坚固耐用 彩套包装 可团购定制">闽豹家用工具套装 五金工具箱 电工木工德国维修工具组套修理组合 质量稳定 坚固耐用 彩套包装 可团购定制</a></div>
				<div class="p-over">
					<div class="p-info">
						<div class="p-price">
							<span class="shop-price"><em>¥</em>534.00</span>
							<span class="original-price"><em>¥</em>99.60</span>
						</div>
					</div>
					<div class="p-btn">
															<a href="seckill.php?id=55&amp;act=view" target="_blank">立即抢购</a>
															</div>
				</div>
			</li>
						<li class="opacity_img" style="float: left; width: 232px;">
				<div class="p-img"><a href="seckill.php?id=10" target="_blank"><img src="__index__/img/0_thumb_G_1490174741051.jpg" class="img-lazyload"></a></div>
				<div class="p-name"><a href="seckill.php?id=10" target="_blank" title="初棉纯色圆领长袖T恤打底衫秋衣女上衣体恤女士修身打底衣春秋 挺拔有型 棉氨材质 柔软舒适 耐洗耐磨">初棉纯色圆领长袖T恤打底衫秋衣女上衣体恤女士修身打底衣春秋 挺拔有型 棉氨材质 柔软舒适 耐洗耐磨</a></div>
				<div class="p-over">
					<div class="p-info">
						<div class="p-price">
							<span class="shop-price"><em>¥</em>145.00</span>
							<span class="original-price"><em>¥</em>78.00</span>
						</div>
					</div>
					<div class="p-btn">
															<a href="seckill.php?id=10&amp;act=view" target="_blank">立即抢购</a>
															</div>
				</div>
			</li>
						<li class="opacity_img" style="float: left; width: 232px;">
				<div class="p-img"><a href="seckill.php?id=56" target="_blank"><img src="__index__/img/0_thumb_G_1490205189180.jpg" class="img-lazyload"></a></div>
				<div class="p-name"><a href="seckill.php?id=56" target="_blank" title="JOMOO 厨房水槽套餐双槽304不锈钢洗碗池 洗菜盆加厚水盆一体水槽 官方正品 赠运费险 五年联保 领券更实惠">JOMOO 厨房水槽套餐双槽304不锈钢洗碗池 洗菜盆加厚水盆一体水槽 官方正品 赠运费险 五年联保 领券更实惠</a></div>
				<div class="p-over">
					<div class="p-info">
						<div class="p-price">
							<span class="shop-price"><em>¥</em>834.00</span>
							<span class="original-price"><em>¥</em>1078.80</span>
						</div>
					</div>
					<div class="p-btn">
															<a href="seckill.php?id=56&amp;act=view" target="_blank">立即抢购</a>
															</div>
				</div>
			</li>
						<li class="opacity_img" style="float: left; width: 232px;">
				<div class="p-img"><a href="seckill.php?id=6" target="_blank"><img src="__index__/img/0_thumb_G_1489100550574.jpg" class="img-lazyload"></a></div>
				<div class="p-name"><a href="seckill.php?id=6" target="_blank" title="法国DK正品文胸套装女内衣性感蕾丝聚拢深V调整型小胸品牌收副乳 法国正品 蕾丝性感 原装包装 送女神必备">法国DK正品文胸套装女内衣性感蕾丝聚拢深V调整型小胸品牌收副乳 法国正品 蕾丝性感 原装包装 送女神必备</a></div>
				<div class="p-over">
					<div class="p-info">
						<div class="p-price">
							<span class="shop-price"><em>¥</em>145.00</span>
							<span class="original-price"><em>¥</em>309.59</span>
						</div>
					</div>
					<div class="p-btn">
															<a href="seckill.php?id=6&amp;act=view" target="_blank">立即抢购</a>
															</div>
				</div>
			</li>
						<li class="opacity_img" style="float: left; width: 232px;">
				<div class="p-img"><a href="seckill.php?id=57" target="_blank"><img src="__index__/img/0_thumb_G_1490209796384.jpg" class="img-lazyload"></a></div>
				<div class="p-name"><a href="seckill.php?id=57" target="_blank" title="航科家用按摩椅全自动全身电动多功能太空舱按摩器老人沙发椅 智能大腿气囊按摩 脚底3D推拿">航科家用按摩椅全自动全身电动多功能太空舱按摩器老人沙发椅 智能大腿气囊按摩 脚底3D推拿</a></div>
				<div class="p-over">
					<div class="p-info">
						<div class="p-price">
							<span class="shop-price"><em>¥</em>2133.00</span>
							<span class="original-price"><em>¥</em>2616.00</span>
						</div>
					</div>
					<div class="p-btn">
															<a href="seckill.php?id=57&amp;act=view" target="_blank">立即抢购</a>
															</div>
				</div>
			</li>
						<li class="opacity_img" style="float: left; width: 232px;">
				<div class="p-img"><a href="seckill.php?id=7" target="_blank"><img src="__index__/img/0_thumb_G_1489102299856.jpg" class="img-lazyload"></a></div>
				<div class="p-name"><a href="seckill.php?id=7" target="_blank" title="新款学院风韩版时尚太空棉宽松长袖印花圆领卫衣女">新款学院风韩版时尚太空棉宽松长袖印花圆领卫衣女</a></div>
				<div class="p-over">
					<div class="p-info">
						<div class="p-price">
							<span class="shop-price"><em>¥</em>145.00</span>
							<span class="original-price"><em>¥</em>279.59</span>
						</div>
					</div>
					<div class="p-btn">
															<a href="seckill.php?id=7&amp;act=view" target="_blank">立即抢购</a>
															</div>
				</div>
			</li>
					<li class="opacity_img clone" style="float: left; width: 232px;">
				<div class="p-img"><a href="seckill.php?id=58" target="_blank"><img src="__index__/img/0_thumb_G_1489106192791.jpg" class="img-lazyload"></a></div>
				<div class="p-name"><a href="seckill.php?id=58" target="_blank" title="歌梵 床头柜 地中海美式乡村蓝色田园床边柜 储物卧室家具 品质保障 用料环保 质保5年--不单卖">歌梵 床头柜 地中海美式乡村蓝色田园床边柜 储物卧室家具 品质保障 用料环保 质保5年--不单卖</a></div>
				<div class="p-over">
					<div class="p-info">
						<div class="p-price">
							<span class="shop-price"><em>¥</em>2312.00</span>
							<span class="original-price"><em>¥</em>240.00</span>
						</div>
					</div>
					<div class="p-btn">
															<a href="seckill.php?id=58&amp;act=view" target="_blank">立即抢购</a>
															</div>
				</div>
			</li><li class="opacity_img clone" style="float: left; width: 232px;">
				<div class="p-img"><a href="seckill.php?id=8" target="_blank"><img src="__index__/img/0_thumb_G_1489102753231.jpg" class="img-lazyload"></a></div>
				<div class="p-name"><a href="seckill.php?id=8" target="_blank" title="新款韩版chic学生宽松短款外套上衣字母长袖连帽套头卫衣女潮">新款韩版chic学生宽松短款外套上衣字母长袖连帽套头卫衣女潮</a></div>
				<div class="p-over">
					<div class="p-info">
						<div class="p-price">
							<span class="shop-price"><em>¥</em>145.00</span>
							<span class="original-price"><em>¥</em>360.00</span>
						</div>
					</div>
					<div class="p-btn">
															<a href="seckill.php?id=8&amp;act=view" target="_blank">立即抢购</a>
															</div>
				</div>
			</li><li class="opacity_img clone" style="float: left; width: 232px;">
				<div class="p-img"><a href="seckill.php?id=54" target="_blank"><img src="__index__/img/0_thumb_G_1490205126945.jpg" class="img-lazyload"></a></div>
				<div class="p-name"><a href="seckill.php?id=54" target="_blank" title="海得曼无线门铃 家用 不用电池门铃 智能自发电远距离一拖一拖二 按钮 不要电池 防水设计 两年换新">海得曼无线门铃 家用 不用电池门铃 智能自发电远距离一拖一拖二 按钮 不要电池 防水设计 两年换新</a></div>
				<div class="p-over">
					<div class="p-info">
						<div class="p-price">
							<span class="shop-price"><em>¥</em>334.00</span>
							<span class="original-price"><em>¥</em>99.60</span>
						</div>
					</div>
					<div class="p-btn">
															<a href="seckill.php?id=54&amp;act=view" target="_blank">立即抢购</a>
															</div>
				</div>
			</li><li class="opacity_img clone" style="float: left; width: 232px;">
				<div class="p-img"><a href="seckill.php?id=9" target="_blank"><img src="__index__/img/0_thumb_G_1489102950633.jpg" class="img-lazyload"></a></div>
				<div class="p-name"><a href="seckill.php?id=9" target="_blank" title="韩都衣舍2017韩版女装新款黑白拼接插肩棒球服春季短外套HH5597妠 朴信惠同款 黑白拼接 插肩袖 棒球服">韩都衣舍2017韩版女装新款黑白拼接插肩棒球服春季短外套HH5597妠 朴信惠同款 黑白拼接 插肩袖 棒球服</a></div>
				<div class="p-over">
					<div class="p-info">
						<div class="p-price">
							<span class="shop-price"><em>¥</em>145.00</span>
							<span class="original-price"><em>¥</em>540.00</span>
						</div>
					</div>
					<div class="p-btn">
															<a href="seckill.php?id=9&amp;act=view" target="_blank">立即抢购</a>
															</div>
				</div>
			</li><li class="opacity_img clone" style="float: left; width: 232px;">
				<div class="p-img"><a href="seckill.php?id=55" target="_blank"><img src="__index__/img/0_thumb_G_1490205156678.jpg" class="img-lazyload"></a></div>
				<div class="p-name"><a href="seckill.php?id=55" target="_blank" title="闽豹家用工具套装 五金工具箱 电工木工德国维修工具组套修理组合 质量稳定 坚固耐用 彩套包装 可团购定制">闽豹家用工具套装 五金工具箱 电工木工德国维修工具组套修理组合 质量稳定 坚固耐用 彩套包装 可团购定制</a></div>
				<div class="p-over">
					<div class="p-info">
						<div class="p-price">
							<span class="shop-price"><em>¥</em>534.00</span>
							<span class="original-price"><em>¥</em>99.60</span>
						</div>
					</div>
					<div class="p-btn">
															<a href="seckill.php?id=55&amp;act=view" target="_blank">立即抢购</a>
															</div>
				</div>
			</li></ul></div>
        <a href="javascript:void(0);" class="prev"><i class="iconfont icon-left"></i></a>
        <a href="javascript:void(0);" class="next"><i class="iconfont icon-right"></i></a>
	</div>
</div>
<input value="1" name="seckill_goods" type="hidden"></div>
                                <div class="visual-item w1200" data-mode="h-need" data-purebox="homeAdv" data-li="1" ectype="visualItme" data-diff="0" style="display: block;">
                                    
                                    <div class="view">
<div class="need-channel clearfix" id="h-need_0" data-type="range" data-lift="推荐">
 
<div class="channel-column" style="background:url(__index__/img/1494984987302153402.jpg) no-repeat;">
    <div class="column-title">
            <h3 style="color: #ffffff">优质新品</h3>
        <p style="color: #ffffff">专注生活美学</p>
    </div>
    <div class="column-img"><img src="__index__/img/1494985002375136884.png"></div>
    <a href="" target="_blank" class="column-btn">去看看</a>
</div>
<div class="channel-column" style="background:url(__index__/img/1494984989930757668.jpg) no-repeat;">
    <div class="column-title">
            <h3 style="color: #ffffff">潮流女装</h3>
        <p style="color: #ffffff">春装流行款抢购</p>
    </div>
    <div class="column-img"><img src="__index__/img/1494984989766362152.png"></div>
    <a href="" target="_blank" class="column-btn">去看看</a>
</div>
<div class="channel-column" style="background:url(__index__/img/1494984989391013089.jpg) no-repeat;">
    <div class="column-title">
            <h3 style="color: #ffffff">人气美鞋</h3>
        <p style="color: #ffffff">新外貌“鞋”会</p>
    </div>
    <div class="column-img"><img src="__index__/img/1494984990383161028.png"></div>
    <a href="" target="_blank" class="column-btn">去看看</a>
</div>
<div class="channel-column" style="background:url(__index__/img/1494984987606903394.jpg) no-repeat;">
    <div class="column-title">
            <h3 style="color: #ffffff">品牌精选</h3>
        <p style="color: #ffffff">潮牌尖货 初春换新</p>
    </div>
    <div class="column-img"><img src="__index__/img/1494984988032635434.png"></div>
    <a href="" target="_blank" class="column-btn">去看看</a>
</div>
<div class="channel-column" style="background:url(__index__/img/1494984990175755536.jpg) no-repeat;">
    <div class="column-title">
            <h3 style="color: #ffffff">护肤彩妆</h3>
        <p style="color: #ffffff">春妆必买清单 低至3折</p>
    </div>
    <div class="column-img"><img src="__index__/img/1494984991251825734.png"></div>
    <a href="" target="_blank" class="column-btn">去看看</a>
</div>
<div class="spec" data-spec="" data-title=""></div></div>
                                    </div>
                                </div><div class="visual-item w1200 brandList" data-mode="h-brand" data-purebox="homeAdv" data-li="1" ectype="visualItme" data-diff="0" style="display: block;">
                                    
                                    <div class="view">
<div class="brand-channel clearfix" id="h-brand_0" data-type="range" data-lift="品牌">
 
<div class="home-brand-adv slide_lr_info">
        <a href="" target="_blank"><img src="__index__/img/1494984992104112514.jpg" class="slide_lr_img"></a>
    </div>
<div ectype="homeBrand">
    <div class="brand-list" id="recommend_brands">
        <ul>
                        <li>
                <div class="brand-img"><a href="" target="_blank"><img src="__index__/img/1490039286075654490.jpg"></a></div>
                <div class="brand-mash">
                    
                </div>
            </li>
                       
                    </ul>
        <a href="javascript:void(0);" ectype="changeBrand" class="refresh-btn"><i class="iconfont icon-rotate-alt"></i><span>换一批</span></a>
    </div>
</div>
<div class="spec" data-spec="" data-title="undefined"></div></div>
                                    </div>
                                </div>
<!-- 开始循环大栏目块 -->
<?php foreach($categoryRes as $k=>$v):?>
<div class="visual-item w1200" data-mode="homeFloor" data-purebox="homeFloor" data-li="1" ectype="visualItme" data-diff="0" style="display: block;">
                                    
                                    <div class="view">
<div class="floor-content" data-type="range" id="homeFloor_0" data-lift="女装">
 
<div class="floor-line-con floorOne floor-color-type-1" data-title="男装女装" data-idx="1" id="floor_1" ectype="floorItem">
    <div class="floor-hd" ectype="floorTit">
    	<i class="box_hd_arrow"></i>
    	<i class="box_hd_dec"></i>
        <div class="hd-tit"><?php echo $v['cate_name'];?></div>
        <div class="hd-tags">
            <ul>
                <li class="first current">
                    <span>新品推荐</span>
                    <i class="arrowImg"></i>
                </li>
                <?php foreach($v['children'] as $k1=>$v1):?>
                <li data-catgoods="" class="first" ectype="floor_cat_content" data-flooreveval="0" data-visualhome="1" data-floornum="6" data-id="<?php echo $v1['id'];?>">
                    <span><?php echo $v1['cate_name'];?></span>
                    <i class="arrowImg"></i>
                </li>
                <?php endforeach;?>
            </ul>
        </div>
    </div>
    <div class="floor-bd bd-mode-01">
        <div class="bd-left">
            <div class="floor-left-slide">
                <div class="bd">
                    <ul>
                        <?php foreach($v['position']['A'] as $ka => $va ): ?>
                <li><a href=""><img src="__uploads__/<?php echo $va['img_url']; ?>"></a></li>
                        <?php endforeach;?>
                            </ul>
                </div>
                <div class="hd"><ul></ul></div>
            </div>
                        
    <div class="floor-left-adv">
        <?php if(isset($v['position']['B'])): ?>
            <a href="<?php echo $v['position']['B']['0']['link_url']; ?>" target="_blank"><img src="__uploads__/<?php echo $v['position']['B']['0']['img_url']; ?>"></a>
        <?php endif; if(isset($v['position']['C'])): ?>
            <a href="<?php echo $v['position']['B']['0']['link_url']; ?>" target="_blank"><img src="__uploads__/<?php echo $v['position']['C']['0']['img_url']; ?>"></a>
        <?php endif; ?>
    </div>
            
                    </div>
        <div class="bd-right">
            <div class="floor-tabs-content clearfix">
                <div class="f-r-main f-r-m-adv">
                <!-- 新品推荐开始 -->
                <ul class="p-list">
                <?php foreach($v['newRecGoods'] as $k1=>$v1):?>
                    <li class="opacity_img">
                        <div class="product">
                            <div class="p-img"><a href="goods.php?id=801" target="_blank"><img src="__uploads__/<?php echo $v1['mid_thumb'];?>" width="140" height="140"></a></div>
                            <div class="p-name"><a href="goods.php?id=801" title="<?php echo $v1['goods_name'];?>"><?php echo $v1['goods_name'];?></a></div>
                            <div class="p-price">
                                <span class="shop-price">
                                                        <em>¥</em><?php echo $v1['shop_price'];?></span>
                                <span class="original-price"><em>¥</em><?php echo $v1['markte_price'];?></span>
                            </div>
                        </div>
                    </li>
                <?php endforeach;?>
                </ul>
                <!-- 新品推荐结束 -->
                </div>
                <!-- 对应子栏目商品显示框 -->
                <?php foreach($v['children'] as $k1=>$v1):?>
                <div class="f-r-main" ectype="floor_cat_347">
                    <ul class="p-list">
                        <?php foreach($v1['bestGoods'] as $k2=>$v2):?>
                            <li class="opacity_img">
                                <div class="product">
                                    <div class="p-img"><a href="goods.php?id=801" target="_blank"><img src="__uploads__/<?php echo $v2['mid_thumb'];?>" width="140" height="140"></a></div>
                                    <div class="p-name"><a href="goods.php?id=801" title="<?php echo $v2['goods_name'];?>"><?php echo $v2['goods_name'];?></a></div>
                                    <div class="p-price">
                                        <span class="shop-price">
                                                                <em>¥</em><?php echo $v2['shop_price'];?></span>
                                        <span class="original-price"><em>¥</em><?php echo $v2['markte_price'];?></span>
                                    </div>
                                </div>
                            </li>
                        <?php endforeach;?>
                    </ul>
                </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>
        <div class="floor-fd">
        <div class="floor-fd-brand clearfix">

            <!-- 关联的品牌 -->
            <?php if(is_array($v['brands']['brands']) || $v['brands']['brands'] instanceof \think\Collection || $v['brands']['brands'] instanceof \think\Paginator): $i = 0; $__LIST__ = $v['brands']['brands'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <div class="item">
                <a href="brandn.php?id=72" target="_blank">
                    <div class="link-l"></div>
                    <div class="img"><img src="__uploads__/<?php echo $vo['brand_img']; ?>" title="<?php echo $vo['brand_name']; ?>"></div>
                    <div class="link"></div>
                </a>
            </div>
            <?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
    </div>
    </div>
<div class="spec" data-spec="" data-title="undefined"></div></div>
                                    </div>
                                </div>
<?php endforeach;?>
                                <div class="visual-item w1200" data-mode="guessYouLike" data-purebox="goods" ectype="visualItme" data-diff="0" style="display: block;">
                                    
                                    <div class="view">
<div class="lift-channel clearfix" id="guessYouLike" data-type="range" data-lift="商品">
    <div data-goodstitle="title"><div class="ftit"><h3>还没逛够</h3></div></div>
    <ul>
 
 <?php if(is_array($hotGoodsRes) || $hotGoodsRes instanceof \think\Collection || $hotGoodsRes instanceof \think\Paginator): $i = 0; $__LIST__ = $hotGoodsRes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$goods): $mod = ($i % 2 );++$i;?>
<li class="opacity_img">
    <a href="goods.php?id=620" target="_blank">
        <div class="p-img"><img src="__uploads__/<?php echo $goods['mid_thumb']; ?>"></div>
        <div class="p-name" title="<?php echo $goods['goods_name']; ?>"><?php echo $goods['goods_name']; ?></div>
        <div class="p-price">
            <div class="shop-price">
                                <em>¥</em><?php echo $goods['shop_price']; ?>                            </div>
            <div class="original-price"></div>
        </div>
    </a>
</li>
<?php endforeach; endif; else: echo "" ;endif; ?>

</ul>
<div class="spec" data-spec=""></div></div>
                                    </div>
                                </div></div>        
        <div class="attached-search-container" ectype="suspColumn">
            <div class="w w1200">
                <div class="categorys site-mast">
                    <div class="categorys-type"><a href="categoryall.php" target="_blank">全部商品分类</a></div>
                    <div class="categorys-tab-content">
                        <div class="categorys-items" id="cata-nav">
            <div class="categorys-item" ectype="cateItem" data-id="858" data-eveval="0">
        <div class="item item-content">
                        <i class="iconfont icon-ele"></i>
                        <div class="categorys-title">
                <strong>
                                <a href="category.php?id=858" target="_blank">家用电器</a>
                                </strong>
                                <span>
                    <a href="category.php?id=1105" target="_blank">大家电</a>
                    	
                    <a href="category.php?id=1115" target="_blank">生活电器</a>
                    	
	
	
	
                                    </span>
                            </div>
        </div>
        <div class="categorys-items-layer" ectype="cateLayer">
            <div class="cate-layer-con clearfix">
                <div class="cate-layer-left">
                    <div class="cate_channel" ectype="channels_858"></div>
                    <div class="cate_detail" ectype="subitems_858"></div>
                </div>
                <div class="cate-layer-rihgt" ectype="brands_858"></div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
                <div class="categorys-item" ectype="cateItem" data-id="3" data-eveval="0">
        <div class="item item-content">
                        <i class="iconfont icon-digital"></i>
                        <div class="categorys-title">
                <strong>
                                <a href="category.php?id=33" target="_blank" class="division_cat">手机</a>、<a href="category.php?id=64" target="_blank" class="division_cat">数码</a>、<a href="category.php?id=37" target="_blank" class="division_cat">通信</a>                                </strong>
                                <span>
                    <a href="category.php?id=112" target="_blank">智能设备</a>
                    	
                    <a href="category.php?id=76" target="_blank">数码配件</a>
                    	
	
	
	
	
	
                                    </span>
                            </div>
        </div>
        <div class="categorys-items-layer" ectype="cateLayer">
            <div class="cate-layer-con clearfix">
                <div class="cate-layer-left">
                    <div class="cate_channel" ectype="channels_3"></div>
                    <div class="cate_detail" ectype="subitems_3"></div>
                </div>
                <div class="cate-layer-rihgt" ectype="brands_3"></div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
                <div class="categorys-item" ectype="cateItem" data-id="4" data-eveval="0">
        <div class="item item-content">
                        <i class="iconfont icon-computer"></i>
                        <div class="categorys-title">
                <strong>
                                <a href="category.php?id=4" target="_blank">电脑、办公</a>
                                </strong>
                                <span>
                    <a href="category.php?id=158" target="_blank">服务产品</a>
                    	
                    <a href="category.php?id=132" target="_blank">电脑整机</a>
                    	
	
	
	
	
                                    </span>
                            </div>
        </div>
        <div class="categorys-items-layer" ectype="cateLayer">
            <div class="cate-layer-con clearfix">
                <div class="cate-layer-left">
                    <div class="cate_channel" ectype="channels_4"></div>
                    <div class="cate_detail" ectype="subitems_4"></div>
                </div>
                <div class="cate-layer-rihgt" ectype="brands_4"></div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
                <div class="categorys-item" ectype="cateItem" data-id="5" data-eveval="0">
        <div class="item item-content">
                        <i class="iconfont icon-bed"></i>
                        <div class="categorys-title">
                <strong>
                                <a href="category.php?id=5" target="_blank">家居、家具、家装、厨具</a>
                                </strong>
                                <span>
                    <a href="category.php?id=143" target="_blank">厨具</a>
                    	
                    <a href="category.php?id=159" target="_blank">家装建材</a>
                    	
	
	
	
	
                                    </span>
                            </div>
        </div>
        <div class="categorys-items-layer" ectype="cateLayer">
            <div class="cate-layer-con clearfix">
                <div class="cate-layer-left">
                    <div class="cate_channel" ectype="channels_5"></div>
                    <div class="cate_detail" ectype="subitems_5"></div>
                </div>
                <div class="cate-layer-rihgt" ectype="brands_5"></div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
                <div class="categorys-item" ectype="cateItem" data-id="6" data-eveval="0">
        <div class="item item-content">
                        <i class="iconfont icon-clothes"></i>
                        <div class="categorys-title">
                <strong>
                                <a href="category.php?id=6" target="_blank">男装、女装、内衣</a>
                                </strong>
                                <span>
                    <a href="category.php?id=347" target="_blank">女装</a>
                    	
                    <a href="category.php?id=463" target="_blank">男装</a>
                    	
	
	
	
                                    </span>
                            </div>
        </div>
        <div class="categorys-items-layer" ectype="cateLayer">
            <div class="cate-layer-con clearfix">
                <div class="cate-layer-left">
                    <div class="cate_channel" ectype="channels_6"></div>
                    <div class="cate_detail" ectype="subitems_6"></div>
                </div>
                <div class="cate-layer-rihgt" ectype="brands_6"></div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
                <div class="categorys-item" ectype="cateItem" data-id="8" data-eveval="0">
        <div class="item item-content">
                        <i class="iconfont icon-shoes"></i>
                        <div class="categorys-title">
                <strong>
                                <a href="category.php?id=8" target="_blank">鞋靴、箱包、钟表、奢侈品</a>
                                </strong>
                                <span>
                    <a href="category.php?id=362" target="_blank">奢侈品</a>
                    	
                    <a href="category.php?id=360" target="_blank">功能箱包</a>
                    	
	
	
	
	
	
                                    </span>
                            </div>
        </div>
        <div class="categorys-items-layer" ectype="cateLayer">
            <div class="cate-layer-con clearfix">
                <div class="cate-layer-left">
                    <div class="cate_channel" ectype="channels_8"></div>
                    <div class="cate_detail" ectype="subitems_8"></div>
                </div>
                <div class="cate-layer-rihgt" ectype="brands_8"></div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
                <div class="categorys-item" ectype="cateItem" data-id="860" data-eveval="0">
        <div class="item item-content">
                        <i class="iconfont icon-heal"></i>
                        <div class="categorys-title">
                <strong>
                                <a href="category.php?id=860" target="_blank">个人化妆、清洁用品</a>
                                </strong>
                                <span>
                    <a href="category.php?id=876" target="_blank">面部护肤</a>
                    	
                    <a href="category.php?id=880" target="_blank">洗发护发</a>
                    	
	
	
	
	
	
                                    </span>
                            </div>
        </div>
        <div class="categorys-items-layer" ectype="cateLayer">
            <div class="cate-layer-con clearfix">
                <div class="cate-layer-left">
                    <div class="cate_channel" ectype="channels_860"></div>
                    <div class="cate_detail" ectype="subitems_860"></div>
                </div>
                <div class="cate-layer-rihgt" ectype="brands_860"></div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>                    </div>
                </div>
                <div class="mall-search">
                   <div class="dsc-search">
                        <div class="form">
                            <form id="searchForm" name="searchForm" method="get" action="search.php" onSubmit="return checkSearchForm()" class="search-form">
                                <input autocomplete="off" name="keywords" type="text" id="keyword2" value="Five Plus" class="search-text"/>
                                <input type="hidden" name="store_search_cmt" value="0">
                                <button type="submit" class="button button-goods" onclick="checkstore_search_cmt(0)" >搜商品</button>
                                <button type="submit" class="button button-store" onclick="checkstore_search_cmt(1)" >搜店铺</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="suspend-login">
                    	<a href="user.php">登录</a>
    |
    <a href="user.php?act=register">注册</a>
                    </div>
                <div class="shopCart" id="ECS_CARTINFO">
                    
<div class="shopCart-con dsc-cm">
	<a href="flow.php">
		<i class="iconfont icon-carts"></i>
		<span>我的购物车</span>
		<em class="count cart_num">0</em>
	</a>
</div>
<div class="dorpdown-layer" ectype="dorpdownLayer">
        <div class="prompt"><div class="nogoods"><b></b><span>购物车中还没有商品，赶紧选购吧！</span></div></div>
    </div>

<script type="text/javascript">
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
</script>                </div>
            </div>
    	</div>
        <div class="lift lift-mode-one lift-hide" ectype="lift" data-type="one" style="z-index:100001">
            <div class="lift-list" ectype="liftList">
                <div class="lift-item lift-h-seckill lift-item-first" ectype="liftItem" data-target="#h-seckill"><span>秒杀活动</span><i class="lift-arrow"></i></div>
            </div>
        </div>
        
        <input name="warehouse_id" type="hidden" value="1">
    	<input name="area_id" type="hidden" value="7">
    </div>
    
    <div class="mui-mbar-tabs">
	<div class="quick_link_mian" data-userid="0">
        <div class="quick_links_panel">
            <div id="quick_links" class="quick_links">
            	<ul>
                    <li>
                        <a href="user.php"><i class="setting"></i></a>
                        <div class="ibar_login_box status_login">
                            <div class="avatar_box">
                                <p class="avatar_imgbox">
                                <img src="__index__/img/touxiang.jpg" width="100" height="100"/>
                            </p>
                                <ul class="user_info">
                                    <li>用户名：暂无</li>
                                    <li>级&nbsp;别：暂无</li>
                                </ul>
                            </div>
                            <div class="login_btnbox">
                                <a href="user.php?act=order_list" class="login_order">我的订单</a>
                                <a href="user.php?act=collection_list" class="login_favorite">我的收藏</a>
                            </div>
                            <i class="icon_arrow_white"></i>
                        </div>
                    </li>
                    
                    <li id="shopCart">
                        <a href="javascript:void(0);" class="cart_list">
                            <i class="message"></i>
                            <div class="span">购物车</div>
                            <span class="cart_num">0</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="mpbtn_order"><i class="chongzhi"></i></a>
                        <div class="mp_tooltip">
                            <font id="mpbtn_money" style="font-size:12px; cursor:pointer;">我的订单</font>
                            <i class="icon_arrow_right_black"></i>
                        </div>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="mpbtn_yhq"><i class="yhq"></i></a>
                        <div class="mp_tooltip">
                            <font id="mpbtn_money" style="font-size:12px; cursor:pointer;">优惠券</font>
                            <i class="icon_arrow_right_black"></i>
                        </div>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="mpbtn_total"><i class="view"></i></a>
                        <div class="mp_tooltip" style=" visibility:hidden;">
                            <font id="mpbtn_myMoney" style="font-size:12px; cursor:pointer;">我的资产</font>
                            <i class="icon_arrow_right_black"></i>
                        </div>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="mpbtn_history"><i class="zuji"></i></a>
                        <div class="mp_tooltip">
                            <font id="mpbtn_histroy" style="font-size:12px; cursor:pointer;">我的足迹</font>
                            <i class="icon_arrow_right_black"></i>
                        </div>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="mpbtn_collection"><i class="wdsc"></i></a>
                        <div class="mp_tooltip">
                            <font id="mpbtn_wdsc" style="font-size:12px; cursor:pointer;">我的收藏</font>
                            <i class="icon_arrow_right_black"></i>
                        </div>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="mpbtn_email"><i class="email"></i></a>
                        <div class="mp_tooltip">
                            <font id="mpbtn_email" style="font-size:12px; cursor:pointer;">邮箱订阅</font>
                            <i class="icon_arrow_right_black"></i>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="quick_toggle">
            	<ul>
                    <li>
                        
                        
                        <a id="IM" IM_type="dsc" onclick="openWin(this)" href="javascript:;"><i class="kfzx"></i></a>
        <div class="mp_tooltip">客服中心<i class="icon_arrow_right_black"></i></div>
                        
                    </li>
                    <li class="returnTop">
                        <a href="javascript:void(0);" class="return_top"><i class="top"></i></a>
                    </li>
                </ul>

            </div>
        </div>
        <div id="quick_links_pop" class="quick_links_pop"></div>
    </div>
</div>
<div class="email_sub">
	<div class="attached_bg"></div>
	<div class="w1200">
        <div class="email_sub_btn">
            <input type="input" id="user_email" name="user_email" autocomplete="off" placeholder="请输入您的邮箱帐号">
            <a href="javascript:void(0);" onClick="add_email_list();" class="emp_btn">订阅</a>
            <a href="javascript:void(0);" onClick="cancel_email_list();" class="emp_btn emp_cancel_btn">退订</a>
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
<script type="text/javascript" src="__index__/js/login.js"></script>
<script type="text/javascript" src="__index__/js/suggest.js"></script><script type="text/javascript" src="__index__/js/scroll_city.js"></script><script type="text/javascript" src="__index__/js/utils.js"></script>
<script type="text/javascript" src="__index__/js/warehouse.js"></script><script type="text/javascript" src="__index__/js/warehouse_area.js"></script>
    	
	
     <div ectype="bonusadv_box"></div>
    <script type="text/javascript" src="__index__/js/jquery.SuperSlide.2.1.1.js"></script><script type="text/javascript" src="__index__/js/jquery.yomi.js"></script><script type="text/javascript" src="__index__/js/cart_common.js"></script><script type="text/javascript" src="__index__/js/cart_quick_links.js"></script>    <script type="text/javascript" src="__index__/js/dsc-common.js"></script>
    <script type="text/javascript" src="__index__/js/asyLoadfloor.js"></script>
    <script type="text/javascript" src="__index__/js/jquery.purebox.js"></script>
    <script type="text/javascript">
		/*首页轮播*/
		var slideType = $("*[data-mode='lunbo']").find("*[data-type='range']").data("slide");
		var length = $(".banner .bd").find("li").length;
		
		if(slideType == "roll"){
			slideType = "left";
		}
		
		if(length>1){
			$(".banner").slide({titCell:".hd ul",mainCell:".bd ul",effect:slideType,interTime:5000,delayTime:500,autoPlay:true,autoPage:true,trigger:"click",endFun:function(i,c,s){
				$(window).resize(function(){
					var width = $(window).width();
					s.find(".bd li").css("width",width);
				});
			}});
		}else{
			$(".banner .hd").hide();
		}
		
		//首页信息栏 新闻文章切换 
		$(".vip-item").slide({titCell:".tit a",mainCell:".con"});
		
		//楼层二级分类商品切换
		$("*[ectype='floorItem']").slide({titCell:".hd-tags li",mainCell:".floor-tabs-content",titOnClassName:"current"});
		
		$("*[ectype='floorItem']").slide({titCell:".floor-nav li",mainCell:".floor-tabs-content",titOnClassName:"current"});
		
		//第五套楼层模板
		$(".floor-fd-slide").slide({mainCell:".bd ul",effect:"left",autoPlay:false,autoPage:true,vis:4,scroll:1,prevCell:".ff-prev",nextCell:".ff-next"});
		
		//第六套楼层模板
		$(".floor-brand").slide({mainCell:".fb-bd ul",effect:"left",pnLoop:true,autoPlay:false,autoPage:true,vis:3,scroll:1,prevCell:".fs_prev",nextCell:".fs_next"});
		
		//楼层轮播图广告
		$("*[data-purebox='homeFloor']").each(function(index, element) {
			var f_slide_length = $(this).find(".floor-left-slide .bd li").length;
			if(f_slide_length > 1){
				$(element).find(".floor-left-slide").slide({titCell:".hd ul",mainCell:".bd ul",effect:"left",interTime:3500,delayTime:500,autoPlay:true,autoPage:true});
			}else{
				$(element).find(".floor-left-slide .hd").hide();
			}
        });
		//异步加载出首页个人信息、秒杀活动、品牌信息、首页弹出广告
        $(function(){
            var site_domain = "";
            var brand_id = $('*[ectype="homeBrand"]').find(".brand-list").data("value");
			var where = '';
			if(!brand_id){
				brand_id = '';
			}
			
            // if(site_domain){
            //     $.ajax({
            //         type: "GET",
            //         url: "ajax_dialog.php", /*jquery Ajax跨域*/
            //         data: "act=getUserInfo&is_jsonp=1&brand_id="+brand_id,
            //         dataType:"jsonp",
            //         jsonp:"jsoncallback",
            //         success: homeAjax
            //      });
            // }else{
            //     Ajax.call('ajax_dialog.php?act=getUserInfo', 'brand_id=' + brand_id, homeAjax , 'POST', 'JSON');
            // }
            ajax_Homeindex_Bonusadv();
			function ajax_Homeindex_Bonusadv(){
                            var cfg_bonus_adv = "1";//是否开启首页弹出广告
                            var suffix = "backup_tpl_1";
                            
                            if(cfg_bonus_adv == 1 && suffix){
//                                 Ajax.call('ajax_dialog.php?act=ajax_Homeindex_Bonusadv', 'suffix=' + suffix, function(data){
//                                     if(data.error != 1){
// $("[ectype='bonusadv_box']").html(data.content);
//                                     }
//                                 } , 'POST', 'JSON');
                            }
                        }
			function homeAjax(data){
				$("*[ectype='user_info']").html(data.content);
				$("*[ectype='homeBrand']").html(data.brand_list);
				
				if($("*[data-mode='lunbo']").length > 0){
					$("*[data-mode='lunbo']").after("<div class='visual-item w1200' ectype='channel'>"+data.seckill_goods+"</div>");
				}else{
					$(".content").find("*[ectype='visualItme']").eq(0).before("<div class='visual-item w1200' ectype='channel'>"+data.seckill_goods+"</div>");
				}
				$("*[ectype='time']").each(function(){
					$(this).yomi();
				});
				
				//秒杀活动
				var seckill_goods = $("input[name='seckill_goods']").val();
				if(seckill_goods == 0){
					$(".lift-h-seckill").hide();
				}else{
					$(".lift-h-seckill").show();
				}
				
				//首页秒杀商品滚动
				$(".seckill-channel").slide({mainCell:".box-bd ul",effect:"leftLoop",autoPlay:true,autoPage:true,interTime:5000,delayTime:500,vis:5,scroll:1,trigger:"click"});
				
				$.catetopLift();
				
				$(window).scroll(function(){
					var scrollTop = $(document).scrollTop();
					var navTop = $("*[ectype='channel']").offset().top;  //by yanxin
						
					if(scrollTop>navTop){
						$("*[ectype='suspColumn']").addClass("show");
					}else{
						$("*[ectype='suspColumn']").removeClass("show");
					}
				});
			}
                        
			//重新加载商品模块
			$("[data-mode='guessYouLike']").each(function(){
				var _this = $(this);
				var goods_ids = _this.data("goodsid");
				var warehouse_id = $("input[name='warehouse_id']").val();
				var area_id = $("input[name='area_id']").val();
				if(goods_ids){
					 // Ajax.call('ajax_dialog.php?act=getguessYouLike', 'goods_ids=' + goods_ids + "&warehouse_id=" + warehouse_id + "&area_id=" + area_id, function(data){
						//  if(data.content){
						// 	_this.find(".view .lift-channel ul").html(data.content);
						// }
					 // } , 'POST', 'JSON');
				}
			});
                       
			$("li[ectype='floor_cat_content'].current").each(function(){
				 get_homefloor_cat_content(this);
			});
			
			$("[ectype='identi_floorgoods'].current").each(function(){
				 get_homefloor_cat_content(this);
			});
                        checked_article_cat();
                        function checked_article_cat(){
                            var cat_ids = '';
                            $('[data-mode="insertVipEdit"] .tit a').each(function(){
                                var val = $(this).data('catid');
                                if(cat_ids){
                                    cat_ids = cat_ids + "," + val;
                                }else{
                                    cat_ids = val;
                                }
                            });
                            if(cat_ids){
      //                           Ajax.call('ajax_dialog.php?act=checked_article_cat', 'cat_ids=' + cat_ids, function(data){
						// $('[data-mode="insertVipEdit"] .vip_article_cat').html(data.content);
					 // } , 'POST', 'JSON');
                            }
                            
                        }
        });
		
		function readyLoad(){
			var homeWrap = $("*[ectype='homeWrap']");
			var homeitem = homeWrap.find("*[ectype='visualItme']");
			var mode = "";
			var range = "";
			var lift = "";
			var id = "";
			var floorItem = "";
			var liftObj = $("*[ectype='lift']");
			var returnTop = "";
			
			if(liftObj.data("type") == "one"){
				returnTop = '<div class="lift-item lift-item-top" ectype="liftItem"><i class="iconfont icon-returntop"></i></div>';
			}else{
				returnTop = '<div class="lift-item lift-item-top" ectype="liftItem">TOP<i class="iconfont icon-top-alt"></i></div>';
			}
			
			homeitem.each(function(k,v){
				mode = $(this).data("mode");
				if(mode != "lunbo" && mode != "h-streamer" && mode != "custom"){
					range = $(this).find("*[data-type='range']");
					lift = range.data("lift");
					id = range.attr("id");
					
					var _div = '<div class="lift-item" ectype="liftItem" data-target="#'+ id +'" title="'+lift+'"><span>'+lift+'</span><i class="lift-arrow"></i></div>';
					
					$("*[ectype='liftList']").append(_div);
				}
				
			});
			
			$("*[ectype='liftList']").append(returnTop);
		}
		readyLoad();
		
		//会员名称*号 by yanxin
		/*var name = $(".suspend-login a.nick_name").text();
		var star = new Array();
		var nameLen = name.length > 2 ? name.length-2:"1";
		for(var i=1;i<=nameLen;i++){
			star.push("*");
		}
		star = star.join("");
		if(name.length > 2){
			var new_name = name[0] + star + name[name.length-1];
		}else{
			var new_name = name[0] + star;
		}
		$(".suspend-login a.nick_name").text(new_name);
		*/		
		//去掉悬浮框 我的购物车
		$(".attached-search-container .shopCart-con a span").text("");
		
		$("*[ectype='time']").each(function(){
			$(this).yomi();
		});
		
		/*首页可视化 第八套模板 楼层左侧前后轮播 */
		aroundSilder(".floor_silder")
    </script>
    <script type="text/javascript">
        var page=0;
        var totalPage=0;
        var brandUrl="<?php echo url('brand/lst'); ?>";
        $(function(){
            $('.refresh-btn').click();
        });
    </script>
</body>
</html>