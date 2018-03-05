<?php

namespace app\admin\controller;

use app\admin\model\User;
use think\Controller;
use think\Validate;

class UserController extends BaseController
{
    public function index()
    {
        $users = User::order('id')->paginate(5);
        return view('index',compact('users'));
    }

    public function add()
    {
        if (request()->isPost()){
            $user = new User();
            $data = [
                'username' =>input('username'),
                'auth_key' => password_hash(rand(0,9999),PASSWORD_DEFAULT),
                'password_hash' => password_hash(input('password'),PASSWORD_DEFAULT),
                'email' =>  input('email'),
                'telephone' => input('telephone'),
                'nikename' => input('nikename')
            ];
            $validate =Validate('User');
            if(!$validate->check($data)){
//                dump($validate->getError());
                $this->error($validate->getError());
            }
            if ($user->data($data)->save()) {
                $this->success('添加用户信息成功！','index');
            }else{
                $this->error('添加用户信息失败！');
            }
        }
        return view('add');
    }
}
