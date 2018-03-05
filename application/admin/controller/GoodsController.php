<?php

namespace app\admin\controller;

use app\admin\model\Goods;
use app\admin\model\GoodsCategory;
use app\admin\model\GoodsIntro;
use think\Controller;
use Qiniu\Storage\UploadManager;
use Qiniu\Auth;
use Qiniu\Storage\BucketManager;
use think\Db;

class GoodsController extends BaseController
{
    public function index()
    {
        $goods = Goods::order('id')->paginate(5);
        $goodsCount = Db::name('goods')->count();
//            $goods = Goods::get(5);
//            dump($goods->goods_category->name);exit;
        return view('index',compact('goods','goodsCount'));
    }

    public function add()
    {
        $goodsCates = GoodsCategory::all();
        if (request()->isPost()){
            $goods = new Goods();
//            halt(input());
            $goods->logo = input('logo/a')[0];
            $goods->name = input('name');
            $goods->sn = input('sn');
            $goods->shop_price = input('shop_price');
            $goods->goods_category_id = input('goods_category_id');
            $goods->stock = input('stock');
//            echo $goods->create_time;
            if ($goods->save()) {
                $goodsIntro = new GoodsIntro();
                $goodsIntro->goods_id =$goods->id;
                $goodsIntro->content = input('content');
//                dump($id);exit;
                $goodsIntro->save();
                $this->success('添加成功',url('index'));
            }
        }
        return view('add',compact('goodsCates'));
    }

    public function upload()
    {
        $file = request()->file('file');
        // 移动到框架应用根目录/public/uploads/ 目录下
        //ROOT_PATH 为D:\food\
        if($file){
            $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
            if($info){
                // 成功上传后 获取上传信息
                // 输出 jpg
//                echo $info->getExtension();
                // 输出 20160820/42a79759f284b767dfcb2a0197904287.jpg

                $arr = [
                    'msg' => '上传成功!',
                    'path' => '/uploads/'.$info->getSaveName()
                ];
                exit(json_encode($arr));
                // 输出 42a79759f284b767dfcb2a0197904287.jpg
//                echo $info->getFilename();
            }else{
                // 上传失败获取错误信息
                exit($file->getError());
            }
        }
    }

    public function qiniuUpload()
    {

        $accessKey = 'kJc0TSbjQPkq8ri3OpCmbty3CrB5wfgdbXmmifaR';
        $secretKey = 'h4FPBIS4qUCq0uTBxjfdhWQzQBXLXjU4WbCvM_G4';
        $bucketName= 'order';
        $upManager = new UploadManager();
        $auth = new Auth($accessKey, $secretKey);
        $token = $auth->uploadToken($bucketName);
        list($ret, $error) = $upManager->put($token, 'formput', 'hello world');
        var_dump($ret);


    }
}
