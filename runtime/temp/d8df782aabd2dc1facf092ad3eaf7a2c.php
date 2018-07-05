<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:68:"C:\wamp\www\Tp5Blog\public/../application/index\view\test\index.html";i:1530758770;s:70:"C:\wamp\www\Tp5Blog\public/../application/index\view\common\title.html";i:1530706197;s:71:"C:\wamp\www\Tp5Blog\public/../application/index\view\common\header.html";i:1530703030;s:70:"C:\wamp\www\Tp5Blog\public/../application/index\view\common\right.html";i:1530758820;s:71:"C:\wamp\www\Tp5Blog\public/../application/index\view\common\footer.html";i:1530705031;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
<title><?php echo $conf['webname']; ?></title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width">

<!-- Bootstrap styles -->
<link rel="stylesheet" href="__INDEX__/css/bootstrap.min.css">

<!-- Font-Awesome -->
<link rel="stylesheet" href="__INDEX__/css/font-awesome/css/font-awesome.min.css">

<!-- Google Webfonts -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600|PT+Serif:400,400italic' rel='stylesheet' type='text/css'>

<!-- Styles -->
<link rel="stylesheet" href="__INDEX__/css/style.css" id="theme-styles">

<!--[if lt IE 9]>
<script src="__INDEX__/js/respond.js"></script>
<![endif]-->

<style>
    body{
        background: url("../../../../../Tp5Blog/public/uploads/<?php echo $conf['background']; ?>");
    }

</style>
    <style>
        body{
            background: url("../../../../../../../Tp5Blog/public/uploads/<?php echo $conf['background']; ?>");
        }

    </style>

</head>
<body>
<header>
    <div class="widewrapper masthead">
        <div class="container">
            <a href="index.html" id="logo">
                <img src="\Tp5Blog\public\uploads\<?php echo $conf['log']; ?>" alt="clean Blog">
            </a>

            <div id="mobile-nav-toggle" class="pull-right">
                <a href="#" data-toggle="collapse" data-target=".clean-nav .navbar-collapse">
                    <i class="fa fa-bars"></i>
                </a>
            </div>

            <nav class="pull-right clean-nav">
                <div class="collapse navbar-collapse">
                    <ul class="nav nav-pills navbar-nav">

                        <li>
                            <a href="http://localhost/Tp5Blog/public/">首页</a>
                        </li>
                        <li>
                            <a href="<?php echo url('about/index'); ?>">关于</a>
                        </li>
                        <li>
                            <a href="<?php echo url('contact/index'); ?>">联系</a>
                        </li>
                    </ul>
                </div>
            </nav>

        </div>
    </div>

    <div class="widewrapper subheader">
        <div class="container">
            <div class="clean-breadcrumb">
                <a href="#">博客</a>
            </div>

            <div class="clean-searchbox">
                <form action="#" method="get" accept-charset="utf-8">
                    <input class="searchfield" id="searchbox" type="text" placeholder="Search">
                    <button class="searchbutton" type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</header>

<div class="widewrapper main">
    <div class="container">
        <div class="row">
            <div class="col-md-8 blog-main">
                <article class="blog-post">
                    <header>

                        <div class="lead-image">
                            <img src="img/single-post.jpg" alt="" class="img-responsive">

                        </div>
                    </header>
                    <div class="body">
                        <h1><?php echo $details['title']; ?></h1>
                        <div class="meta">
                            <i class="fa fa-user"></i><?php echo $details['author']; ?> <i class="fa fa-calendar"></i><?php echo date('Y-m-d H:i:s',$details['date']); ?><i class="fa fa-comments"></i><span class="data"><a href="#comments"><?php echo $num; ?> 条评论</a></span>
                        </div>
                        <?php echo $details['content']; ?>
                    </div>
                </article>


                <aside class="comments" id="comments">
                    <hr>

                    <h2><i class="fa fa-comments"></i> <?php echo $num; ?> 条评论</h2>

                    <?php if(is_array($comment) || $comment instanceof \think\Collection || $comment instanceof \think\Paginator): $i = 0; $__LIST__ = $comment;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$c): $mod = ($i % 2 );++$i;?>
                    <article class="comment">
                        <header class="clearfix">
                            <div class="meta">
                                <h3><a href="#"><?php echo $c['name']; ?></a></h3>
                                <span class="date">
                                      <?php echo date('Y-m-d H:i:s',$c['date']); ?>
                                    </span>

                            </div>
                        </header>
                        <div class="body">
                                    <?php echo $c['comment']; ?>
                        </div>
                    </article>
                    <?php endforeach; endif; else: echo "" ;endif; ?>





                <aside class="create-comment" id="create-comment">
                    <hr>

                    <h2><i class="fa fa-pencil"></i> 发表评论</h2>

                    <form action="#" method="post" accept-charset="utf-8">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="name" id="comment-name" placeholder="你的name" class="form-control input-lg">
                            </div>
                            <div class="col-md-6">
                                <input type="email" name="email" id="comment-email" placeholder="电子邮箱" class="form-control input-lg">
                            </div>
                        </div>


                        <textarea rows="10" name="comment" id="comment-body" placeholder="你的评论" class="form-control input-lg"></textarea>

                        <div class="buttons clearfix">
                            <button type="submit" class="btn btn-xlarge btn-clean-one">Submit</button>
                        </div>
                    </form>
                </aside>
            </div>
            

<aside class="col-md-4 blog-aside">

    <div class="aside-widget">
        <header>
            <h3>精选文章</h3>
        </header>
        <div class="body">
            <ul class="clean-list">
                 <?php if(is_array($nivo) || $nivo instanceof \think\Collection || $nivo instanceof \think\Paginator): $i = 0; $__LIST__ = $nivo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$n): $mod = ($i % 2 );++$i;?>
                <li><a href="<?php echo url('Test/index',['id'=>$n['id']]); ?>"><?php echo $n['title']; ?></a></li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
    </div>

    <div class="aside-widget">
        <header>
            <h3>相关文章</h3>
        </header>
        <div class="body">
            <ul class="clean-list">
                <?php if(is_array($relevant) || $relevant instanceof \think\Collection || $relevant instanceof \think\Paginator): $i = 0; $__LIST__ = $relevant;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$r): $mod = ($i % 2 );++$i;?>
                <li><a href="<?php echo url('Test/index',['id'=>$r['id']]); ?>"><?php echo $r['title']; ?></a></li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
    </div>


</aside>
</div>
</div>
</div>


<footer>
    <div class="widewrapper footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 footer-widget">
                    <h3> <i class="fa fa-user"></i>关于</h3>

                    <?php echo $conf['fabout']; ?>
                </div>

                <div class="col-md-4 footer-widget">
                    <h3> <i class="fa fa-pencil"></i> 最近贴文 </h3>
                    <ul class="clean-list">
                        <?php if(is_array($recent) || $recent instanceof \think\Collection || $recent instanceof \think\Paginator): $i = 0; $__LIST__ = $recent;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$r): $mod = ($i % 2 );++$i;?>
                        <li><a href="<?php echo url('details/index',['id'=>$r['id']]); ?>"><?php echo $r['title']; ?></a></li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>

                <div class="col-md-4 footer-widget">
                    <h3> <i class="fa fa-envelope"></i>联系我</h3>

                   <?php echo $conf['fcontact']; ?>
                    <div class="footer-widget-icon">
                        <i class="fa fa-facebook"></i><i class="fa fa-twitter"></i><i class="fa fa-google"></i>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="widewrapper copyright">
        Copyright &copy; 2018.Company name All rights reserved.<a target="_blank" href="#">&#x7F51;&#x9875;&#x6A21;&#x677F;</a>
    </div>
</footer>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/modernizr.js"></script>

</body>
</html>