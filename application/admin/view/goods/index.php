{extend name="common/main"}

{block name='breadcrumb'}
<div>
    <ol class="breadcrumb">

        <li><a href="{:url('/admin/goods/index')}"><i class="fa fa-dashboard"></i> 商品</a></li>
        <li class="active">列表</li>
    </ol>
</div>

{/block}
{block name="main"}
<div class="col-xs-12">
    <div class="box">
        <div class="box-header layui-bg-gray">
            <h3 class="box-title">权限路径：</h3>
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
                    <p class="layui-text layui-word-aux">总记录数：{$goodsCount}条</p>
                </div>
            </div>


        </div>
        <!-- /.box-header -->

        <div class="box-body table-responsive no-padding">
            <table  class="layui-table">
                <tbody><tr>
                    <th>ID</th>
                    <th>name</th>
                    <th>sn</th>
                    <th>logo</th>
                    <th>goods_category_id</th>
                    <th>shop_price</th>
                    <th>status</th>
                    <th>操作</th>
                </tr>
                {volist name='goods' id='good'}
                <tr>
                    <td>{$good.id}</td>
                    <td>{$good.name}</td>
                    <td>{$good.sn}</td>
                    <td><img src="{$good.logo}?imageView2/1/w/50/h/50" alt=""></td>
                    <td>{$good.goods_category.name}</td>
                    <td>{$good.shop_price}</td>
                    <td>{$good.status}</td>
                    <td>
                        <button class="layui-btn layui-btn-xs">
                            <i class="layui-icon">&#xe608;</i> 启用
                        </button>
                        <!--                        <button class="layui-btn layui-btn-xs">-->
                        <!--                            <i class="layui-icon">&#x1007;</i> 禁用-->
                        <!--                        </button>-->
                        <a href="{:url('/admin/goods/edit',['id'=>$good['id']])}"><i class="layui-icon">&#xe642;</i></a>
                        <a href="{:url('/admin/goods/del',['id'=>$good['id']])}"><i class="layui-icon">&#xe640;</i></a>
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
            {$goods->render()}
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
</div>

{/block}