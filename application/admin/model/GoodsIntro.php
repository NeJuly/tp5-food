<?php

namespace app\admin\model;

use think\Model;

class GoodsIntro extends Model
{
    public function goods()
    {
        return $this->belongsTo('Goods','id','goods_id');
    }
}
