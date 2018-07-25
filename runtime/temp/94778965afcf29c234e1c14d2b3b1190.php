<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:72:"D:\wamp64\www\shemblog\public/../application/admin\view\banner/edit.html";i:1532133083;s:74:"D:\wamp64\www\shemblog\public/../application/admin\view\layout_iframe.html";i:1532133082;}*/ ?>
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

<form action="<?php echo url('Admin/Banner/edit'); ?>">
    <table cellpadding="0" cellspacing="0" style="border:0; margin: 0 auto;" class="tc">
        <input type="hidden" name="ban_id" value="<?php echo $info['ban_id']; ?>">
        <tr>
            <td width="80" align="right">标题&提示：</td>
            <td class="tdright">
                <input type="text" name="ban_title" placeholder="请输入标题&提示" value="<?php echo $info['ban_title']; ?>">
            </td>
        </tr>
        <tr>
            <td width="80" align="right">指向地址：</td>
            <td class="tdright">
                <input type="text" name="ban_url" placeholder="请输入指向地址" value="<?php echo $info['ban_url']; ?>">
            </td>
        </tr>
        <tr>
            <td width="80" align="right">排序：</td>
            <td class="tdright">
                <input type="text" name="ban_sort" value="<?php echo $info['ban_sort']; ?>">
            </td>
        </tr>
        <tr>
            <td width="80" align="right">是否显示：</td>
            <td class="tdright">
                <div class="radio">
                    <input type="radio" name="ban_view" id="radio_1" value="1" <?php if($info['ban_view'] == '1'): ?>checked<?php endif; ?> /><label for="radio_1">显示</label>&nbsp;
                    <input type="radio" name="ban_view" id="radio_2" value="0" <?php if($info['ban_view'] == '0'): ?>checked<?php endif; ?> /><label for="radio_2">不显示</label>&nbsp;
                </div>
            </td>
        </tr>
        <tr>
            <td width="80" align="right">原图片：</td>
            <td class="tdright">
                <img src='<?php echo $info['ban_img']; ?>' width='200' style="margin: 10px 0;">
                <input name='ban_old_img' value='<?php echo $info['ban_img']; ?>' type='hidden'>
            </td>
        </tr>
        <tr>
            <td width="80" align="right">图片：</td>
            <td class="tdright">
                <div id="uploader-demo">
                    <div id="filePicker">选择图片</div>
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center"><span style="color: #666">上传文件尺寸为: 1250 x 275</span></td>
        </tr>
        <tr>
            <td colspan="2" class="enter">
                <button class="btn editsave" type="button">修改</button>
                <button class="btn" type="reset">重置</button>
            </td>
        </tr>
    </table>
</form>
<script src="admin_upload/webuploader.js"></script>
<link rel="stylesheet" href="admin_upload/webuploader.css"/>

<script>
    var uploader = WebUploader.create({
        auto: true,
        swf: 'admin_upload/Uploader.swf',
        server: "<?php echo url('Admin/Banner/upload'); ?>",
        fileNumLimit:1,
        fileSingleSizeLimit : 1024*1024,
        pick: '#filePicker',
        fileVal:'image',
        accept: {
            title: 'Images',
            extensions: 'jpg,jpeg,bmp,png',
            mimeTypes: 'image/jpg,image/jpeg,image/png'
        }
    });
    uploader.on('uploadSuccess', function (file, data) {
        if( data.err == 0 ){
            _this = $('#filePicker');
            _this.parent().after("<img src='/uploads/banner/"+data.data+"' width='100'>");
            _this.parent().after("<input name='ban_new_img' value='/uploads/banner/"+data.url+"' type='hidden'>");
            _this.parent().remove();
            layer.msg(data.msg, {icon: 6,time:500});
        }else{
            layer.msg(data.msg, {icon: 5,time:500});
        }
    });
    uploader.on("error", function (type) {
        if (type == "Q_TYPE_DENIED") {
            layer.msg('请选择图片格式的文件!', {icon: 5,time:500});
        } else if (type == "F_EXCEED_SIZE") {
            layer.msg('文件大小不能超过1MB!', {icon: 5,time:500});
        }
    });
    uploader.on('uploadError', function (file) {
        layer.msg('上传失败!', {icon: 5,time:500});
    });
</script>

<script src="com_layer/layer.js"></script>
<script src="com_laydate/laydate.js"></script>
<script src="admin_js/jquery.ui.custom.js"></script>
<script src="admin_js/bootstrap.min.js"></script>
</body>
</html>