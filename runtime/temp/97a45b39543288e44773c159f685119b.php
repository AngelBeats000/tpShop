<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:79:"D:\phpstudy\PHPTutorial\WWW\shop\public/../application/admin\view\user\list.htm";i:1535422872;s:80:"D:\phpstudy\PHPTutorial\WWW\shop\public/../application/admin\view\common\top.htm";i:1508129371;s:81:"D:\phpstudy\PHPTutorial\WWW\shop\public/../application/admin\view\common\left.htm";i:1561206852;}*/ ?>
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
                                        <li class="active">会员管理</li>
                                        </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">
                    
<button type="button" tooltip="添加会员" class="btn btn-sm btn-azure btn-addon" onClick="javascript:window.location.href = '<?php echo url('user/add'); ?>'"> <i class="fa fa-plus"></i> Add
</button>
<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
            <div class="widget-body">
                <div class="flip-scroll">
                    <table class="table table-bordered table-hover">
                        <thead class="">
                            <tr>
                                <th class="text-center" width="8%">ID</th>
                                <th class="text-center">用户名</th>
                                <th class="text-center">邮箱</th>
                                <th class="text-center">电话</th>
                                <th>验证状态</th>
                                <th class="text-center" width="8%">积分</th>
                                <th class="text-center" width="8%">会员级别</th>
                                <th class="text-center" width="14%">操作</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(is_array($userRes) || $userRes instanceof \think\Collection || $userRes instanceof \think\Paginator): $i = 0; $__LIST__ = $userRes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$user): $mod = ($i % 2 );++$i;?>
                                <tr>
                                    <td align="center"><?php echo $user['id']; ?></td>
                                    <td align="center"><?php echo $user['username']; ?></td>
                                    <td align="center"><?php if($user['email']): ?> <?php echo $user['email']; else: ?> 暂未填写 <?php endif; ?></td>
                                    <td align="center"><?php if($user['mobile_phone']): ?> <?php echo $user['mobile_phone']; else: ?> 暂未填写 <?php endif; ?></td>
                                    <td align="center">
                                        <?php if($user['register_type'] == 1): ?>
                                            手机已验证
                                        <?php elseif($user['register_type'] == 0): ?>
                                            邮箱已验证
                                        <?php else: ?>
                                            手机邮箱均已验证
                                        <?php endif; ?>
                                    </td>
                                    <td align="center"><?php echo $user['points']; ?></td>
                                    <td align="center"><?php echo $user['level_name']; ?></td>
                                    <td align="center">
                                        <a href="<?php echo url('edit',array('id'=>$user['id'])); ?>" class="btn btn-primary btn-sm shiny">
                                            <i class="fa fa-edit"></i> 编辑
                                        </a>
                                        <a href="#" onClick="warning('确实要删除吗', '<?php echo url('del',array('id'=>$user['id'])); ?>')" class="btn btn-danger btn-sm shiny">
                                            <i class="fa fa-trash-o"></i> 删除
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </tbody>
                    </table>
                </div>
                <div style="padding-top:10px; text-align:right;">
                <?php echo $userRes->render(); ?>
                </div>
                <div>
                	                </div>
            </div>
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
    


</body></html>