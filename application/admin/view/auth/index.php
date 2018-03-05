{extend name="common/main"}

{block name='breadcrumb'}
<div>
    <ol class="breadcrumb">

        <li><a href="{:url('/admin/auth/index')}"><i class="fa fa-dashboard"></i> 权限</a></li>
        <li class="active">列表</li>
    </ol>
</div>

{/block}
{block name="main"}

<div class="col-xs-12">
    <div class="box">
        <div class="box-header layui-bg-gray">
            <h3 class="box-title">权限</h3>

<!--            <div class="box-tools">-->
<!--                <div class="input-group input-group-sm" style="width: 150px;">-->
<!--                    <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">-->
<!---->
<!--                    <div class="input-group-btn">-->
<!--                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->

            <div class="layui-row ">
                <div class="layui-col-md11">
                    <div class="checkbox">
                        <button class="layui-btn" id="btn-add">
                            <i class="layui-icon">&#xe608;</i> 新增
                        </button>
                        <button class="layui-btn layui-btn-normal">
                            <i class="layui-icon">&#xe608;</i> 启用
                        </button>
                        <button class="layui-btn layui-btn-warm">
                            <i class="layui-icon">&#x1007;</i> 禁用
                        </button>
                        <button class="layui-btn layui-btn-danger">
                            <i class="layui-icon">&#x1007;</i> 删除
                        </button>

                    </div>
                </div>
                <div class="layui-col-md1">
                    <p class="layui-text layui-word-aux">总记录数：{$authCount}条</p>
                </div>
            </div>


        </div>
        <!-- /.box-header -->

        <div class="box-body table-responsive no-padding">
            <table  class="layui-table">
                <tbody>

                <tr>
                    <th><input type="checkbox" onclick="checkAll(this)"></th>
                    <th>规则ID</th>
                    <th>授权路由</th>
                    <th>路由标题</th>
                    <th>状态</th>
                    <th>操作</th>
                </tr>
                {volist name='authRules' id='authRule'}

                <tr>
                    <td><input type="checkbox"></td>
                    <td>{$authRule.id}</td>
                    <td>{$authRule.name}</td>
                    <td>{$authRule.title}</td>
                    <td>{$authRule.status}</td>

                    <td>
                        <button class="layui-btn layui-btn-xs">
                            <i class="layui-icon">&#xe608;</i> 启用
                        </button>
<!--                        <button class="layui-btn layui-btn-xs">-->
<!--                            <i class="layui-icon">&#x1007;</i> 禁用-->
<!--                        </button>-->
                        <a href="{:url('/admin/auth/edit',['id'=>$authRule['id']])}"><i class="layui-icon">&#xe642;</i></a>
                        <a href="{:url('/admin/auth/del',['id'=>$authRule['id']])}"><i class="layui-icon">&#xe640;</i></a>
                        <button class="layui-btn layui-btn-xs btn-user-list">
                            <i class="layui-icon"></i> 管理员列表
                        </button>
                        <button class="layui-btn layui-btn-xs">
                            <i class="layui-icon"></i> 授权
                        </button>
                    </td>

                </tr>
                {/volist}
                </tbody></table>
            {$authRules->render()}
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
</div>
{/block}
{block name='script'}
<script>
    function checkAll(obj){
        $("input[type='checkbox']").prop('checked', $(obj).prop('checked'));
    }

//    layer.open({
//
//        type:2,
//
//        title:'"test",
//
//        area: ['800px', '600px'],
//
//        closeBtn: 0,
//
//        shadeClose: true,
//
//        content: "hello world"
//
//    });
//
//    layer.open({
//        type: 2,
//        title: '新增权限',
//        area: ['800px', '600px'],
//        content: '{:url("add")}' //这里content是一个URL，如果你不想让iframe出现滚动条，你还可以content: ['http://sentsin.com', 'no']
//    });

    $(function () {
       $("#btn-add").click(function () {
           layer.open({
               type: 2,
               closeBtn: 1, //关闭按钮显示
               title: "新增路由", //标题
               shade: [0],
               area: ['800px', '600px'],
//               offset: 'rb', //右下角弹出
//               time: 5000, //自动关闭时间
               anim: 2,
               content: ['{:url("add")}', 'no'] //iframe的url，no代表不显示滚动条
//               end: function () { //关闭后回调函数
//                   layui.use('form', function(){
//                       var form = layui.form;
//
//                       //监听提交
//                       form.on('submit(formDemo)', function(data){
//                           layer.msg(JSON.stringify(data.field));
//
//                           return false;
//                       });
//                   });
//               }
           });
       }) ;


    });

    $(".btn-user-list").click(function () {
        //弹出即全屏
        var index = layer.open({
            type: 2,
            content: '{:url(\'/admin/admin/index\',\'\',true,true)}',
            area: ['320px', '195px'],
            maxmin: true
        });
        layer.full(index);
    });

</script>
{/block}