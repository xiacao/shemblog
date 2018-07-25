<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:74:"D:\wamp64\www\shemblog\public/../application/index\view\comment_index.html";i:1532133089;s:67:"D:\wamp64\www\shemblog\public/../application/index\view\layout.html";i:1532508523;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <title><?php echo $title; ?> - <?php echo $systeminfo['sys_title']; ?></title>
    <meta name="keywords" content="<?php echo $systeminfo['sys_keyword']; ?>" >
    <meta name="description" content="<?php echo $systeminfo['sys_remark']; ?>" >
    <meta name="version" content="v <?php echo $systeminfo['sys_version']; ?>" >
    <meta name="author" content="<?php echo \think\Config::get('auth.author'); ?>">
    <!--移动设备优先-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--[if lt IE 9]>
    <script>window.location.href= "<?php echo url('base/ieerror'); ?>";</script>
    <![endif]-->
    <link rel="stylesheet" href="home_css/bootstrap.css?v=<?php echo $systeminfo['sys_version']; ?>" />
    <link rel="stylesheet" href="home_css/my.css?v=<?php echo $systeminfo['sys_version']; ?>" />
    <link rel="stylesheet" href="//at.alicdn.com/t/font_1477105914_3430886.css">
     <link rel="stylesheet" href="home_css/iconfont.css">
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

        
<ol class="breadcrumb">
    <li><a href="<?php echo url('Index/index'); ?>">网站首页</a></li>
    <li class="active">雁过留名&nbsp;|&nbsp;留言板</li>
</ol>


        <div class="col-md-8 row-left index">
            
<?php if(is_array($commentdata) || $commentdata instanceof \think\Collection): $i = 0; $__LIST__ = $commentdata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$comdata): $mod = ($i % 2 );++$i;?>
<div class="media connect" id="<?php echo $comdata['com_id']; ?>">
    <div class="media-left">
        <img src="<?php echo $comdata['mem_img']; ?>" class="media-object img-circle img-50" alt="<?php echo $comdata['mem_name']; ?>"/>
    </div>
    <div class="media-body">
        <div class="fool hidden-xs">#<?php echo $comdata['com_id']; ?></div>
        <p class="media-heading">
            <?php echo $comdata['mem_name']; if($comdata['mem_sex'] == '1'): ?>
            <i class="iconfont icon-boy"></i>
            <?php else: ?>
            <i class="iconfont icon-girl"></i>
            <?php endif; ?>
            <i class="iconfont icon-time"></i>&nbsp;<?php echo getTime($comdata['com_addtime']); ?>&nbsp;&nbsp;
            <a class="from"><?php echo $comdata['com_from']; ?></a>&nbsp;&nbsp;
            <i class="iconfont icon-address"></i>&nbsp;
            <?php echo $comdata['com_city']; ?>
        </p>
        <div class="connect-box"><?php echo $comdata['com_content']; ?></div>
        <?php if($comdata['com_status'] == '1'): ?>
        <hr />
        <div class="media">
            <div class="media-left">
                <a><img class="media-object img-circle img-50" src="home_img/icon/admin.jpg" alt="<?php echo \think\Config::get('auth.adminname'); ?>"></a>
            </div>
            <div class="media-body">
                <p class="media-heading">
                    <i class="iconfont icon-author"></i>&nbsp;<?php echo \think\Config::get('auth.admin'); ?>&nbsp;
                    <i class="iconfont icon-time"></i>&nbsp;<?php echo date('m/d H:i',$comdata['com_rtime']); ?>&nbsp;&nbsp;&nbsp;&nbsp;回复&nbsp;
                    <a>@<?php echo $comdata['mem_name']; ?></a>&nbsp;中说到：
                </p>
                <div class="connect-box"><?php echo $comdata['com_rcontent']; ?></div>
            </div>
        </div>
        <?php endif; ?>
    </div>
</div>
<?php endforeach; endif; else: echo "" ;endif; if(count($commentdata) >= 5): ?>
<div class="more">
    <span class="loadingmore" data-id="0" data-lenth="1" data-url="<?php echo url('Comment/ajaxList'); ?>">加载更多</span>
</div>
<?php endif; ?>
    <?php echo token(); if(!(empty(\think\Session::get('qq.nick')) || (\think\Session::get('qq.nick') instanceof \think\Collection && \think\Session::get('qq.nick')->isEmpty()))): ?>
<span title="QQ昵称" class="qqnick"><i class="iconfont icon-qq"></i><?php echo \think\Session::get('qq.nick'); ?></span>
<?php else: ?>
<div class="empty"></div>
<?php endif; ?>
<div class="blog-edit" id="edit-content"></div>
<button class="btn btn-default btn-add" type="button" data-action="<?php echo url('Comment/add'); ?>" data-artid="0">Ctrl + Enter 快速提交</button>
<link rel="stylesheet" href="com_editor/css/wangEditor.min.css">
<script src="home_js/jquery-1.10.1.min.js"></script>
<script src="com_editor/js/wangEditor.min.js"></script>
<script src="home_js/editor.config.js"></script>
<script>
    $(document).keypress(function(e) {
        if (e.ctrlKey && e.which == 13)
            $(".btn-add").click();
    });
    //=== Blog 评论 ===//
    $(document).on("click",".btn-add",function(){
        var url = $(this).data("action");
        var token = $("input[name='__token__']").val();
        var artid = $(this).data("artid");
        var content = editor.$txt.html();
        content = content.replace(/<.*?>/ig, function (tag) {
            if (tag === '</a>' || tag.indexOf('<a ') === 0 || tag.indexOf('<img ') === 0) {
                return tag;
            } else {
                return '';
            }
        });
        if($.trim(content)==''){
            layer.msg("评论不能为空",{icon:3});
            return false;
        }
        layer.msg('正在加载数据', {icon:16, shade: 0.1, time:0});
        $.ajax({
            type:"post",
            url: url,
            dataType: 'json',
            data: {"token": token,"content": content,"artid":artid},
            success:function(data){
                if(data.err == 0){
                    layer.msg(data.msg,{icon:1});
                    window.location.reload();
                }else if(data.err == 1){
                    layer.msg(data.msg,{icon:0});
                    window.location.reload();
                }else{
                    layer.msg(data.msg,{icon:2});
                }
            },
            error:function(){
                layer.msg('网络错误',{icon:3});
            }
        });
    });
</script>

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
                    <a href="<?php echo \think\Config::get('auth.csdn'); ?>" target="_blank"> <i class="icon iconfont icon-csdn"></i></a>
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