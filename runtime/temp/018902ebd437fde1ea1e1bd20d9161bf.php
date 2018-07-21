<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:71:"/alidata/www/shemblog/public/../application/admin/view/index/index.html";i:1489992448;s:66:"/alidata/www/shemblog/public/../application/admin/view/layout.html";i:1489992448;}*/ ?>
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
    <div class="span12">
        <div class="alert alert-info">
            欢迎回到 <strong>LoveTeemo’Blog Admin</strong>. 请保持更新频率和质量哟!
            <a href="#" data-dismiss="alert" class="close">×</a>
        </div>
        <div class="widget-box">
            <div class="widget-title">
                <span class="icon"><i class="icon-signal"></i></span>
                <h5>程序信息</h5>
                <div class="buttons"><a onclick="location.reload()" class="btn btn-mini"><i class="icon-refresh"></i> 刷新</a></div></div>
            <div class="widget-content">
                <div class="row-fluid">
                    <div class="span4">
                        <ul class="site-stats">
                            <li><i class="icon-user"></i> <strong><?php echo $a_indexdata['usernum']; ?></strong> <small>QQ用户</small></li>
                            <li><i class="icon-book"></i> <strong><?php echo $a_indexdata['artnums']; ?></strong> <small>文章</small></li>
                            <li><i class="icon-heart"></i> <strong><?php echo $a_indexdata['commentnums']; ?></strong> <small>留言</small></li>
                            <li><i class="icon-comment"></i> <strong><?php echo $a_indexdata['artcommentnums']; ?></strong> <small>评论</small></li>
                            <li><i class="icon-leaf"></i> <strong><?php echo $a_indexdata['links']; ?></strong> <small>友链</small></li>
                        </ul>
                    </div>
                    <div class="span8">
                            <div class="widget-content" style="padding: 0;border: none">
                                <table class="table table-bordered table-striped with-check">
                                    <thead>
                                    <tr>
                                        <th colspan="4">
                                            <div class="widget-title" style="border: none">
                                                <h5>服务器信息</h5>
                                                <span class="label label-info">硬件</span>
                                            </div>
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td style="width: 20%">PHP 版本：</td>
                                        <td style="width: 20%"><?php echo phpversion(); ?></td>
                                        <td style="width: 20%">操作系统：</td>
                                        <td style="width: 20%"><?php echo php_uname('s'); ?></td>
                                    </tr>
                                    <tr>
                                        <td>MySQL 版本：</td>
                                        <td>暂时无法获取</td>
                                        <td>Web 服务器：</td>
                                        <td><?php echo \think\Request::instance()->server('SERVER_SOFTWARE'); ?></td>
                                    </tr>
                                    <tr>
                                        <td>文件上传限制：</td>
                                        <td><?php echo ini_get('upload_max_filesize'); ?></td>
                                        <td>GD 库支持：</td>
                                        <td><?php echo empty(gd_info())?'不支持':'支持'; ?></td>
                                    </tr>
                                    <tr>
                                        <td>青春博客官网：</td>
                                        <td><a href="http://www.loveteemo.com" target="_blank">http://www.loveteemo.com</a></td>
                                        <td>贡献者：</td>
                                        <td>Long</td>
                                    </tr>
                                    <tr>
                                        <td>当前版本：</td>
                                        <td>v3.0 dev</td>
                                        <td>系统使用协议：</td>
                                        <td><a href="http://www.loveteemo.com/license.html" target="_blank">http://www.loveteemo.com/license.html</a></td>
                                    </tr>
                                    <tr>
                                        <td>QQ交流群</td>
                                        <td><?php echo \think\Config::get('auth.qqgroup'); ?></td>
                                        <td>使用手册</td>
                                        <td><a href="<?php echo \think\Config::get('auth.docurl'); ?>" target="_blank"><?php echo \think\Config::get('auth.docurl'); ?></a></td>
                                    </tr>
                                    </tbody>
                                </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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
