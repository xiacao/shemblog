<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:73:"/alidata/www/shemblog/public/../application/admin/view/article/index.html";i:1489992448;s:66:"/alidata/www/shemblog/public/../application/admin/view/layout.html";i:1489992448;}*/ ?>
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
    <h1>文章</h1>
</div>
<div id="breadcrumb">
    <a href="<?php echo url('Admin/Index/index'); ?>" title="回到首页" class="tip-bottom"><i class="icon-home"></i> 首页</a>
    <a href="#" class="current">文章</a>
</div>

    <div class="container-fluid">
        
<div class="row-fluid">
    <div class="span12">
        <div class="widget-box">

            <div class="widget-title">
                <h5>文章 管理</h5>
                <a class="label label-info redirect" data-url="<?php echo url('Admin/Article/add'); ?>">添加</a>
            </div>
            <div class="widget-content">
                <form action="" class="search-box">
                    <div class="search-query">
                        <input type="text" name="keyword" value="<?php echo \think\Request::instance()->get('keyword'); ?>"><button class="btn btn-info">搜索</button>
                    </div>
                    <div class="search-p">
                        <label>类型</label>
                        <div class="radio">
                            <input type="radio" name="type" id="radio_1" value="0" <?php if(\think\Request::instance()->get('type') == '0'): ?> checked <?php endif; ?> /><label for="radio_1">文章</label>&nbsp;
                            <input type="radio" name="type" id="radio_2" value="1" <?php if(\think\Request::instance()->get('type') == '1'): ?> checked <?php endif; ?> /><label for="radio_2">资源</label>&nbsp;
                        </div>
                    </div>
                    <script>
                        $("input[type='radio']").click(function () {
                            $('form').submit();
                        });
                    </script>
                </form>
                <style>
                    .search-query>input{width: 300px;margin-top: 9px;margin-right: 10px;}
                    .table th, .table td{vertical-align: middle !important;}
                    input{width: 50px;}
                </style>
                <table class="table table-bordered table-striped with-check">
                    <thead>
                    <tr>
                        <th width="10%">标题</th>
                        <th width="5%">缩略图</th>
                        <th width="25%">描述</th>
                        <th width="5%">评论</th>
                        <th width="10%">显示</th>
                        <th width="10%">操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if(is_array($list) || $list instanceof \think\Collection): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$a): $mod = ($i % 2 );++$i;?>
                    <tr>
                        <td><?php echo $a['art_title']; ?></td>
                        <td style="text-align: center">
                            <img src="<?php echo $a['art_img']; ?>" alt="" width="150">
                        </td>
                        <td>
                            <?php if($a['art_down'] == '1'): ?>
                            <b style="color: red;">[附件]</b>
                            <?php endif; ?>
                            <?php echo $a['art_remark']; ?>
                        </td>
                        <td>
                            <?php echo !empty($a['nums'])?$a['nums'] : 0; ?> 条
                        </td>
                        <td style="text-align: center">
                            <button class="btn btn-mini changgeview" data-url="<?php echo url('Admin/Article/view'); ?>" data-id="<?php echo $a['art_view']; ?>" data-view="<?php echo $a['art_view']; ?>"><?php echo !empty($a['art_view'])?'显示':'不显示'; ?></button>
                        </td>
                        <td style="text-align: center">
                            <button type="button" class="btn btn-mini redirect" data-url="<?php echo url('Admin/Article/edit',['id'=>$a['art_id']]); ?>">修改</button>
                            <button type="button" class="btn btn-mini delete" data-url="<?php echo url('Admin/Article/delete'); ?>" data-id="<?php echo $a['art_id']; ?>">删除</button>
                        </td>
                    </tr>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                    </tbody>
                </table>
                <?php echo $list->render(); ?>
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
