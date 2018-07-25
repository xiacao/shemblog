<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:73:"D:\wamp64\www\shemblog\public/../application/admin\view\system/index.html";i:1532133081;s:67:"D:\wamp64\www\shemblog\public/../application/admin\view\layout.html";i:1532133080;}*/ ?>
<!DOCTYPE html>
<html lang="Zh-cn">
<head>
    <title>LoveTeemo Admin</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="admin_css/bootstrap.min.css" />
    <link rel="stylesheet" href="admin_css/bootstrap-responsive.min.css" />
    <link rel="stylesheet" href="admin_css/loveteemo.main.css" />
    <link rel="stylesheet" href="admin_css/style.css" />
    <link rel="stylesheet" href="admin_css/loveteemo.<?php echo (\think\Cookie::get('color')) ? \think\Cookie::get('color') : 'grey'; ?>.css" class="skin-color" />
    <script src="admin_js/jquery.min.js"></script>
    <script src="com_laydate/laydate.js"></script>
</head>
<body>


<div id="header">
    <h1><a href="<?php echo url('Admin/Index/index'); ?>">LoveTeemo Admin</a></h1>
</div>
<div id="user-nav" class="navbar navbar-inverse">
    <ul class="nav btn-group">
        <li class="btn btn-inverse">
            <a title="" href="javascript:;"><i class="icon icon-user"></i> <span class="text"><?php echo \think\Session::get('qq.nick'); ?></span></a>
        </li>
        <li class="btn btn-inverse cleancache" data-url="<?php echo url('Admin/Auth/clean'); ?>">
            <a title="" href="javascript:;"><i class="icon icon-trash"></i> <span class="text">清空缓存</span></a>
        </li>
        <li class="btn btn-inverse">
            <a title="" href="<?php echo url('Admin/System/index'); ?>"><i class="icon icon-cog"></i> <span class="text">系统设置</span></a>
        </li>
        <li class="btn btn-inverse">
            <a title="" href="javascript:;" data-url="<?php echo url('Admin/Auth/logout'); ?>" class="logout"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a>
        </li>
    </ul>
</div>

<div id="sidebar">
    <a href="#" class="visible-phone"><i class="icon icon-home"></i>仪表板</a>
    <ul>
        <li class="<?php echo adminmenu('Index'); ?>">
            <a href="<?php echo url('Admin/Index/index'); ?>"><i class="icon icon-home"></i> <span>仪表板</span></a>
        </li>
        <li class="<?php echo adminmenu('System'); ?>">
            <a href="<?php echo url('Admin/System/index'); ?>"><i class="icon icon-cog"></i> <span>系统设置</span></a>
        </li>
        <li class="<?php echo adminmenu('Cate'); ?>">
            <a href="<?php echo url('Admin/Cate/index'); ?>"><i class="icon icon-th-list"></i> <span>自定义菜单</span></a>
        </li>
        <li class="<?php echo adminmenu('Banner'); ?>">
            <a href="<?php echo url('Admin/Banner/index'); ?>"><i class="icon icon-resize-vertical"></i> <span>首页幻灯</span></a>
        </li>
        <li class="<?php echo adminmenu('Tip'); ?>">
            <a href="<?php echo url('Admin/Tip/index'); ?>"><i class="icon icon-resize-vertical"></i> <span>首页文字</span></a>
        </li>
        <li class="<?php echo adminmenu('Page'); ?>">
            <a href="<?php echo url('Admin/Page/index'); ?>"><i class="icon icon-file"></i> <span>单页管理</span></a>
        </li>
        <li class="<?php echo adminmenu('Article'); ?>">
            <a href="<?php echo url('Admin/Article/index'); ?>"><i class="icon icon-align-justify"></i> <span>文章列表</span></a>
        </li>
        <li class="<?php echo adminmenu('Comment'); ?>">
            <a href="<?php echo url('Admin/Comment/index'); ?>"><i class="icon icon-share-alt"></i> <span>留言评论</span></a>
        </li>
        <li class="<?php echo adminmenu('Member'); ?>">
            <a href="<?php echo url('Admin/Member/index'); ?>"><i class="icon icon-user"></i> <span>会员列表</span></a>
        </li>
        <li class="<?php echo adminmenu('Link'); ?>">
            <a href="<?php echo url('Admin/Link/index'); ?>"><i class="icon icon-warning-sign"></i> <span>友情链接</span></a>
        </li>
        <li class="<?php echo adminmenu('Version'); ?>">
            <a href="<?php echo url('Admin/Version/index'); ?>"><i class="icon icon-warning-sign"></i> <span>版本控制</span></a>
        </li>
    </ul>
</div>

<div id="style-switcher" data-url="<?php echo url('Admin/Auth/color'); ?>">
    <i class="icon-arrow-left icon-white"></i>
    <span>Style:</span>
    <a href="#grey" style="background-color: #555555;border-color: #aaaaaa;"></a>
    <a href="#blue" style="background-color: #2D2F57;"></a>
    <a href="#red" style="background-color: #673232;"></a>
</div>

<div id="content">
    
<div id="content-header">
    <h1>仪表盘主页</h1>
</div>
<div id="breadcrumb">
    <a href="<?php echo url('Admin/Index/index'); ?>" title="回到首页" class="tip-bottom"><i class="icon-home"></i> 首页</a>
    <a href="#" class="current">仪表盘</a>
</div>

    <div class="container-fluid">
        
<div class="row-fluid">
    <div class="widget-box span12">
        <div class="widget-title">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#tab1">常规设置</a></li>
                <li><a data-toggle="tab" href="#tab2">显示设置</a></li>
                <li><a data-toggle="tab" href="#tab3">邮件设置</a></li>
            </ul>
        </div>
        <div class="widget-content tab-content">
            <div id="tab1" class="tab-pane active">
                <div class="widget-box">
                    <div class="widget-content nopadding ">
                        <form class="form-horizontal" >
                            <div class="control-group">
                                <label class="control-label">网站标题</label>
                                <div class="controls">
                                    <input type="text" name="sys_title" placeholder="请输入Blog名称" value="<?php echo $systeminfo['sys_title']; ?>"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">次级标题</label>
                                <div class="controls">
                                    <input type="text" name="sys_title2" placeholder="请输入Logo旁的二级标题" value="<?php echo $systeminfo['sys_title2']; ?>"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">关键词</label>
                                <div class="controls">
                                    <input type="text" name="sys_keyword" placeholder="请输入网站关键词，SEO用" value="<?php echo $systeminfo['sys_keyword']; ?>"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">注册时间</label>
                                <div class="controls">
                                    <input type="text" name="sys_createtime" id="choosetime" class="laydate-icon" placeholder="请输入注册时间" value="<?php echo $systeminfo['sys_createtime']; ?>"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">备案号</label>
                                <div class="controls">
                                    <input type="text" name="sys_icp" placeholder="请输入ICP备案号" value="<?php echo $systeminfo['sys_icp']; ?>" />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">访问总量</label>
                                <div class="controls">
                                    <input type="text" name="sys_hits" placeholder="请输入网站访问量" value="<?php echo $systeminfo['sys_hits']; ?>"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">版权代码</label>
                                <div class="controls">
                                    <input type="text" name="sys_copy" placeholder="请输入网站版权代码" value="<?php echo $systeminfo['sys_copy']; ?>"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">站点描述</label>
                                <div class="controls">
                                    <textarea name="sys_remark" placeholder="请输入网站描述,SEO用"><?php echo $systeminfo['sys_remark']; ?></textarea>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">统计代码</label>
                                <div class="controls">
                                    <textarea name="sys_footer" placeholder="请输入网站统计代码"><?php echo $systeminfo['sys_footer']; ?></textarea>
                                </div>
                            </div>
                            <div class="form-actions">
                                <button type="button" class="btn btn-primary sysform" data-url="<?php echo url('Admin/System/basics'); ?>">修改</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div id="tab2" class="tab-pane ">
                <div class="widget-box">
                    <div class="widget-content nopadding ">
                        <form class="form-horizontal" >
                            <div class="control-group">
                                <label class="control-label">QQ交流群</label>
                                <div class="controls">
                                    <input type="text" name="qqgroup" placeholder="请输入QQ交流群" value="<?php echo \think\Config::get('auth.qqgroup'); ?>"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">网站口碑</label>
                                <div class="controls">
                                    <input type="text" name="baiduurl" placeholder="请输入网站口碑网址" value="<?php echo \think\Config::get('auth.baiduurl'); ?>"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">QQ进群连接</label>
                                <div class="controls">
                                    <input type="text" name="qqjoin" placeholder="请输入QQ进群连接" value="<?php echo \think\Config::get('auth.qqjoin'); ?>"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">GIT主页</label>
                                <div class="controls">
                                    <input type="text" name="githuburl" placeholder="请输入注册时间" value="<?php echo \think\Config::get('auth.githuburl'); ?>"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">微博主页</label>
                                <div class="controls">
                                    <input type="text" name="weibourl" placeholder="请输入微博主页" value="<?php echo \think\Config::get('auth.weibourl'); ?>" />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">程序名称</label>
                                <div class="controls">
                                    <input type="text" name="blogname" placeholder="请输入程序名称,用于底部显示" value="<?php echo \think\Config::get('auth.blogname'); ?>"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">程序框架</label>
                                <div class="controls">
                                    <input type="text" name="framework" placeholder="请输入程序框架,用于底部显示" value="<?php echo \think\Config::get('auth.framework'); ?>"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">程序作者</label>
                                <div class="controls">
                                    <input type="text" name="author" placeholder="请输入程序作者,用于底部显示" value="<?php echo \think\Config::get('auth.author'); ?>"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">文档地址</label>
                                <div class="controls">
                                    <input type="text" name="docurl" placeholder="请输入程序文章,用于底部显示" value="<?php echo \think\Config::get('auth.docurl'); ?>"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">管理员名称</label>
                                <div class="controls">
                                    <input type="text" name="adminname" placeholder="请输入管理员名称,用于回复显示" value="<?php echo \think\Config::get('auth.adminname'); ?>"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">发布文章默认点击</label>
                                <div class="controls">
                                    <input type="text" name="dehits" placeholder="请输入发布文章默认点击" value="<?php echo \think\Config::get('auth.dehits'); ?>"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">管理员名称</label>
                                <div class="controls">
                                    <input type="text" name="adminname" placeholder="请输入管理员名称,用于回复显示" value="<?php echo \think\Config::get('auth.adminname'); ?>"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">评论审核</label>
                                <div class="controls">
                                    <div class="radio">
                                        <input type="radio" name="comview" id="radio_1" value="1" <?php if(\think\Config::get('auth.comview') == '1'): ?> checked <?php endif; ?> /><label for="radio_1">不需要审核</label>&nbsp;
                                        <input type="radio" name="comview" id="radio_2" value="0" <?php if(\think\Config::get('auth.comview') == '0'): ?> checked <?php endif; ?> /><label for="radio_2">需要审核</label>&nbsp;
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions">
                                <button type="button" class="btn btn-primary sysform" data-url="<?php echo url('Admin/System/view'); ?>">修改</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div id="tab3" class="tab-pane ">
                <div class="widget-box">
                    <div class="widget-content nopadding ">
                        <form class="form-horizontal" >
                            <div class="control-group">
                                <label class="control-label">QQ登陆AppID</label>
                                <div class="controls">
                                    <input type="text" name="appid" placeholder="请输入QQ登陆AppID" value="<?php echo $qq_inc['appid']; ?>"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">QQ登陆AppKey</label>
                                <div class="controls">
                                    <input type="text" name="appkey" placeholder="请输入QQ登陆AppKey" value="<?php echo $qq_inc['appkey']; ?>"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">QQ登陆回调地址</label>
                                <div class="controls">
                                    <input type="text" name="callback" placeholder="请输入QQ登陆回调地址" value="<?php echo $qq_inc['callback']; ?>"/>
                                </div>
                            </div>
                            <div class="form-actions">
                                <button type="button" class="btn btn-primary sysform" data-url="<?php echo url('Admin/System/sdk'); ?>">修改</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    // === 创建时间选择 === //
    laydate({
        elem: '#choosetime',
        event: 'focus'
    });
</script>

        <div class="row-fluid">
            <div id="footer" class="span12">
                2016 &copy; LoveTeemo’s Blog. Brought to you by <a href="http://www.loveteemo.com">long</a>
            </div>
        </div>
    </div>
</div>
<script src="com_layer/layer.js"></script>
<script src="admin_js/jquery.ui.custom.js"></script>
<script src="admin_js/bootstrap.min.js"></script>
<script src="admin_js/loveteemo.js"></script>
</body>
</html>
