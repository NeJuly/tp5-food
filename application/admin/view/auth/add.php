<head>
    <link rel="stylesheet" href="/static/layui-master/dist/css/layui.css">
</head>

<form class="layui-form" action="" method="post">
    <div class="layui-form-item">
        <label class="layui-form-label">授权路由</label>
        <div class="layui-input-inline">
            <input type="text" name="name" required lay-verify="required" placeholder="请输入授权路由" autocomplete="off" class="layui-input">
        </div>
        <div class="layui-form-mid layui-word-aux">路由必填,实例：Index/index,GoodsCategory/index</div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">路由标题</label>
        <div class="layui-input-inline">
            <input type="text" name="title" required lay-verify="required" placeholder="请输入授权路由标题" autocomplete="off" class="layui-input">
        </div>
        <div class="layui-form-mid layui-word-aux">标题必填</div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">路由状态</label>
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