{extend name="common/main"}

{block name='breadTitle'}{/block}
{block name='breadcrumb'}
<div>
    <ol class="breadcrumb">

        <li><a href="{:url('/admin/index/index')}"><i class="fa fa-dashboard"></i> 后台信息</a></li>
        <li class="active">展示</li>

    </ol>
</div>

{/block}
{block name="main"}


    <!-- Info Boxes -->
    <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-aqua"><i class="fa fa-envelope-o"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Messages</span>
                    <span class="info-box-number">1,410</span>
                </div><!-- /.info-box-content -->
            </div><!-- /.info-box -->
        </div><!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-green"><i class="fa fa-flag-o"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Bookmarks</span>
                    <span class="info-box-number">410</span>
                </div><!-- /.info-box-content -->
            </div><!-- /.info-box -->
        </div><!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-yellow"><i class="fa fa-files-o"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Uploads</span>
                    <span class="info-box-number">13,648</span>
                </div><!-- /.info-box-content -->
            </div><!-- /.info-box -->
        </div><!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-red"><i class="fa fa-star-o"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Likes</span>
                    <span class="info-box-number">93,139</span>
                </div><!-- /.info-box-content -->
            </div><!-- /.info-box -->
        </div><!-- /.col -->
    </div>





<div class="table-responsive col-md-6">
    <table class="table table-striped table-hover">

        <tr>
            <td>ThinkPHP版本：</td>
            <td>{$info.tp}</td>
        </tr>
        <tr>
            <td>PHP版本：</td>
            <td>{$info.php}</td>
        </tr>
        <tr>
            <td>操作系统：</td>
            <td>{$info.win}</td>
        </tr>
        <tr>
            <td>最大上传限制：</td>
            <td>{$info.upload_size}</td>
        </tr>
        <tr>
            <td>脚本执行时间限制：</td>
            <td>{$info.execution_time}</td>
        </tr>
        <tr>
            <td>运行环境：</td>
            <td>{$info.environment}</td>
        </tr>

    </table>
</div>

<div class="table-responsive col-md-6">
    <table class="table table-striped table-hover">

        <tr>
            <td>ThinkPHP版本：</td>
            <td>{$info.tp}</td>
        </tr>
        <tr>
            <td>PHP版本：</td>
            <td>{$info.php}</td>
        </tr>
        <tr>
            <td>操作系统：</td>
            <td>{$info.win}</td>
        </tr>
        <tr>
            <td>最大上传限制：</td>
            <td>{$info.upload_size}</td>
        </tr>
        <tr>
            <td>脚本执行时间限制：</td>
            <td>{$info.execution_time}</td>
        </tr>
        <tr>
            <td>运行环境：</td>
            <td>{$info.environment}</td>
        </tr>

    </table>
</div>
<div class="row">
    <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box bg-aqua">
            <span class="info-box-icon"><i class="fa fa-bookmark-o"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Bookmarks</span>
                <span class="info-box-number">41,410</span>
                <div class="progress">
                    <div class="progress-bar" style="width: 70%"></div>
                </div>
                <span class="progress-description">
            70% Increase in 30 Days
          </span>
            </div><!-- /.info-box-content -->
        </div><!-- /.info-box -->
    </div><!-- /.col -->
    <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box bg-green">
            <span class="info-box-icon"><i class="fa fa-thumbs-o-up"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Likes</span>
                <span class="info-box-number">41,410</span>
                <div class="progress">
                    <div class="progress-bar" style="width: 70%"></div>
                </div>
                <span class="progress-description">
            70% Increase in 30 Days
          </span>
            </div><!-- /.info-box-content -->
        </div><!-- /.info-box -->
    </div><!-- /.col -->
    <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box bg-yellow">
            <span class="info-box-icon"><i class="fa fa-calendar"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Events</span>
                <span class="info-box-number">41,410</span>
                <div class="progress">
                    <div class="progress-bar" style="width: 70%"></div>
                </div>
                <span class="progress-description">
            70% Increase in 30 Days
          </span>
            </div><!-- /.info-box-content -->
        </div><!-- /.info-box -->
    </div><!-- /.col -->
    <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box bg-red">
            <span class="info-box-icon"><i class="fa fa-comments-o"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Comments</span>
                <span class="info-box-number">41,410</span>
                <div class="progress">
                    <div class="progress-bar" style="width: 70%"></div>
                </div>
                <span class="progress-description">
            70% Increase in 30 Days
          </span>
            </div><!-- /.info-box-content -->
        </div><!-- /.info-box -->
    </div><!-- /.col -->
</div>

{/block}