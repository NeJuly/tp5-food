{extend name="common/main"}
{block name='breadcrumb'}
<div>
    <ol class="breadcrumb">

        <li><a href="{:url('/admin/user/index')}"><i class="fa fa-dashboard"></i> 用户</a></li>
        <li class="active">添加</li>

    </ol>
</div>

{/block}
{block name="main"}

    <div class="box box-primary">

        <!-- form start -->
        <form role="form" method="post" action="" id="cateAddForm">
            <div class="box-body">
                <div class="form-group">
                    <label for="username">username</label>
                    <input type="text" class="form-control" id="username" placeholder="请输入用户名称" name="username">
                </div>
                <div class="form-group">
                    <label for="nikename">nikename</label>
                    <input type="text" class="form-control" id="nikename" placeholder="请输入用户昵称" name="nikename">
                </div>
                <div class="form-group">
                    <label for="password">password</label>
                    <input type="text" class="form-control" id="password" placeholder="请输入用户密码" name="password">
                </div>
                <div class="form-group">
                    <label for="email">email</label>
                    <input type="text" class="form-control" id="email" placeholder="请输入用户邮箱" name="email">
                </div>
                <div class="form-group">
                    <label for="telephone">telephone</label>
                    <input type="text" class="form-control" id="telephone" placeholder="请输入用户电话" name="telephone">
                </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <button type="submit" class="btn btn-primary" id="cateAddSub">Submit</button>
            </div>
        </form>
    </div>
    <!-- /.box -->

    {/block}