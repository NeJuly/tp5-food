<head>
    <link rel="stylesheet" href="/static/layui-master/dist/css/layui.css">
</head>

<form class="layui-form" action="" method="post">
    <div class="layui-form-item">
        <label class="layui-form-label">access_key</label>
        <div class="layui-input-inline">
            <input type="text" name="access_key" required lay-verify="required" placeholder="请输入access_key" autocomplete="off" class="layui-input">
        </div>
        <div class="layui-form-mid layui-word-aux">access_key必填,请到阿里云控制台获取！</div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">access_secret</label>
        <div class="layui-input-inline">
            <input type="text" name="access_secret" required lay-verify="required" placeholder="请输入access_secret" autocomplete="off" class="layui-input">
        </div>
        <div class="layui-form-mid layui-word-aux">access_secret必填,请到阿里云控制台获取！          </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">签名名称</label>
        <div class="layui-input-inline">
            <input type="text" name="sign_name" required lay-verify="required" placeholder="请输入sign_name" autocomplete="off" class="layui-input">
        </div>
        <div class="layui-form-mid layui-word-aux">sign_name必填,请到阿里云短信服务获取！          </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">模板CODE</label>
        <div class="layui-input-inline">
            <input type="text" name="template_code" required lay-verify="required" placeholder="请输入template_code" autocomplete="off" class="layui-input">
        </div>
        <div class="layui-form-mid layui-word-aux">template_code必填,请到阿里云短信服务获取！          </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">模板状态</label>
        <div class="layui-input-block">
            <input type="checkbox" name="status" lay-skin="switch">
        </div>
    </div>

    <div class="layui-form-item">
        <div class="layui-input-block">
            <button class="layui-btn" lay-submit lay-filter="formDemo">立即提交</button>
            <button type="reset" class="layui-btn layui-btn-primary">重置</button>
        </div>
    </div>
</form>
<script src="/static/layui-master/dist/layui.all.js"></script>
<script>
    //Demo
    layui.use('form', function(){
        var form = layui.form;

        //监听提交
        form.on('submit(formDemo)', function(data){

            layui.jquery.post('{:url("add")}',data.field,function (data) {
                if (data.code == '1'){
                    layer.msg(data.msg+'......', function(){
                        //关闭后的操作

                    var index = parent.layer.getFrameIndex(window.name);
                    console.dir(index);
                    window.parent.location.reload();//刷新父页面
                    parent.layer.close(index); // 关闭当前的弹窗
                    });

                }

            });

            return false;
        });

    });
</script>