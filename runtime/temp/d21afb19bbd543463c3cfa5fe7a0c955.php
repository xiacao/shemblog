<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:74:"/alidata/www/shemblog/public/../application/index/view/download_index.html";i:1489992446;s:66:"/alidata/www/shemblog/public/../application/index/view/layout.html";i:1490596000;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <title><?php echo $title; ?> - <?php echo $systeminfo['sys_title']; ?></title>
    <meta name="keywords" content="<?php echo $systeminfo['sys_keyword']; ?>" />
    <meta name="description" content="<?php echo $systeminfo['sys_remark']; ?>" />
    <meta name="version" content="v <?php echo $systeminfo['sys_version']; ?>" />
    <meta name="author" content="<?php echo \think\Config::get('auth.author'); ?>"/>
    <!--移动设备优先-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--[if lt IE 9]>
    <script>window.location.href= "<?php echo url('base/ieerror'); ?>";</script>
    <![endif]-->
    <link rel="stylesheet" href="home_css/bootstrap.css?v=<?php echo $systeminfo['sys_version']; ?>" />
    <link rel="stylesheet" href="home_css/my.css?v=<?php echo $systeminfo['sys_version']; ?>" />
    <link rel="stylesheet" href="//at.alicdn.com/t/font_1477105914_3430886.css">

    <script src="home_js/jquery-1.10.1.min.js" ></script>
</head>
<body>
<!--顶部开始-->
<div class="top-bg">
    <div class="container">
        <div class="top-l"><a class="from"><?php echo getOs(); ?></a></div>
        <div class="top-r">
            <?php if(empty(\think\Session::get('qq.nick')) || (\think\Session::get('qq.nick') instanceof \think\Collection && \think\Session::get('qq.nick')->isEmpty())): ?>
                <span class="from qqlogin" data-url="<?php echo url('Base/login'); ?>" data-callback="<?php echo url('Base/callback'); ?>" style="cursor: pointer">QQ访问</span>
            <?php else: ?>
                <?php echo \think\Session::get('qq.nick'); ?> <a class='from' href="<?php echo url('Base/qqout'); ?>">退出</a>
            <?php endif; ?>
        </div>
    </div>
</div>
<!--顶部结束-->

<div class="container">

    <!--头部开始-->
    <div class="row header">
        <div class="col-lg-4 col-md-4 header-logo">
            <a title="<?php echo \think\Config::get('NAME'); ?>" href="<?php echo url('Index/index'); ?>"><img src="home_img/icon/logo.png" /></a>
            <h5 class="hidden-xs"><?php echo $systeminfo['sys_title2']; ?></h5>
        </div>
        <div class="header-menu col-lg-5 col-md-5 col-xs-12">
            <nav class="navbar navbar-default">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">导航</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand visible-xs" href="#">博客导航</a>
                </div>
                <div class="collapse navbar-collapse menu" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <?php if(is_array($menuinfo) || $menuinfo instanceof \think\Collection): $i = 0; $__LIST__ = $menuinfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$m): $mod = ($i % 2 );++$i;if(empty($m['child']) || ($m['child'] instanceof \think\Collection && $m['child']->isEmpty())): ?>
                            <li class="<?php echo checkmenu($m['menu_url']); ?>"><a href="<?php echo url($m['menu_url']); ?>"><?php echo $m['menu_name']; ?></a></li>
                            <?php else: ?>
                            <li class="dropdown <?php echo checkmenu($m['menu_url']); ?>">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" role="button" aria-expanded="false"><?php echo $m['menu_name']; ?>&nbsp;&nbsp;<span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <?php if(is_array($m['child']) || $m['child'] instanceof \think\Collection): $i = 0; $__LIST__ = $m['child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$m2): $mod = ($i % 2 );++$i;?><li><a href="<?php echo url($m2['menu_url'],['id'=>$m2['menu_id']]); ?>" ><i class="icon-ok-sign"></i> <?php echo $m2['menu_name']; ?></a></li>
                                        <li class="divider"></li>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </ul>
                            </li>
                            <?php endif; endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                    <div class="menu-bar"></div>
                    <div class="menu-clean"></div>
                </div>
            </nav>
        </div>
    </div>
    <!--头部结束-->
    <div class="row aerousel">

        
</div>
</div>
<div class="links-head-ban">
    <div class="links-head">
        <h3><i class="iconfont icon-links" style="font-size: 50px;"></i></h3>
        <h5><?php echo \think\Config::get('auth.blogname'); ?>资源区</h5>
        <p>博客资源整理来源于自己原创或网络收集……</p>
        <p>如有侵权请在留言板留言，或发送邮件至admin@loveteemo.com</p>
    </div>
</div>

<div class="container">
    <div class="row aerousel">
        <div class="resoure">
            <?php if(is_array($downdata) || $downdata instanceof \think\Collection): $i = 0; $__LIST__ = $downdata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$down): $mod = ($i % 2 );++$i;?>
                <div class="col-md-4 text-center">
                    <a href="<?php echo url('Download/info',['id'=>$down['art_id']]); ?>">
                    <div class="thumbnail clearfix">
                        <div class="col-md-12" style="padding: 15px;border-bottom: 1px solid #D7D7D7;"><?php echo $down['art_title']; ?></div>
                        <div class="col-md-12" style="padding: 10px;">
                            <img height="166" src="<?php echo $down['art_img']; ?>" alt="<?php echo $down['art_title']; ?>">
                        </div>
                    </div>
                    </a>
                </div>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
    </div>
</div>


        <div class="col-md-8 row-left index">
            
        </div>
        <div class="col-md-4 row-right index">
            
        </div>
    </div>
</div>

<!--底部开始-->
<div class="container-foot">
    <div class="container foot">
        <div class="row foot-margin">
            <div class="col-md-3 ">
                <h4>程序相关</h4>
                <p class="foot-box">
                    <i class="iconfont icon-group"></i>&nbsp;群：&nbsp;<a href="<?php echo \think\Config::get('auth.qqjoin'); ?>" target="_blank" class="foot-my">
                    <strong><?php echo \think\Config::get('auth.qqgroup'); ?></strong>
                </a>
                    <span class="foot-box-r">
						<i class="iconfont icon-comment"></i>&nbsp;
                        <a href="<?php echo \think\Config::get('auth.baiduurl'); ?>" target="_blank" class="foot-my">邀你点评</a>
                    </span>
                </p>
                <p class="foot-box">
                    <i class="iconfont icon-program"></i>&nbsp;程序：&nbsp;<?php echo \think\Config::get('auth.blogname'); ?>
                    <span class="foot-box-r">
						<i class="iconfont icon-version"></i>&nbsp;版本：&nbsp;Beta <?php echo $systeminfo['sys_version']; ?>
                    </span>
                </p>
                <p class="foot-box">
                    <i class="iconfont icon-framework"></i>&nbsp;框架：&nbsp;<?php echo \think\Config::get('auth.framework'); ?>
                    <span class="foot-box-r">
						<i class="iconfont icon-author"></i>&nbsp;作者：&nbsp;<?php echo \think\Config::get('auth.author'); ?>
                    </span>
                </p>
                <p class="foot-box">
                    源码声明：&nbsp;请参考&nbsp;
                    <a href="<?php echo \think\Config::get('auth.docurl'); ?>">使用手册</a>
                </p>
            </div>
            <div class="col-md-3 hidden-xs">
                <h4>程序统计</h4>
                <p class="foot-box">
                    文章：&nbsp;<?php echo (isset($footdata['artnums']) && ($footdata['artnums'] !== '')?$footdata['artnums']:"0"); ?> 篇
                    <span class="foot-box-r">
                        评论：&nbsp;<?php echo (isset($footdata['artcommentnums']) && ($footdata['artcommentnums'] !== '')?$footdata['artcommentnums']:"0"); ?> 条
                    </span>
                </p>
                <p class="foot-box">
                    建站：&nbsp;<?php echo getDay($systeminfo['sys_createtime']); ?> 天
                    <span class="foot-box-r">
                        留言：&nbsp;<?php echo (isset($footdata['commentnums']) && ($footdata['commentnums'] !== '')?$footdata['commentnums']:"0"); ?> 条
                    </span>
                </p>
                <p class="foot-box">
                    访问：&nbsp;<?php echo (isset($systeminfo['sys_hits']) && ($systeminfo['sys_hits'] !== '')?$systeminfo['sys_hits']:"0"); ?> 次
                    <span class="foot-box-r">
                        友链：&nbsp;<?php echo (isset($footdata['links']) && ($footdata['links'] !== '')?$footdata['links']:"0"); ?> 条
                    </span>
                </p>

            </div>

            <div class="col-md-3 hidden-xs">
                <h4>推荐文章</h4>
                <?php if(is_array($footdata['articles']) || $footdata['articles'] instanceof \think\Collection): $i = 0; $__LIST__ = $footdata['articles'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$art): $mod = ($i % 2 );++$i;?>
                <p class="foot-box-art">
                    <i class="iconfont icon-comment"></i>&nbsp;<a href="<?php echo url('Article/index',['id'=>$art['art_id']]); ?>" title="<?php echo $art['art_title']; ?>"><?php echo $art['art_title']; ?></a>
                </p>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
            <div class="col-md-3 hidden-xs">
                <h4>资源分享</h4>
                <?php if(is_array($footdata['download']) || $footdata['download'] instanceof \think\Collection): $i = 0; $__LIST__ = $footdata['download'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$down): $mod = ($i % 2 );++$i;?>
                <p class="foot-box-art">
                    <i class="iconfont icon-comment"></i>&nbsp;<a href="<?php echo url('Download/info',['id'=>$down['art_id']]); ?>" title="<?php echo $down['art_title']; ?>"><?php echo $down['art_title']; ?></a>
                </p>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
        </div>
        <div class="row bottom">
            <div class="col-md-6 col-sm-5 bottom-left">
                <?php echo $systeminfo['sys_copy']; ?>
            </div>
            <div class="col-md-6 col-sm-7 bottom-right hidden-xs">
                <?php echo $systeminfo['sys_footer']; ?>&nbsp;|&nbsp;<?php echo $systeminfo['sys_icp']; ?>
            </div>
        </div>
    </div>
</div>
<!--底部结束-->

<!--返回顶部-->
<div class="toTop hidden-xs" style="display: none;">
    <span class="glyphicon glyphicon-chevron-up toTop-img"></span>
</div>
<!--返回顶部-->
<script src="com_layer/layer.js"></script>
<script src="home_js/bootstrap.js"></script>
<script src="home_js/common.js"></script>
</body>
</html>