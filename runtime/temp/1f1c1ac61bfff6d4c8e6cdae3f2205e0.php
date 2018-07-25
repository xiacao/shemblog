<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:68:"D:\wamp64\www\shemblog\public/../application/admin\view\tip/add.html";i:1532133080;s:74:"D:\wamp64\www\shemblog\public/../application/admin\view\layout_iframe.html";i:1532133082;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<!-- container-fluid -->
<head>
    <title>LoveTeemo Admin</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="admin_css/bootstrap.min.css" />
    <link rel="stylesheet" href="admin_css/bootstrap-responsive.min.css" />
    <link rel="stylesheet" href="admin_css/loveteemo.main.css" />
    <link rel="stylesheet" href="admin_css/style.css" />
    <link rel="stylesheet" href="//at.alicdn.com/t/font_1477105914_3430886.css">
    <script src="admin_js/jquery.min.js"></script>
    <script src="com_editor/js/wangEditor.min.js"></script>
    <link rel="stylesheet" href="com_editor/css/wangEditor.min.css">
    <script src="admin_js/loveteemo.js"></script>
</head>
<style>
    body{background-color: #fff;font-size: 12px;}
    form{margin-top: 40px;}
    .table th, .table td{vertical-align: middle !important;}
    input,select,textarea{margin-top: 5px !important;margin-bottom: 5px !important;}
    .enter{text-align: center;padding-top: 20px;}
</style>
<body>

<form action="<?php echo url('Admin/Tip/add'); ?>">
    <table cellpadding="0" cellspacing="0" style="border:0; margin: 0 auto;" class="tc">
        <tr>
            <td width="80" align="right">文本：</td>
            <td class="tdright">
                <input type="text" name="tip_title" placeholder="请输入文本" value="">
            </td>
        </tr>
        <tr>
            <td width="80" align="right">是否显示：</td>
            <td class="tdright">
                <div class="radio">
                    <input type="radio" name="tip_view" id="radio_1" value="1" /><label for="radio_1">显示</label>&nbsp;
                    <input type="radio" name="tip_view" id="radio_2" value="0" checked /><label for="radio_2">不显示</label>&nbsp;
                </div>
            </td>
        </tr>
        <tr>
            <td width="80" align="right">排序：</td>
            <td class="tdright">
                <input type="text" name="tip_sort" value="">
            </td>
        </tr>
        <tr>
            <td colspan="2" class="enter">
                <button class="btn editsave" type="button">添加</button>
                <button class="btn" type="reset">重置</button>
            </td>
        </tr>
    </table>
</form>

<script src="com_layer/layer.js"></script>
<script src="com_laydate/laydate.js"></script>
<script src="admin_js/jquery.ui.custom.js"></script>
<script src="admin_js/bootstrap.min.js"></script>
</body>
</html>