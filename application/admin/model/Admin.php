<?php

namespace app\admin\model;

use think\Model;

class Admin extends Model
{
    public function getAddTimeAttr($value)
    {
        $addTime = date('Y-m-d H:i:s', $value);
        return $addTime;
    }
}
