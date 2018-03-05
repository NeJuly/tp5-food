{extend name='common/main'}
{block name='link'}
<!--    webupload-->
<link rel="shortcut icon" href="http://fex.baidu.com/webuploader/images/favicon.ico">
<!--<link rel="stylesheet" type="text/css" href="http://fex.baidu.com/webuploader/css/bootstrap.min.css">-->
<link rel="stylesheet" type="text/css" href="http://fex.baidu.com/webuploader/css/bootstrap-theme.min.css">
<!--<link rel="stylesheet" type="text/css" href="http://fex.baidu.com/webuploader/css/font-awesome.min.css">-->
<!--<link rel="stylesheet" type="text/css" href="http://fex.baidu.com/webuploader/css/syntax.css">-->
<link rel="stylesheet" type="text/css" href="/static/webupload/css/style.css">
<link rel="stylesheet" type="text/css" href="/static/webupload/webuploader.css">
{/block}
{block name='main'}
<div class="layui-tab layui-tab-brief" lay-filter="docDemoTabBrief">
    <ul class="layui-tab-title">
        <li class="layui-this">webupload多图上传到本地</li>
        <li>webupload单图上传到本地</li>
        <li>webupload+七牛云多图上传</li>
        <li>webupload+七牛云单图上传</li>

    </ul>
    <div class="layui-tab-content">
        <div class="layui-tab-item layui-show">
            <!--  上传到本地-->
            <!--dom结构部分-->
            <div id="uploader-demo">
                <!--用来存放item-->
                <div id="fileList" class="uploader-list"></div>
                <div id="filePicker">webupload多图上传到本地</div>
            </div>

        </div>
        <div class="layui-tab-item">webupload单图上传到本地</div>
        <div class="layui-tab-item">webupload+七牛云多图上传</div>
        <div class="layui-tab-item">webupload+七牛云单图上传</div>

    </div>
</div>


{/block}
{block name='script'}
<script type="text/javascript" src="/static/webupload/webuploader.js"></script>
<script>
    function getNowFormatDate() {
        var date = new Date();
//        var seperator1 = "-";
        var year = date.getFullYear();
        var month = date.getMonth() + 1;
        var strDate = date.getDate();
        if (month >= 1 && month <= 9) {
            month = "0" + month;
        }
        if (strDate >= 0 && strDate <= 9) {
            strDate = "0" + strDate;
        }
        var currentdate = year +  month  + strDate;
        return currentdate;
    }
    $(function () {
        var time = getNowFormatDate();
        var randNum = parseInt(time+Math.random()*9999);
        $("#sn").val(randNum);
    });



    // 图片上传demo
    jQuery(function() {
        var $ = jQuery,
            $list = $('#fileList'),
            // 优化retina, 在retina下这个值是2
            ratio = window.devicePixelRatio || 1,

            // 缩略图大小
            thumbnailWidth = 100 * ratio,
            thumbnailHeight = 100 * ratio,

            // Web Uploader实例
            uploader;

        // 初始化Web Uploader
        uploader = WebUploader.create({

            // 自动上传。
            auto: true,

            // swf文件路径
            swf: '/static/webupload/Uploader.swf',

            // 文件接收服务端。
            server: "{:url('qiupload')}",

            // 选择文件的按钮。可选。
            // 内部根据当前运行是创建，可能是input元素，也可能是flash.
            pick: '#filePicker',

            // 只允许选择文件，可选。
            accept: {
                title: 'Images',
                extensions: 'gif,jpg,jpeg,bmp,png',
                mimeTypes: 'image/*'
            }
        });

        // 当有文件添加进来的时候
        uploader.on( 'fileQueued', function( file ) {
            var $li = $(
                '<div id="' + file.id + '" class="file-item thumbnail">' +
                '<img>' +
                '<div class="info">' + file.name + '</div>' +
                '</div>'
                ),
                $img = $li.find('img');

            $list.append( $li );

            // 创建缩略图
            uploader.makeThumb( file, function( error, src ) {
                if ( error ) {
                    $img.replaceWith('<span>不能预览</span>');
                    return;
                }

                $img.attr( 'src', src );
            }, thumbnailWidth, thumbnailHeight );
        });

        // 文件上传过程中创建进度条实时显示。
        uploader.on( 'uploadProgress', function( file, percentage ) {
            var $li = $( '#'+file.id ),
                $percent = $li.find('.progress span');

            // 避免重复创建
            if ( !$percent.length ) {
                $percent = $('<p class="progress"><span></span></p>')
                    .appendTo( $li )
                    .find('span');
            }

            $percent.css( 'width', percentage * 100 + '%' );
        });

        // 文件上传成功，给item添加成功class, 用样式标记上传成功。
        uploader.on( 'uploadSuccess', function( file ,response) {
//            console.dir(response);
            var html = '<input type="hidden" name="logo[]" value="'+response.path+'">';
            $("#uploader-demo").append(html);
            $( '#'+file.id ).addClass('upload-state-done');
        });

        // 文件上传失败，现实上传出错。
        uploader.on( 'uploadError', function( file ) {
            var $li = $( '#'+file.id ),
                $error = $li.find('div.error');

            // 避免重复创建
            if ( !$error.length ) {
                $error = $('<div class="error"></div>').appendTo( $li );
            }

            $error.text('上传失败');
        });

        // 完成上传完了，成功或者失败，先删除进度条。
        uploader.on( 'uploadComplete', function( file ) {
            $( '#'+file.id ).find('.progress').remove();
        });
    });

</script>
<!-- 配置文件 -->
<script type="text/javascript" src="/static/utf8-php/ueditor.config.js"></script>
<!-- 编辑器源码文件 -->
<script type="text/javascript" src="/static/utf8-php/ueditor.all.js"></script>
<!-- 实例化编辑器 -->
<script type="text/javascript">
    var ue = UE.getEditor('container',{
        initialFrameWidth : null,

    });
    //注意：选项卡 依赖 element 模块，否则无法进行功能性操作
    layui.use('element', function(){
        var element = layui.element;

        //…
    });
</script>
{/block}