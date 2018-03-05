<?php

namespace app\admin\model;

use think\Model;

class Sms extends Model
{
    // 开启自动写入时间戳字段
    protected $autoWriteTimestamp = true;

    public function getStatusAttr($value)
    {

        $status = [
               '0' => '<i class="layui-icon" style="font-size: 30px; color: #1E9FFF;">&#xe626;</i> ',
                '1'=> '<i class="layui-icon" style="font-size: 30px; color: #1E9FFF;">&#xe627;</i> '
        ];
        return $status[$value];
    }
}
