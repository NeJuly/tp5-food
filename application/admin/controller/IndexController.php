<?php

namespace app\admin\controller;



use think\captcha\Captcha;
use think\Db;
use think\Request;
use think\response\Json;
use think\view\driver\Think;

class IndexController extends BaseController
{
//    public static $flag = 0;
    //
    public function index()
    {
        //tp版本号
        $info['tp'] = THINK_VERSION;
        //php版本
        $info['php'] = PHP_VERSION;
        //操作系统
        $info['win'] = PHP_OS;
        //最大上传限制
        $info['upload_size'] = ini_get('upload_max_filesize');
        //脚本执行时间限制
        $info['execution_time'] = ini_get('max_execution_time').'S';
        //环境
        $sapi = php_sapi_name();
        if($sapi = 'apache2handler') {
            $info['environment'] = 'apache';
        } elseif($sapi = 'cgi-fcgi') {
            $info['environment'] = 'cgi';
        } else {
            $info['environment'] = 'cli';
        }
        //剩余空间大小
        //$info['disk'] = round(disk_free_space("/")/1024/1024,1).'M';
        $this->assign('info',$info);

//        dump($info);exit;
        /**
         *网站信息
         */
//        $web['user_num'] = Db::name('admin')->count();
//        $web['admin_cate'] = Db::name('admin_cate')->count();
//        $ip_ban = Db::name('webconfig')->value('black_ip');
//        $web['ip_ban'] = empty($ip_ban) ? 0 : count(explode(',',$ip_ban));
//
//        $web['article_num'] = Db::name('article')->count();
//        $web['status_article'] = Db::name('article')->where('status',0)->count();
//        $web['top_article'] = Db::name('article')->where('is_top',1)->count();
//        $web['file_num'] = Db::name('attachment')->count();
//        $web['status_file'] = Db::name('attachment')->where('status',0)->count();
//        $web['ref_file'] = Db::name('attachment')->where('status',-1)->count();
//        $web['message_num'] = Db::name('messages')->count();
//        $web['look_message'] = Db::name('messages')->where('is_look',0)->count();
//
//        if(Cookie::has('remember')) {
//            $web['remember'] = Cookie::get('remember');
//            //return $web['remember'];
//        } else {
//            $web['remember'] = '';
//        }
//
//        $this->assign('web',$web);

        return $this->fetch();
    }

    public function login()
    {
        if (\request()->isPost()) {

            $username = input('post.username');

            $password = input('post.password');

            if ($username == ''){
//                self::$flag += 1;
                $this->error('用户名不能为空',null,'',1);
            }
            if ($password == ''){
//                self::$flag += 1;
                $this->error('密码不能为空',null,'',1);
            }
            $captcha = new Captcha();
            if (!$captcha->check(input('post.captcha'))) {
                $this->error('验证码错误',null,'',1);
            }
            $user = Db::name('admin')->where('username',$username)->find();
//            dump($user);exit;
            $a = input('post.rememberMe');
            if($user && $user['password'] == password_verify($password,$user['password']) ){
                if (isset($a)){
                    cookie('autoLogin',[$user['id'],$user['username']],3600);

                }
                session('username',$user['username']);
               $this->success('登录成功','index','',3);
            }else{
//                self::$flag += 1;
                $this->error('密码错误',null,'',1);
            }
        }

        return $this->fetch('login');
    }

    public function captcha()
    {
        $captcha = new Captcha();
        if (!$captcha->check(input('post.captcha'))) {
            return \json([
                'status' =>0,
                'msg'=>'验证码错误',
                'data'=>null
            ]);
        }
    }

    public function test()
    {
        if (\request()->isPost()){

            $user = Db::name('user')->where('username','=',input('post.username'))->find();

            if ($user){
                if (input('post.username') ==$user->username){
                    if (input('post.password') != $user->password){
                        return \json([
                            'status' =>0,
                            'msg'=>'密码错误',
                            'data'=>null
                        ]);

                    }

                }else{
                    return \json([
                        'status' =>0,
                        'msg'=>'用户名不存在',
                        'data'=>null
                    ]);
                }
            }else{
                return \json([
                    'status' =>0,
                    'msg'=>'用户名不能为空',
                    'data'=>null
                ]);

            }
        }
    }

    public function logout($username)
    {
//        dump($username);exit;
        session('username',null);
        cookie('autoLogin',null);

        return $this->redirect('login');
    }
}
