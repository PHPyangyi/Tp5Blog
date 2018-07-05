<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:65:"C:\wamp\www\Tp5Blog\public/../application/admin\view\conf\lst.htm";i:1530763893;s:69:"C:\wamp\www\Tp5Blog\public/../application/admin\view\public\title.htm";i:1530697780;s:67:"C:\wamp\www\Tp5Blog\public/../application/admin\view\public\top.htm";i:1530621300;s:68:"C:\wamp\www\Tp5Blog\public/../application/admin\view\public\left.htm";i:1530697476;}*/ ?>
<!DOCTYPE html>
<html><head>
    <meta charset="utf-8">

    <title>YnagBlog后台</title>

<meta name="description" content="Dashboard">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<!--Basic Styles-->
<link href="__ADMIN__/style/bootstrap.css" rel="stylesheet">
<link href="__ADMIN__/style/font-awesome.css" rel="stylesheet">
<link href="__ADMIN__/style/weather-icons.css" rel="stylesheet">

<!--Beyond styles-->
<link id="beyond-link" href="__ADMIN__/style/beyond.css" rel="stylesheet" type="text/css">
<link href="__ADMIN__/style/demo.css" rel="stylesheet">
<link href="__ADMIN__/style/typicons.css" rel="stylesheet">
<link href="__ADMIN__/style/animate.css" rel="stylesheet">

    
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
                        <img src="__ADMIN__/images/logo.png" alt="">

                    </small>

                </a>

                <a href="http://localhost/Tp5Blog/public/" class="navbar-brand" style="text-indent: 80px;line-height: 38px;">
                   [去首页]

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
                                    <img src="__ADMIN__/images/12.png">
                                </div>
                                <section>
                                    <h2><span class="profile"><span><?php echo \think\Session::get('username'); ?></span></span></h2>
                                </section>
                            </a>
                            <!--Login Area Dropdown-->
                            <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                <li class="username"><a>David Stevenson</a></li>
                                <li class="dropdown-footer">
                                    <a href="<?php echo url('login/logout'); ?>">
                                        退出登录
                                    </a>
                                </li>
                                <li class="dropdown-footer">
                                    <a href="<?php echo url('manage/edit',array('id'=>\think\Request::instance()->session('id'))); ?>">
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
        <?php if(strstr(session('premission'),'Manage')) { ?>
        <li <?php if($con == 'Manage'): ?> class="open" <?php endif; ?>>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-user"></i>
                <span class="menu-text">管理员管理</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('manage/lst'); ?>">
                                    <span class="menu-text">
                                        管理列表                                    </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>
        <?php }if(strstr(session('premission'),'Level')) { ?>
        <li <?php if($con == 'Level'): ?> class="open" <?php endif; ?>>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-users"></i>
                <span class="menu-text">等级管理</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('level/lst'); ?>">
                                    <span class="menu-text">
                                        等级列表                                    </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>
        <?php }if(strstr(session('premission'),'Article')) { ?>
        <li <?php if($con == 'Article'): ?> class="open" <?php endif; ?>>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-file-text"></i>
                <span class="menu-text">文章管理</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('article/lst'); ?>">
                                    <span class="menu-text">
                                        文章列表                                    </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>
        <?php } if(strstr(session('premission'),'Comment')) { ?>
        <li <?php if($con == 'Comment'): ?> class="open" <?php endif; ?>>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-clipboard"></i>
                <span class="menu-text">评论管理</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('comment/lst'); ?>">
                                    <span class="menu-text">
                                        评论列表                                    </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>
        <?php } if(strstr(session('premission'),'Contact')) { ?>
        <li <?php if($con == 'Contact'): ?> class="open" <?php endif; ?>>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-comment-o"></i>
                <span class="menu-text">消息管理 (<?php echo $num; ?>)</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('contact/lst'); ?>">
                                    <span class="menu-text">
                                        消息列表                                    </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>
        <?php } if(strstr(session('premission'),'Jurisdiction')) { ?>
        <li <?php if($con == 'Jurisdiction'): ?> class="open" <?php endif; ?>>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-lock"></i>
                <span class="menu-text">权限管理</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('jurisdiction/lst'); ?>">
                                    <span class="menu-text">
                                        权限列表                                    </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>
        <?php } if(strstr(session('premission'),'About')) { ?>
        <li <?php if($con == 'About'): ?> class="open" <?php endif; ?>>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-file"></i>
                <span class="menu-text">关于我</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('about/lst'); ?>">
                                    <span class="menu-text">
                                        关于编辑                                    </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>
        <?php } if(strstr(session('premission'),'About')) { ?>
        <li <?php if($con == 'Conf'): ?> class="open" <?php endif; ?>>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-sun-o"></i>
                <span class="menu-text">系统配置</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('conf/lst'); ?>">
                                    <span class="menu-text">
                                        配置编辑                                    </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>
        <?php } ?>


    </ul>
</div>
                <!-- /Sidebar Menu -->
            </div>
            <!-- /Page Sidebar -->
            <!-- Page Content -->
            <div class="page-content">
                <!-- Page Breadcrumb -->
                <div class="page-breadcrumbs">
                    <ul class="breadcrumb">
                                        <li>
                        <a href="#">系统</a>
                    </li>
                                        <li>
                        <a href="<?php echo url('lst'); ?>">配置列表</a>
                    </li>
                                        <li class="active">管理配置</li>
                                        </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">

                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-xs-12">
                            <div class="widget">
                                <div class="widget-header bordered-bottom bordered-blue">
                                    <span class="widget-caption">配置管理</span>
                                </div>
                                <div class="widget-body">
                                    <div id="horizontal-form">
                                        <form class="form-horizontal" role="form" action="" method="post"  enctype="multipart/form-data" >


                                            <div class="form-group">
                                                <label for="username" class="col-sm-2 control-label no-padding-right">前台网站名称：</label>
                                                <div class="col-sm-6">
                                                    <input class="form-control"  placeholder="" name="webname"  type="text" value="<?php echo $conf['webname']; ?>">
                                                </div>
                                                <p class="help-block col-sm-4 red">(*不得大于10位)</p>
                                            </div>

                                            <div class="form-group">
                                                <label for="username" class="col-sm-2 control-label no-padding-right">前台log：</label>
                                                <div class="col-sm-6">
                                                    <input   placeholder=""   type="file" id="log"  name="logs">
                                                    <input type="text" name="log" value="<?php echo $conf['log']; ?>" id="logs">
                                                </div>
                                                <p class="help-block col-sm-4 red">(img)</p>
                                            </div>

                                            <div class="form-group">
                                                <label for="username" class="col-sm-2 control-label no-padding-right">前台背景图片：</label>
                                                <div class="col-sm-6">
                                                    <input   placeholder="" name="backgrounds"  type="file"  class="file" id="bg">
                                                    <input type="text" name="background" value="<?php echo $conf['background']; ?>" id="backgrounds">
                                                </div>
                                                <p class="help-block col-sm-4 red">(img)</p>
                                            </div>

                                            <div class="form-group">
                                                <label for="username" class="col-sm-2 control-label no-padding-right">前台底部关于：</label>
                                                <div class="col-sm-6">
                                                    <textarea  name="fabout"  class="form-control"  ><?php echo $conf['fabout']; ?></textarea>
                                                </div>
                                                <p class="help-block col-sm-4 red">(*必填)</p>
                                            </div>

                                            <div class="form-group">
                                                <label for="username" class="col-sm-2 control-label no-padding-right">前台底部联系：</label>
                                                <div class="col-sm-6">
                                                    <textarea  name="fcontact"  class="form-control"  ><?php echo $conf['fcontact']; ?></textarea>
                                                </div>
                                                <p class="help-block col-sm-4 red">(*必填)</p>
                                            </div>

                                            <div class="form-group">
                                                <label for="username" class="col-sm-2 control-label no-padding-right">前台文章显示条数：</label>
                                                <div class="col-sm-6">
                                                    <input class="form-control"  placeholder="" name="article"  type="text" value="<?php echo $conf['article']; ?>">
                                                </div>
                                                <p class="help-block col-sm-4 red">(*必填)</p>
                                            </div>

                                            <div class="form-group">
                                                <label for="username" class="col-sm-2 control-label no-padding-right">评论显示条数：</label>
                                                <div class="col-sm-6">
                                                    <input class="form-control"  placeholder="" name="comment"  type="text" value="<?php echo $conf['comment']; ?>">
                                                </div>
                                                <p class="help-block col-sm-4 red">(*必填)</p>
                                            </div>


                                            <div class="form-group">
                                                <label for="username" class="col-sm-2 control-label no-padding-right">精选文章显示条数：</label>
                                                <div class="col-sm-6">
                                                    <input class="form-control"  placeholder="" name="rj"  type="text" value="<?php echo $conf['rj']; ?>">
                                                </div>
                                                <p class="help-block col-sm-4 red">(*必填)</p>
                                            </div>

                                            <div class="form-group">
                                                <label for="username" class="col-sm-2 control-label no-padding-right">相关文章显示条数：</label>
                                                <div class="col-sm-6">
                                                    <input class="form-control"  placeholder="" name="rx"  type="text" value="<?php echo $conf['rx']; ?>">
                                                </div>
                                                <p class="help-block col-sm-4 red">(*必填)</p>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-offset-2 col-sm-10">
                                                    <button type="submit" class="btn btn-default">修改数据</button>
                                                </div>
                                            </div>
                                        </form>
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
    <script src="__ADMIN__/style/jquery_002.js"></script>
    <script src="__ADMIN__/style/bootstrap.js"></script>
    <script src="__ADMIN__/style/jquery.js"></script>
    <!--Beyond Scripts-->
    <script src="__ADMIN__/style/beyond.js"></script>
    <script src="__ADMIN__/pekeUpload/js/pekeUpload.js"></script>
    <script>
        $("#log").pekeUpload({
            url:'<?php echo url("log"); ?>',
            btnText:'上传img',
            onFileSuccess:function (file,data) {
                    $('#logs').val(data['filename'])
            }
        });

        $("#bg").pekeUpload({
            url:'<?php echo url("background"); ?>',
            btnText:'上传img',
            onFileSuccess:function (file,data) {
                $('#backgrounds').val(data['filename'])
            }
        });

    </script>


</body></html>