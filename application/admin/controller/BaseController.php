<?php

namespace app\admin\controller;

use think\auth\Auth;
use think\Config;
use think\Controller;
use think\Db;

class BaseController extends Controller
{
    public function _initialize()
    {
        //得到当前控制器和方法
        $url = strtolower(request()->controller().'/'.request()->action());


            //是否点击了记住密码，从而保存了cookie值
            if ($autoLogin = cookie('autoLogin')){
                $user = Db::name('admin')->find(['id'=>$autoLogin[0],'username'=>$autoLogin[1]]);
                if ($user){
                    session('username',$user['username']);
                }
            }

        //如果不是白名单的路由
        //通过和config配置文件中的控制器/方法 判定是否在里面
        if (in_array($url,Config::get('url_route')) === false){
            if(!session('username')){
                $this->redirect('index/login');
            }
            //权限验证
//            $auth = new Auth();
//            $user = Db::name('admin')->where('username','=',session('username'))->find();
////            dump($user);exit;
//            if (!$auth->check($url,$user['id'])){
//                $this->error('你没有权限',url('/admin/index/index'));
//            }
        }




        parent::_initialize();
    }
    //
}
