{extend name="common/main"}

{block name='breadcrumb'}
<div>
    <ol class="breadcrumb">

        <li><a href="{:url('/admin/user/index')}"><i class="fa fa-dashboard"></i> 用户</a></li>
        <li class="active">列表</li>
    </ol>
</div>

{/block}
{block name="main"}

<div class="col-xs-12">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">用户：</h3>

            <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                    <div class="input-group-btn">
                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </div>
        </div>

        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
            <table class="table table-hover">
                <tbody><tr>
                    <th>ID</th>
                    <th>username</th>
                    <th>nikename</th>
                    <th>email</th>
                    <th>telephone</th>
                    <th>操作</th>
                </tr>
                {volist name='users' id='user'}
                <tr>
                    <td>{$user.id}</td>
                    <td>{$user.username}</td>
                    <td>{$user.nikename}</td>

                    <td>{$user.email}</td>
                    <td>{$user.telephone}</td>
                    <td>
                        <a href="{:url('/admin/user/edit',['id'=>$user['id']])}"><span class="glyphicon glyphicon-scissors" aria-hidden="true"></span></a>
                        <a href="{:url('/admin/user/del',['id'=>$user['id']])}"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                    </td>

                </tr>
                {/volist}
                </tbody></table>
            {$users->render()}
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
</div>
{/block}