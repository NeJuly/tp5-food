<?php

namespace app\admin\model;

use think\Model;

class GoodsCategory extends Model
{
    public function getDepthAttr($value)
    {
        $dep = str_repeat('----',$value);
        return $dep;
    }

//    public function getDepthTextAttr($value,$data)
//    {
//        $deps = str_repeat('----',$value).$data;
//        return $deps[$data['depth_text']];
//    }
    public function getNameTextAttr($value,$data)
    {
        return str_repeat('---',$data['depth']).$data['name'];
    }
    public function goods()
    {
        return $this->belongsTo('Goods','goods_category_id','id');
    }
}
