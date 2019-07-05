<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:80:"D:\phpstudy\PHPTutorial\WWW\shop\public/../application/admin\view\goods\edit.htm";i:1561209962;s:80:"D:\phpstudy\PHPTutorial\WWW\shop\public/../application/admin\view\common\top.htm";i:1508129371;s:81:"D:\phpstudy\PHPTutorial\WWW\shop\public/../application/admin\view\common\left.htm";i:1561206852;}*/ ?>
<!DOCTYPE html>
<html><head>
        <meta charset="utf-8">
    <title>童老师ThinkPHP交流群：484519446</title>

    <meta name="description" content="Dashboard">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--Basic Styles-->
    <link href="__admin__/style/bootstrap.css" rel="stylesheet">
    <link href="__admin__/style/font-awesome.css" rel="stylesheet">
    <link href="__admin__/style/weather-icons.css" rel="stylesheet">

    <!--Beyond styles-->
    <link id="beyond-link" href="__admin__/style/beyond.css" rel="stylesheet" type="text/css">
    <link href="__admin__/style/demo.css" rel="stylesheet">
    <link href="__admin__/style/typicons.css" rel="stylesheet">
    <link href="__admin__/style/animate.css" rel="stylesheet">
    <script src="__plus__/ueditor/ueditor.config.js"></script>
    <script src="__plus__/ueditor/ueditor.all.min.js"></script>
    <script src="__plus__/ueditor/lang/zh-cn/zh-cn.js"></script>
    <style type="text/css">
    .price{
        width: 150px;
        margin-left: 10px;
        display: inline-block;
    }
    .abtn{
        padding-right: 10px;
    }
    </style>
</head>
<body>
    <!-- 头部 -->
    <div class="navbar">
    <div class="navbar-inner">
        <div class="navbar-container">
            <!-- Navbar Barnd -->
            <div class="navbar-header pull-left">
                <a href="#" class="navbar-brand">
                    <small>
                            <img src="__admin__/images/logo.png" alt="">
                        </small>
                </a>
            </div>
            <!-- /Navbar Barnd -->
            <!-- Sidebar Collapse -->
            <div class="sidebar-collapse" id="sidebar-collapse">
                <i class="collapse-icon fa fa-bars"></i>
            </div>
            <!-- /Sidebar Collapse -->
            <!-- Account Area and Settings -->
            <div class="navbar-header pull-right">
                <div class="navbar-account">
                    <ul class="account-area">
                        <li>
                            <a class="login-area dropdown-toggle" data-toggle="dropdown">
                                <div class="avatar" title="View your public profile">
                                    <img src="__admin__/images/adam-jansen.jpg">
                                </div>
                                <section>
                                    <h2><span class="profile"><span>admin</span></span></h2>
                                </section>
                            </a>
                            <!--Login Area Dropdown-->
                            <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                <li class="username"><a>David Stevenson</a></li>
                                <li class="dropdown-footer">
                                    <a href="/admin/user/logout.html">
                                            退出登录
                                        </a>
                                </li>
                                <li class="dropdown-footer">
                                    <a href="/admin/user/changePwd.html">
                                            修改密码
                                        </a>
                                </li>
                            </ul>
                            <!--/Login Area Dropdown-->
                        </li>
                        <!-- /Account Area -->
                        <!--Note: notice that setting div must start right after account area list.
                            no space must be between these elements-->
                        <!-- Settings -->
                    </ul>
                </div>
            </div>
            <!-- /Account Area and Settings -->
        </div>
    </div>
</div>

    <!-- /头部 -->
    
    <div class="main-container container-fluid">
        <div class="page-container">
            <!-- Page Sidebar -->
            <div class="page-sidebar" id="sidebar">
                <!-- Page Sidebar Header-->
                <div class="sidebar-header-wrapper">
                    <input class="searchinput" type="text">
                    <i class="searchicon fa fa-search"></i>
                    <div class="searchhelper">Search Reports, Charts, Emails or Notifications</div>
                </div>
                <!-- /Page Sidebar Header -->
                <!-- Sidebar Menu -->
                <ul class="nav sidebar-menu">
                    <!--Dashboard-->
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-shopping-cart"></i>
                            <span class="menu-text">商品管理</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo url('Goods/lst'); ?>">
                                    <span class="menu-text">商品列表</span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo url('Goods/add'); ?>">
                                    <span class="menu-text">添加商品</span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo url('Brand/lst'); ?>">
                                    <span class="menu-text">商品品牌</span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo url('Category/lst'); ?>">
                                    <span class="menu-text">商品分类</span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo url('Type/lst'); ?>">
                                    <span class="menu-text">商品类型</span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="menu-text">商品回收站</span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>                            
                    </li> 
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-thumbs-up"></i>
                            <span class="menu-text">推荐位管理</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo url('Recpos/lst'); ?>">
                                    <span class="menu-text">推荐位列表</span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo url('Recpos/add'); ?>">
                                    <span class="menu-text">添加推荐位</span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>                            
                    </li> 
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-random"></i>
                            <span class="menu-text">栏目关联</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo url('CategoryWords/lst'); ?>">
                                    <span class="menu-text">推荐词关联</span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo url('CategoryBrands/lst'); ?>">
                                    <span class="menu-text">品牌关联</span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo url('CategoryAd/lst'); ?>">
                                    <span class="menu-text">栏目关联推荐</span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>                            
                    </li> 
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-money"></i>
                            <span class="menu-text">促销管理</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="#">
                                    <span class="menu-text">团购活动</span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="menu-text">积分商城</span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="menu-text">优惠券</span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>                            
                    </li>                      
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa  fa-legal"></i>
                            <span class="menu-text">订单管理</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo url('admin/Order/lst'); ?>">
                                    <span class="menu-text">订单列表</span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo url('admin/Order/orderSelect'); ?>">
                                    <span class="menu-text">订单查询</span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>                            
                    </li>
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-users"></i>
                            <span class="menu-text">会员管理</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo url('User/lst'); ?>">
                                    <span class="menu-text">会员列表</span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo url('MemberLevel/lst'); ?>">
                                    <span class="menu-text">会员级别列表</span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo url('MemberLevel/add'); ?>">
                                    <span class="menu-text">会员级别</span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="menu-text">会员留言</span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>                            
                    </li>
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-sitemap"></i>
                            <span class="menu-text">数据库管理</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="#">
                                    <span class="menu-text">数据备份</span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="menu-text">数据表优化</span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>                            
                    </li>
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-envelope"></i>
                            <span class="menu-text">短信管理</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="#">
                                    <span class="menu-text">发送短信</span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="menu-text">短信签名</span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>                            
                    </li>
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-file-text"></i>
                            <span class="menu-text">文章模块</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo url('Cate/lst'); ?>">
                                    <span class="menu-text">文章分类</span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo url('Article/lst'); ?>">
                                    <span class="menu-text">文章管理</span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>                            
                    </li>
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-location-arrow"></i>
                            <span class="menu-text">导航管理</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo url('Nav/lst'); ?>">
                                    <span class="menu-text">导航列表</span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo url('Nav/add'); ?>">
                                    <span class="menu-text">添加导航</span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>                            
                    </li>
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-picture-o"></i>
                            <span class="menu-text">图片管理</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo url('Article/imglist'); ?>">
                                    <span class="menu-text">图片列表</span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo url('AlternateImg/lst'); ?>">
                                    <span class="menu-text">首页轮播图管理</span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>                            
                    </li>
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa  fa-gear"></i>
                            <span class="menu-text">系统设置</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo url('Conf/conflist'); ?>">
                                    <span class="menu-text">配置项</span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo url('Conf/lst'); ?>">
                                    <span class="menu-text">配置管理</span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="menu-text">支付方式设置</span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>                            
                    </li>
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-link"></i>
                            <span class="menu-text">友情链接</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo url('Link/lst'); ?>">
                                    <span class="menu-text">链接列表</span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>                            
                    </li>
                     <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-link"></i>
                            <span class="menu-text">缓存</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a  href="<?php echo url('Base/delCache'); ?>">
                                    <span class="menu-text">清除缓存</span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>                            
                    </li>
                </ul>
                <!-- /Sidebar Menu -->
            </div>
            <!-- /Page Sidebar -->
            <!-- Page Content -->
            <div class="page-content">
                <!-- Page Breadcrumb -->
                <div class="page-breadcrumbs">
                    <ul class="breadcrumb">
                                        <li>
                        <a href="<?php echo url('Index/index'); ?>">系统</a>
                    </li>
                                        <li>
                        <a href="<?php echo url('Goods/lst'); ?>">商品列表</a>
                    </li>
                                        <li class="active">修改商品</li>
                                        </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">
                    
<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
                    <form class="form-horizontal" role="form" action="" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?php echo $goods['id']; ?>">
                        <input type="hidden" name="og_thumb" value="<?php echo $goods['og_thumb']; ?>">
                        <input type="hidden" name="big_thumb" value="<?php echo $goods['big_thumb']; ?>">
                        <input type="hidden" name="mid_thumb" value="<?php echo $goods['mid_thumb']; ?>">
                        <input type="hidden" name="sm_thumb" value="<?php echo $goods['sm_thumb']; ?>">
                        <!-- 商品信息开始 -->
                        <div class="widget-body">
                            <div class="widget-main ">
                                <div class="tabbable">
                                    <ul class="nav nav-tabs tabs-flat" id="myTab11">
                                        <li class="active">
                                            <a data-toggle="tab" href="#baseinfo">
                                                基本信息
                                            </a>
                                        </li>
                                        <li class="">
                                            <a data-toggle="tab" href="#goodsdes">
                                                描述信息
                                            </a>
                                        </li>
                                        <li class="">
                                            <a data-toggle="tab" href="#mbprice">
                                                会员价格
                                            </a>
                                        </li>
                                        <li class="">
                                            <a data-toggle="tab" href="#goodsattr">
                                                商品属性
                                            </a>
                                        </li>
                                        <li class="">
                                            <a data-toggle="tab" href="#goodsphoto">
                                                商品相册
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content tabs-flat">
                                        <div id="baseinfo" class="tab-pane active">
                                            <div class="form-group">
                                                <label for="username" class="col-sm-2 control-label no-padding-right">商品名称</label>
                                                <div class="col-sm-6">
                                                    <input class="form-control" placeholder="" name="goods_name" value="<?php echo $goods['goods_name']; ?>" required="" type="text">
                                                </div>
                                                <p class="help-block col-sm-4 red">* 必填</p>
                                            </div>
                                            <div class="form-group">
                                                <label for="username" class="col-sm-2 control-label no-padding-right">推荐位</label>
                                                <div class="col-sm-6">
                                                    <div class="checkbox">
                                                    <?php if(is_array($goodsRecposRes) || $goodsRecposRes instanceof \think\Collection || $goodsRecposRes instanceof \think\Paginator): $i = 0; $__LIST__ = $goodsRecposRes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$recpos): $mod = ($i % 2 );++$i;?>
                                                        <label style="margin-right:15px;">
                                                            <?php
                                                                if(in_array($recpos['id'], $myGoodsRecposRes)){
                                                                    $checked='checked="checked"';
                                                                }else{
                                                                    $checked='';
                                                                }
                                                            ?>
                                                            <input <?php echo $checked;?> type="checkbox" name="recpos[]" value="<?php echo $recpos['id']; ?>" class="colored-blue">
                                                            <span class="text"><?php echo $recpos['rec_name']; ?></span>
                                                        </label>
                                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="username" class="col-sm-2 control-label no-padding-right">商品主图</label>
                                                <div class="col-sm-6">
                                                    <input class="form-control" style="border:none; box-shadow:none;" name="og_thumb" type="file">
                                                    <?php if($goods['sm_thumb']): ?>
                                                        <img src="__uploads__/<?php echo $goods['sm_thumb']; ?>" height="30">
                                                    <?php else: ?>
                                                        暂无缩略图
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="username" class="col-sm-2 control-label no-padding-right">上架</label>
                                                <div class="col-sm-6">
                                                    <div class="radio">
                                                        <label>
                                                            <input <?php if($goods['on_sale'] == 1): ?> checked="checked" <?php endif; ?> name="on_sale" type="radio" class="colored-blue" value="1">
                                                            <span class="text"> 是</span>
                                                        </label>
                                                        <label>
                                                            <input <?php if($goods['on_sale'] == 0): ?> checked="checked" <?php endif; ?> name="on_sale" type="radio" class="colored-blue" value="0">
                                                            <span class="text"> 否</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="username" class="col-sm-2 control-label no-padding-right">所属栏目</label>
                                                <div class="col-sm-6">
                                                    <select name="category_id">
                                                        <option value="">请选择</option>
                                                        <?php if(is_array($CategoryRes) || $CategoryRes instanceof \think\Collection || $CategoryRes instanceof \think\Paginator): $i = 0; $__LIST__ = $CategoryRes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i;?>
                                                        <option <?php if($goods['category_id'] == $cate['id']): ?> selected="selected" <?php endif; ?> value="<?php echo $cate['id']; ?>"><?php echo str_repeat('-', $cate['level']*8)?><?php echo $cate['cate_name']; ?></option>
                                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="username" class="col-sm-2 control-label no-padding-right">所属品牌</label>
                                                <div class="col-sm-6">
                                                    <select name="brand_id">
                                                        <option value="">请选择</option>
                                                        <?php if(is_array($brandRes) || $brandRes instanceof \think\Collection || $brandRes instanceof \think\Paginator): $i = 0; $__LIST__ = $brandRes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$brand): $mod = ($i % 2 );++$i;?>
                                                        <option <?php if($goods['brand_id'] == $brand['id']): ?> selected="selected" <?php endif; ?> value="<?php echo $brand['id']; ?>"><?php echo $brand['brand_name']; ?></option>
                                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="username" class="col-sm-2 control-label no-padding-right">市场价</label>
                                                <div class="col-sm-6">
                                                    <input class="form-control" placeholder="" name="markte_price" value="<?php echo $goods['markte_price']; ?>" required="" type="text">
                                                </div>
                                                <p class="help-block col-sm-4 red">* 必填</p>
                                            </div>
                                            <div class="form-group">
                                                <label for="username" class="col-sm-2 control-label no-padding-right">本店价</label>
                                                <div class="col-sm-6">
                                                    <input class="form-control" placeholder="" name="shop_price" value="<?php echo $goods['shop_price']; ?>" required="" type="text">
                                                </div>
                                                <p class="help-block col-sm-4 red">* 必填</p>
                                            </div>
                                            <div class="form-group">
                                                <label for="username" class="col-sm-2 control-label no-padding-right">重量</label>
                                                <div class="col-sm-6">
                                                    <input class="form-control" style="width:300px; display:inline-block;" placeholder="" name="goods_weight" value="<?php echo $goods['goods_weight']; ?>" required="" type="text">
                                                    <select name="weight_unit">
                                                        <option <?php if($goods['weight_unit'] == 'Kg'): ?> selected="selected" <?php endif; ?> value="kg">kg</option>
                                                        <option <?php if($goods['weight_unit'] == 'g'): ?> selected="selected" <?php endif; ?> value="g">g</option>
                                                    </select>
                                                </div>
                                                <p class="help-block col-sm-4 red">* 必填</p>
                                            </div>
                                        </div>
                                        <div id="goodsdes" class="tab-pane">
                                            <textarea name="goods_des" id="goods_des"><?php echo $goods['goods_des']; ?></textarea>
                                        </div>
                                        <div id="mbprice" class="tab-pane">
                                        <?php if(is_array($mlRes) || $mlRes instanceof \think\Collection || $mlRes instanceof \think\Paginator): $i = 0; $__LIST__ = $mlRes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ml): $mod = ($i % 2 );++$i;?>
                                            <div class="form-group">
                                                <label for="username" class="col-sm-2 control-label no-padding-right"><?php echo $ml['level_name']; ?></label>
                                                <div class="col-sm-6">
                                                    <input class="form-control" placeholder="" name="mp[<?php echo $ml['id']; ?>]" value="<?php if(isset($mpRes[$ml['id']]['mprice'])){ echo $mpRes[$ml['id']]['mprice']; }else{echo '';} ?>" type="text">
                                                </div>
                                            </div>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                        </div>
                                        <div id="goodsattr" class="tab-pane">
                                            <div class="form-group">
                                                <label for="username" class="col-sm-2 control-label no-padding-right">商品类型</label>
                                                <div class="col-sm-6">
                                                    <select name="type_id" <?php if($goods['type_id'] != 0): ?> disabled="disabled" <?php endif; ?>>
                                                        <option value="0">请选择</option>
                                                        <?php if(is_array($typeRes) || $typeRes instanceof \think\Collection || $typeRes instanceof \think\Paginator): $i = 0; $__LIST__ = $typeRes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$type): $mod = ($i % 2 );++$i;?>
                                                        <option <?php if($goods['type_id'] == $type['id']): ?> selected="selected" <?php endif; ?> value="<?php echo $type['id']; ?>"><?php echo $type['type_name']; ?></option>
                                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div id="attr_list">
                                            <!-- 属性显示  -->
                                            <?php foreach($attrRes as $k => $v):if($v['attr_type'] == 1):
                                                    $arrRido=explode(',', $v['attr_values']);
                                                ?>
                                                    <!-- 单选 -->
                                                    <!-- 循环显示当前商品所拥有的所有的单选属性 -->
                                                    <?php foreach($gattrRes[$v['id']] as $k0=>$v0):?>
                                                    <div gaid="<?php echo $v0['id'];?>" class="form-group"><label class="col-sm-2 control-label no-padding-right"><?php echo $v['attr_name'];?></label><div class="col-sm-6"><a class="abtn" onclick="addrow(this);" href="#"><?php if($k0==0){ echo '[+]'; }else{ echo '[-]'; } ?></a>
                                                    <select name='old_goods_attr[<?php echo $v['id'];?>][]'>
                                                        <option value="">请选择</option>
                                                        <?php foreach($arrRido as $k1=>$v1):?>
                                                        <option <?php if($v1 == $v0['attr_value']){ echo 'selected="selected"'; } ?> value="<?php echo $v1;?>"><?php echo $v1;?></option>
                                                        <?php endforeach;?>
                                                    </select>
                                                    <input class="form-control price" placeholder="价格" name="old_attr_price[<?php echo $v0['id'];?>]" type="text" value="<?php echo $v0['attr_price']; ?>"></div></div>
                                                    <?php endforeach;else:?>
                                                    <!-- 唯一 -->
                                                    <?php if(!$v['attr_values']):?>
                                                        <div class="form-group"><label class="col-sm-2 control-label no-padding-right"><?php echo $v['attr_name'];?></label><div class="col-sm-6"><input class="form-control price" name='old_goods_attr[<?php echo $v['id'];?>]' type="text" value="<?php echo $gattrRes[$v['id']][0]['attr_value'];?>"><input type="hidden" name="old_attr_price[<?php echo $gattrRes[$v['id']][0]['id'];?>]"></div></div>
                                                    <?php else:
                                                        $arrSelect=explode(',', $v['attr_values']);
                                                    ?>
                                                    <div class="form-group"><label class="col-sm-2 control-label no-padding-right"><?php echo $v['attr_name'];?></label><div class="col-sm-6">
                                                        <select name='old_goods_attr[<?php echo $v['id'];?>]'>
                                                            <option value="">请选择</option>
                                                            <?php foreach($arrSelect as $k1=>$v1):?>
                                                            <option <?php if($v1 == $gattrRes[$v['id']][0]['attr_value']){ echo 'selected="selected"'; } ?> value="<?php echo $v1;?>"><?php echo $v1;?></option>
                                                            <?php endforeach;?>
                                                        </select>
                                                        <input type="hidden" name="old_attr_price[<?php echo $gattrRes[$v['id']][0]['id'];?>]">
                                                    </div></div>
                                                    <?php endif;endif;endforeach;?>
                                            </div> 
                                        </div>
                                        <div id="goodsphoto" class="tab-pane">
                                        <?php if(is_array($gphotoRes) || $gphotoRes instanceof \think\Collection || $gphotoRes instanceof \think\Paginator): $i = 0; $__LIST__ = $gphotoRes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$gphoto): $mod = ($i % 2 );++$i;?>
                                            <div id="<?php echo $gphoto['id']; ?>" class="form-group">
                                                <label for="username" class="col-sm-2 control-label no-padding-right"></label>
                                                <div class="col-sm-6">
                                                    <a href="#" onclick="delrow(this);">[-]</a>
                                                    <img height="50" style="box-shadow:none; display:inline-block;" src="__uploads__/<?php echo $gphoto['sm_photo']; ?>">
                                                </div>
                                            </div>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                            <div class="form-group">
                                                <label for="username" class="col-sm-2 control-label no-padding-right"></label>
                                                <div class="col-sm-6">
                                                    <a href="#" onclick="addphoto(this);">[+]</a><input class="form-control" style="border:none; box-shadow:none; width:50%; display:inline-block;" name="goods_photo[]" type="file">
                                                </div>
                                            </div>
                                            <div id="goods_photo"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-default">保存信息</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 商品信息结束 -->
                    </form>
        </div>
    </div>
</div>

                </div>
                <!-- /Page Body -->
            </div>
            <!-- /Page Content -->
        </div>  
    </div>

        <!--Basic Scripts-->
    <script src="__admin__/style/jquery_002.js"></script>
    <script src="__admin__/style/bootstrap.js"></script>
    <script src="__admin__/style/jquery.js"></script>
    <!--Beyond Scripts-->
    <script src="__admin__/style/beyond.js"></script>
    <script type="text/javascript">
    //实例化编辑器
    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
    UE.getEditor('goods_des',{initialFrameWidth:1500,initialFrameHeight:800,toolbars: [['fullscreen', 'source', 'undo', 'redo','bold', 'italic', 'underline', 'fontborder', 'strikethrough', 'superscript', 'subscript','removeformat', 'formatmatch', 'autotypeset', 'blockquote', 'pasteplain', '|', 'forecolor', 'backcolor', 'insertorderedlist', 'insertunorderedlist','selectall', 'cleardoc']]});
    </script>
    <script type="text/javascript">
    $("select[name=type_id]").change(function(){
        var type_id=$(this).val();
        $.ajax({
            type:"POST",
            url:"<?php echo url('Attr/ajaxGetAttr'); ?>",
            data:{type_id:type_id},
            dataType:"json",
            success:function(data){
                // console.log(data);
                var html="";
                $(data).each(function(k,v){
                    if(v.attr_type == 1){
                        // 单选处理
                        html+="<div class='form-group'>";
                        html+="<label class='col-sm-2 control-label no-padding-right'>"+v.attr_name+"</label>";
                        var attrValuesArr=v.attr_values.split(",");
                        html+="<div class='col-sm-6'><a class='abtn' onclick='addrow(this);' href='#'>[+]</a>";
                        html+="<select name='goods_attr["+v.id+"][]'>";
                        html+="<option value=''>请选择</option>";
                        for(var i=0; i<attrValuesArr.length; i++){
                            html+="<option value='"+attrValuesArr[i]+"'>"+attrValuesArr[i]+"</option>";
                        }
                        html+="</select>";
                        html+="<input class='form-control price' placeholder='价格' name='attr_price[]' type='text'>";
                        html+="</div></div>";

                    }else{
                        // 唯一处理
                        if(v.attr_values){
                            html+="<div class='form-group'>";
                            html+="<label class='col-sm-2 control-label no-padding-right'>"+v.attr_name+"</label>";
                            var attrValuesArr=v.attr_values.split(",");
                            html+="<div class='col-sm-6'>";
                            html+="<select name=goods_attr["+v.id+"]>";
                            html+="<option value=''>请选择</option>";
                            for(var i=0; i<attrValuesArr.length; i++){
                                html+="<option value='"+attrValuesArr[i]+"'>"+attrValuesArr[i]+"</option>";
                            }
                            html+="</select>";
                            html+="</div></div>";
                        }else{
                            html+="<div class='form-group'>";
                            html+="<label class='col-sm-2 control-label no-padding-right'>"+v.attr_name+"</label>";
                            var attrValuesArr=v.attr_values.split(",");
                            html+="<div class='col-sm-6'>";
                            html+="<input class='form-control price' name=goods_attr["+v.id+"] type='text'>";
                            html+="</div></div>";
                        }
                    }
                });
                $("#attr_list").html(html);
            }
        });
    });
    
    function addrow(o){
        var div=$(o).parent().parent();
        if($(o).html() == '[+]'){
            var newdiv=div.clone();    
            newdiv.find('a').html('[-]');
            // 修改old_attr_price[]为attr_price[]
            newdiv.find(':text').attr('name','attr_price[]');
            // 修改old_goods_attr[8][]为goods_attr[8][]
            var sel=newdiv.find('select');
            var oldname=sel.attr('name');
            var newname=oldname.replace('old_','');
            sel.attr('name',newname);
            div.after(newdiv);
        }else{
            if(confirm('确定要删除该属性吗？')){
                var div=$(o).parent().parent();
                var gaid=div.attr('gaid');
                $.ajax({
                    type:"POST",
                    data:{gaid:gaid},
                    url:"<?php echo url('GoodsAttr/ajaxdelga'); ?>",
                    success:function(data){
                       if(data==1){
                            div.remove(); 
                        }else{
                            alert('删除失败！');
                        }
                    }
                });  
            }
        }
    }

    function addphoto(o){
        var div=$(o).parent().parent();
        if($(o).html() == '[+]'){
            var newdiv=div.clone();    
            newdiv.find('a').html('[-]');
            div.after(newdiv);
        }else{
            div.remove();
        }
    }

    function delrow(o){
        if(confirm('确定要删除该图吗？')){
            var div=$(o).parent().parent();
            var id=div.attr('id');
            $.ajax({
                type:"POST",
                data:{id:id},
                url:"<?php echo url('Goods/ajaxdelpic'); ?>",
                success:function(data){
                   if(data==1){
                        div.remove(); 
                    }else{
                        alert('删除失败！');
                    }
                }
            });  
        }
    }

    </script>

</body></html>