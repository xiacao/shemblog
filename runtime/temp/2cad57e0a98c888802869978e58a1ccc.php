<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:72:"D:\wamp64\www\shemblog\public/../application/index\view\about_index.html";i:1532140212;s:67:"D:\wamp64\www\shemblog\public/../application/index\view\layout.html";i:1532181791;}*/ ?>
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
    <div class="row header" style="margin-bottom:-5px;">
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

        
<ol class="breadcrumb sider-margin">
    <li><a href="<?php echo url('Index/index'); ?>">网站首页</a></li>
    <li class="active">关于博客&nbsp;|&nbsp;关于我</li>
</ol>


        <div class="col-md-8 row-left index">
            
<div class="about-all">
    <h4>关于我</h4><hr>
    <div class="about">
        <p><img class="image-light about-img thumbnail" src="/static/home/img/my.png"></p>
        <p><strong>姓名</strong>：沈赛</p>
        <p><strong>网名</strong>：shem</p>
        <p><strong>说明</strong> ：2015年开始接触代码-C语言,2016年学习前端,java,<br/>2017年学习了javaweb、php、python,至今快3年了.仍然是一个不折不扣菜鸟,喜欢在网络上寻找存在和分享自己的学习和经验.</p>
        <p><strong>喜欢的话</strong>：我思故我在。</p>
        <p><strong>想工作的岗位</strong>：前端工程师、php工程师、python、大数据。</p>
    </div>
    <div class="about-love">
        <h4>关于shemblog</h4><hr>
        <p><strong>由来</strong>：shemblog原始版本来源于<a href="http://www.loveteemo.com">青春博客</a>，2016年初开始学习前端时就打算搭建自己的网站，当时利用GitHub搭建了几个静态页面，维护起来，很差劲，网速受限。2017年想重新购买域名开始搭建，在学习thinkphp5的过程中已经完成一个简陋的blog系统，当时忙于各种竞赛。暂停了一段时间。2018年，所以的比赛都结束了，钟玉婷、有时间了，开始购买阿里服务器，购买域名，备案。感觉自己之前的博客学习价值有限。索性网站自己找一个自己改，最先找的是<a>老张博客</a>，刚学习它的时候，觉得他该有的功能都有，逻辑清晰，页面也不错。但渐渐发现，其代码整体结构较为不合理，学习价值有限。修改起来有些麻烦，后来随着我的qq互联申请成功。索性还是使用<a href="http://www.loveteemo.com">青春博客</a>。青春博客前台页面很好看，但是本地调试有些问题。因为其前台后台需要qq互联登录，后台没有域名，设置了hosts也不行（qq互联升级了规则，），目前打算在青春博客的基础上，对其进行前后台的修复完善、重构。目前的版本我暂且称之为0.10版本。</p>
        <p><strong>域名</strong>：<a href="http://shem.xin/">http://shem.xin/</a></p>
        <p><strong>创建时间</strong>：<?php echo $systeminfo['sys_createtime']; ?></p>
        <p><strong>评价</strong> ：<a href="<?php echo \think\Config::get('auth.baiduurl'); ?>" target="_blank">邀你点评</a></p>
        <p><strong>框架</strong> ：<a><?php echo \think\Config::get('auth.framework'); ?></a>
        </p><p><strong>语言</strong> ：PHP+MYSQL[utf-8]</p>
        <p><strong>声明</strong> ：非本站提供下载包造成任何损失,与本人无关！程序为开源,请自行修改.碰到问题请进群或者留言告诉我.</p>
        <p><strong>说明</strong> ：本程序为本人自己开发，且为先版本开源[<small style="color: red;">即每个版本比本版本低一个月</small>];喜欢的可以自己下载然后研究.^_^ </p>
        <p>程序组成为前台bootstrap3开发,兼容大部分移动设备,对其他浏览器的兼容未知,欢迎大神对本程序优化,请在可以优化的地方告诉我,我会一直改进的.谢谢！</p>
    </div>
    <div class="about-version">
        <h5>版本</h5>
        <?php if(is_array($verlist) || $verlist instanceof \think\Collection): $i = 0; $__LIST__ = $verlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ver): $mod = ($i % 2 );++$i;?>
        <p><b style="width: 40px;display: block;float: left;margin-right: 10px;"><?php echo $ver['ver_bate']; ?></b><small><?php echo $ver['ver_addtime']; ?></small>  <?php echo $ver['ver_text']; ?></p>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
</div>

        </div>
        <div class="col-md-4 row-right index">
            
            <div class="sider-margin sider-box">
                <div class="sider-search">
                    <div class="input-group sider-search-input">
                        <form action="<?php echo url('Cate/search'); ?>" method="get" class="form-search">
                            <input type="text" class="form-control sider-search-input" placeholder="请输入关键词" name="key">
                            <span class="input-group-btn">
	            	            <button class="btn btn-default btn-search" type="submit"><i class="iconfont icon-search search"></i></button>
	          	            </span>
                        </form>
                    </div>
                </div>
                <div class="sider-follow hidden-xs sider-margin">
                    <a href="<?php echo \think\Config::get('auth.githuburl'); ?>" target="_blank"><i class="iconfont icon-github"></i></a>
                    <a><i class="iconfont icon-weixin" id="weixin"></i></a>
                    <a href="<?php echo \think\Config::get('auth.weibourl'); ?>" target="_blank"><i class="iconfont icon-weibo"></i></a>
                </div>
                <div class="sider-follow-hr hidden-xs"></div>
            </div>
            <div class="sider-margin sider-box">
                <h4><i class="iconfont icon-tags"></i>&nbsp;&nbsp;我的标签</h4>
                <ul class="sider-tag-ul">
                    <?php echo getTags($siderdata['tagslist']); ?>
                </ul>
            </div>
            <div class="sider-box">
                <h4><i class="iconfont icon-shuffle"></i>&nbsp;&nbsp;随机文章</h4>
                <ul class="sider-rand-ul">
                    <?php if(is_array($siderdata['articles']) || $siderdata['articles'] instanceof \think\Collection): $i = 0; $__LIST__ = $siderdata['articles'];if( count($__LIST__)==0 ) : echo "暂无文章" ;else: foreach($__LIST__ as $key=>$siderart): $mod = ($i % 2 );++$i;?>
                        <li>
                            <a href="<?php echo url('Article/index',['id'=>$siderart['art_id']]); ?>" title="<?php echo $siderart['art_title']; ?>" class="sider-rand-img image-light">
                                <img src="<?php echo $siderart['art_img']; ?>" class="article-img" alt="<?php echo $siderart['art_title']; ?>" title="<?php echo $siderart['art_title']; ?>" />
                            </a>
                            <div class="sider-rand-title"><a href="<?php echo url('Article/index',['id'=>$siderart['art_id']]); ?>"><?php echo msubstr($siderart['art_title'],0,15,'utf-8',true); ?></a></div>
                            <div class="sider-rand-remark"><?php echo msubstr(strip_tags($siderart['art_remark']),0,35,'utf-8',true); ?></div>
                        </li>
                    <?php endforeach; endif; else: echo "暂无文章" ;endif; ?>
                </ul>
            </div>
            <div class="sider-box">
                <h4><i class="iconfont icon-review"></i>&nbsp;&nbsp;最新互动</h4>
                <div class="tab"  id="tab">
                    <ul class="nav nav-tabs" >
                        <li class="active"><a href="#art" data-toggle="tab">最新评论</a></li>
                        <li><a href="#contents" data-toggle="tab">最新留言</a></li>
                        <li><a href="#hot" data-toggle="tab">最多点击</a></li>
                    </ul>
                </div>
            </div>
            <div class="sider-box">
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="art">
                        <ul class="sider-content-ul">
                            <?php if(is_array($siderdata['artcomment']) || $siderdata['artcomment'] instanceof \think\Collection): $i = 0; $__LIST__ = $siderdata['artcomment'];if( count($__LIST__)==0 ) : echo "暂无评论" ;else: foreach($__LIST__ as $key=>$siderartcom): $mod = ($i % 2 );++$i;?>
                                <li>
                                    <img src="<?php echo $siderartcom['mem_img']; ?>" class="img-circle img-45"/>
                                    <div class="sider-content-name"><i class="iconfont icon-review"></i>&nbsp;&nbsp;<?php echo $siderartcom['mem_name']; ?></div>
                                    <div class="sider-content-remark">
                                        <?php if($siderartcom['art_down'] == '0'): ?>
                                        &nbsp;&nbsp;<a href="<?php echo url('Article/index',['id'=>$siderartcom['com_artid']]); ?>#<?php echo $siderartcom['com_id']; ?>" title="<?php echo msubstr(strip_tags($siderartcom['com_content']),0,19,'utf-8',true); ?>.." ><?php echo msubstr(strip_tags($siderartcom['com_content']),0,19,'utf-8',true); ?></a>
                                        <?php else: ?>
                                        &nbsp;&nbsp;<a href="<?php echo url('Download/info',['id'=>$siderartcom['com_artid']]); ?>#<?php echo $siderartcom['com_id']; ?>" title="<?php echo msubstr(strip_tags($siderartcom['com_content']),0,19,'utf-8',true); ?>.." ><?php echo msubstr(strip_tags($siderartcom['com_content']),0,19,'utf-8',true); ?></a>
                                        <?php endif; ?>
                                    </div>
                                </li>
                            <?php endforeach; endif; else: echo "暂无评论" ;endif; ?>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="contents">
                        <ul class="sider-content-ul">
                            <?php if(is_array($siderdata['comment']) || $siderdata['comment'] instanceof \think\Collection): $i = 0; $__LIST__ = $siderdata['comment'];if( count($__LIST__)==0 ) : echo "暂无留言" ;else: foreach($__LIST__ as $key=>$sidercom): $mod = ($i % 2 );++$i;?>
                            <li>
                                <img src="<?php echo $sidercom['mem_img']; ?>" class="img-circle img-45"/>
                                <div class="sider-content-name"><i class="iconfont icon-review"></i>&nbsp;&nbsp;<?php echo $sidercom['mem_name']; ?></div>
                                <div class="sider-content-remark">
                                    &nbsp;&nbsp;<a href="<?php echo url('Comment/index'); ?>#<?php echo $sidercom['com_id']; ?>" title="<?php echo msubstr(strip_tags($sidercom['com_content']),0,19,'utf-8',true); ?>.." ><?php echo msubstr(strip_tags($sidercom['com_content']),0,19,'utf-8',true); ?></a>
                                </div>
                            </li>
                            <?php endforeach; endif; else: echo "暂无留言" ;endif; ?>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="hot">
                        <ul class="sider-hot-ul">
                            <?php if(is_array($siderdata['hits']) || $siderdata['hits'] instanceof \think\Collection): $i = 0; $__LIST__ = $siderdata['hits'];if( count($__LIST__)==0 ) : echo "暂无文章" ;else: foreach($__LIST__ as $key=>$siderhits): $mod = ($i % 2 );++$i;?>
                                <li><i class="iconfont icon-hit"></i>&nbsp;&nbsp;<a href="<?php echo url('Article/index',['id'=>$siderhits['art_id']]); ?>" ><?php echo mb_substr($siderhits['art_title'],0,25,'utf-8'); ?></a>(<?php echo $siderhits['art_hit']; ?>)</li>
                            <?php endforeach; endif; else: echo "暂无文章" ;endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
            
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
                    <i class="iconfont icon-group"></i>&nbsp;qq：&nbsp;<a href="<?php echo \think\Config::get('auth.qqjoin'); ?>" target="_blank" class="foot-my">
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
						<i class="iconfont icon-version"></i>&nbsp;版本：&nbsp; <?php echo $systeminfo['sys_version']; ?>
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