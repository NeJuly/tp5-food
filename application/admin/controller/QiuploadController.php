<?php

namespace app\admin\controller;

use think\Controller;
// 引入鉴权类
use Qiniu\Auth;
// 引入上传类
use Qiniu\Storage\UploadManager;

class QiuploadController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function upload()
    {
        $file = $this->request->file('file');
        // 移动到框架应用根目录/public/uploads/ 目录下
        if ($file) {
            $info = $file->move(ROOT_PATH . 'public' . DS . 'uploades');
            if ($info) {
                // 成功上传后 获取上传信息
                // 输出 jpg
//                echo $info->getExtension();
                // 输出 20160820/42a79759f284b767dfcb2a0197904287.jpg
//               exit($info->getSaveName());
                // 输出 42a79759f284b767dfcb2a0197904287.jpg
//                echo $info->getFilename();
                $arr = [
                    'msg' => '上传成功',
                    'path' => $info->getSaveName(),
                    'error' => null
                ];
                exit(json_encode($arr));
            }
        }
    }

    public function qiupload()
    {
        // 需要填写你的 Access Key 和 Secret Key
        $accessKey = "kJc0TSbjQPkq8ri3OpCmbty3CrB5wfgdbXmmifaR";
        $secretKey = "h4FPBIS4qUCq0uTBxjfdhWQzQBXLXjU4WbCvM_G4";
        $bucket = "order";
        $domain = 'p3mp2o7uf.bkt.clouddn.com/';
        // 构建鉴权对象
        $auth = new Auth($accessKey, $secretKey);
        // 生成上传 Token
        $token = $auth->uploadToken($bucket);
        // 要上传文件的本地路径
//        $file = $this->request->file('file');
        $filePath =  $file = $_FILES['file']['tmp_name'];
        // 上传到七牛后保存的文件名
        $key = uniqid();
        // 初始化 UploadManager 对象并进行文件的上传。
        $uploadMgr = new UploadManager();
        // 调用 UploadManager 的 putFile 方法进行文件的上传。
        list($ret, $err) = $uploadMgr->putFile($token, $key, $filePath);

        if ($err !== null) {
            $arr = [
                'msg' => '上传成功',
                'path' => $domain.$key,
                'error' => null
            ];
            exit(json_encode($arr));
        } else {
            var_dump($ret);
        }
    }
    public function delQiniu($key){
        $accessKey = "kJc0TSbjQPkq8ri3OpCmbty3CrB5wfgdbXmmifaR";
        $secretKey = "h4FPBIS4qUCq0uTBxjfdhWQzQBXLXjU4WbCvM_G4";
        $bucket = "order";
        $domain = 'p3mp2o7uf.bkt.clouddn.com';
//        $key = "qiniu.mp4_copy";
        $auth = new Auth($accessKey, $secretKey);
        $config = new \Qiniu\Config();
        $bucketManager = new \Qiniu\Storage\BucketManager($auth, $config);
        $err = $bucketManager->delete($bucket, $key);
        if ($err) {
            print_r($err);
        }
    }
}
