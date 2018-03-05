<?php

namespace app\admin\model;

use think\Model;

class AuthRule extends Model
{
    public function getStatusAttr($value)
    {
        $status = [
            '0'=>'<i class="fa fa-minus-circle"></i>',
            '1'=>'<i class="fa  fa-plus-circle"></i>'
        ];
        return $status[$value];
    }
}
