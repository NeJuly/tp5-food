<?php

namespace app\admin\model;

use think\Model;

class AuthGroup extends Model
{
    public function getStatusAttr($value)
    {
        $status = [
            '0'=>'<i class="fa fa-minus-circle"></i>',
            '1'=>'<i class="fa  fa-plus-circle"></i>'
        ];
        return $status[$value];
    }

    public function getStatusTextAttr($value,$data)
    {

        return str_repeat('checked = checked',$data['status']);
    }
//    public function authRules()
//    {
//        return $this->belongsToMany('AuthRule');
//    }
}
