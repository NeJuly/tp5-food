{extend name="common/main"}

{block name='breadcrumb'}
<div>
    <ol class="breadcrumb">

        <li><a href="{:url('/admin/admin/index')}"><i class="fa fa-dashboard"></i> 管理员</a></li>
        <li class="active">列表</li>
    </ol>
</div>

{/block}
{block name="main"}

<div class="col-xs-12">
    <div class="box">
        <div class="box-header layui-bg-gray">
            <h3 class="box-title">权限路径：</h3>

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
                    <p class="layui-text layui-word-aux">总记录数：{$adminsCount}条</p>
                </div>
            </div>


        </div>
        <!-- /.box-header -->

        <div class="box-body table-responsive no-padding">
            <table  class="layui-table">
                <tbody>

                <tr>
                    <th><input type="checkbox"></th>
                    <th>管理员ID</th>
                    <th>名称</th>
                    <th>添加时间</th>
                    <th>最后登录ip</th>
                    <th>操作</th>
                </tr>
                {volist name='admins' id='admin'}

                <tr>
                    <td><input type="checkbox"></td>
                    <td>{$admin.id}</td>
                    <td>{$admin.username}</td>
                    <td>{$admin.add_time}</td>
                    <td>{$admin.last_login_ip}</td>

                    <td>
                        <button class="layui-btn layui-btn-xs">
                            <i class="layui-icon">&#xe608;</i> 启用
                        </button>
                        <!--                        <button class="layui-btn layui-btn-xs">-->
                        <!--                            <i class="layui-icon">&#x1007;</i> 禁用-->
                        <!--                        </button>-->
                        <a href="{:url('/admin/admin/edit',['id'=>$admin['id']])}"><i class="layui-icon">&#xe642;</i></a>
                        <a href="{:url('/admin/admin/del',['id'=>$admin['id']])}"><i class="layui-icon">&#xe640;</i></a>
                        <button class="layui-btn layui-btn-xs">
                            <i class="layui-icon"></i> 用户列表
                        </button>
                        <button class="layui-btn layui-btn-xs">
                            <i class="layui-icon"></i> 授权
                        </button>
                    </td>

                </tr>
                {/volist}
                </tbody></table>
            {$admins->render()}
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
</div>
{/block}