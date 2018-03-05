{extend name="common/main"}

{block name='breadcrumb'}
<div>
    <ol class="breadcrumb">

        <li><a href="{:url('/admin/goods_category/index')}"><i class="fa fa-dashboard"></i> 商品分类</a></li>
        <li class="active">编辑</li>

    </ol>
</div>

{/block}
{block name="main"}

    <div class="box box-primary">

        <!-- form start -->
        <form role="form" method="post" action="" id="cateAddForm">
            <div class="box-body">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="请输入商品分类名称" name="name" value="{$goodsCate.name}">
                </div>


                <div class="form-group">
                    <label>parent_id</label>
                    <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" name="parent_id">
                        <option value="0" >顶级分类</option>
                        {volist name='cates' id='cate'}
                        <option value="{$cate.id}" <?php if ($cate['id'] == $goodsCate['parent_id']) echo 'selected'?>>{$cate.depth}{$cate.name}</option>
                        {/volist}
                    </select>
                </div>
                <div class="form-group">
                    <label>Intro</label>
                    <textarea class="form-control" rows="3" name="intro" placeholder="请输入商品分类的简介 ..." >{$goodsCate.intro}</textarea>
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