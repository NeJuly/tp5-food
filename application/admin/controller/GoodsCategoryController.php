<?php

namespace app\admin\controller;

use app\admin\model\GoodsCategory;
use think\Controller;
use think\Db;

class GoodsCategoryController extends BaseController
{
    public function index()
    {
//        $cates = new GoodsCategory();
//        $cates = $cates->order('path')->select();
        $cates = GoodsCategory::order('path')->paginate(8);
//        $cates = collection($cates)->toArray();
//        foreach ($cates as $cate){
//            var_dump($cate->name_text);
//        }
//        exit;
        $cateCount = Db::name('goods_category')->count();
        return $this->fetch('index',compact('cates','cateCount'));
    }

    public function add()
    {
        $cates = new GoodsCategory();
        $cates = $cates->order('path')->select();
        if (request()->isPost()){
            $cate = new GoodsCategory();
//            $cate->name = input('name');$cate->intro = input('intro');$cate->parent_id = input('parent_id');
            $cate->data(input())->save();

            $parentCate = GoodsCategory::get(input('parent_id'));

            $cate->depth = $parentCate->getData('depth') +1;
            $cate->path = $parentCate->path.$cate->id.'@';
            if ($cate->save()) {
                $this->success('增加商品分类成功！',url('add'));
            }else{
                $this->error('增加商品分类失败!',url('index'));
            }


        }
        return view('add',compact('cates'));
    }

    public function edit($id)
    {
        $goodsCate = GoodsCategory::get($id);
//        halt($cate);
        $cates = new GoodsCategory();
        $cates = $cates->order('path')->select();

        if (request()->isPost()){

            if (substr_count($goodsCate->path,'@') >1){
                $goodsCates = $goodsCate->where('path','like',"{$goodsCate->path}%")->select();
                $goodsCatesArr = collection($goodsCates)->toArray();
                $goodsCatesCount = count($goodsCatesArr);

                if ($goodsCatesCount > 1) {
                    if (input('parent_id') == $goodsCate->parent_id) {
                        $goodsCate->data(input())->save();
                        $this->success('修改商品分类信息成功', 'index');
                    }
                }

                $this->error('当前分类含有子类，请勿移动！','index');
            }
            if (substr_count($goodsCate->path,'@') == 1){
                $goodsCates = $goodsCate->where('path','like',"{$goodsCate->path}%")->select();
                $goodsCatesArr = collection($goodsCates)->toArray();
                $goodsCatesCount = count($goodsCatesArr);
                if ($goodsCatesCount > 1){
//                    dump(input('parent_id'));exit;
                    if (input('parent_id') == $goodsCate->parent_id){
                        $goodsCate->data(input())->save();
                        $this->success('修改商品分类中的信息成功','index');
                    }
                    $this->error('当前分类中含有子类，请勿移动！','index');
                }
            }

        }

        return view('edit',compact('cates','goodsCate'));
    }

    public function del($id)
    {
        $cate = GoodsCategory::get($id);
        if (substr_count($cate->path,'@') > 1){
            $cates =  $cate->where('path','like',"%{$cate->path}%")->select();
            $cates = collection($cates)->toArray();
            if (count($cates) == 1 ) {
                $cate->delete();
                $this->success('删除商品分类成功','index');
            }
            $this->error('当前分类含有子类，请勿删除！','index');
        }
        if (substr_count($cate->path,'@') == 1){
            $cates =  $cate->where('path','like',"{$cate->path}%")->select();
            $cates = collection($cates)->toArray();
            if (count($cates) == 1 ) {
                $cate->delete();
                $this->success('删除商品分类成功！','index');
            }
            $this->error('当前分类中含有子类，请勿删除！','index');
        }
    }
}
