{extend name="common/main"}
{block name='link'}
<head>
    <link rel="stylesheet" href="/static/layui-master/dist/css/layui.css">
</head>
{/block}

{block name='breadcrumb'}
<div>
    <ol class="breadcrumb">

        <li><a href="{:url('/admin/sms/index')}"><i class="fa fa-dashboard"></i> 短信</a></li>
        <li class="active">列表</li>
    </ol>
</div>

{/block}
{block name="main"}

<div class="col-xs-12">
    <div class="box">
        <div class="box-header layui-bg-gray">
            <h3 class="box-title">短信</h3>

            <div class="layui-row ">
                <div class="layui-col-md10">
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
                <div class="layui-col-md2">
                    <p class="layui-text layui-word-aux">总记录数：{$smsCount}条</p>
                </div>

            </div>


        </div>
        <!-- /.box-header -->

        <div class="box-body table-responsive no-padding">
            <table  class="layui-table">
                <tbody>

                <tr>
                    <th><input type="checkbox" onclick="checkAll(this)"></th>
                    <th>短信ID</th>
                    <th>access_key</th>
                    <th>access_secret</th>
                    <th>签名</th>
                    <th>模板CODE</th>
                    <th>状态</th>
                    <th>创建时间</th>
                    <th>操作</th>
                </tr>
                <form class="layui-form" action="">
                {volist name='smses' id='sms'}

                <tr>
                    <td><input type="checkbox"></td>
                    <td>{$sms.id}</td>
                    <td>{$sms.access_key}</td>
                    <td>{$sms.access_secret}</td>
                    <td>{$sms.sign_name}</td>
                    <td>{$sms.template_code}</td>
                    <td>{$sms.status}</td>
                    <td>{$sms.create_time}</td>

                    <td>
                        <button class="layui-btn layui-btn-xs">
                            <i class="layui-icon">&#xe608;</i> 启用
                        </button>
<!--                        <button class="layui-btn layui-btn-xs">-->
<!--                            <i class="layui-icon">&#x1007;</i> 禁用-->
<!--                        </button>-->
                        <a href="{:url('/admin/sms/edit',['id'=>$sms['id']])}"><i class="layui-icon">&#xe642;</i></a>
                        <a href="{:url('/admin/sms/del',['id'=>$sms['id']])}"><i class="layui-icon">&#xe640;</i></a>
                    </td>

                </tr>
                {/volist}
                </form>
                </tbody></table>
            {$smses->render()}
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
    $(function () {
       $("#btn-add").click(function () {
           layer.open({
               type: 2,
               closeBtn: 1, //关闭按钮显示
               title: "新增短信模板", //标题
               shade: [0],
               area: ['800px', '600px'],
               anim: 2,
               content: ['{:url("add")}', 'no'] //iframe的url，no代表不显示滚动条
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