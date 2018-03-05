<?php

namespace app\admin\model;

use think\Model;

class Goods extends Model
{
    protected $autoWriteTimestamp = true;
    public function goodsCategory()
    {
        return $this->hasOne('GoodsCategory','id','goods_category_id');
    }

    public function goodsIntro()
    {
        return $this->hasOne('GoodsIntro','goods_id','id');
    }

    public function getStatusAttr($value)
    {
        $status = ['0'=>'回收站','1'=>'正常'];
        return $status[$value];
    }
}
