<?php

namespace app\admin\controller;

use app\admin\model\AuthGroup;
use app\admin\model\AuthRule;
use think\Controller;
use think\Db;

class AuthController extends BaseController
{
    //authRule 列表展示
    public function index()
    {
        $authRules = AuthRule::order('id')->paginate(10);
        $authCount = Db::name('auth_rule')->count();
        return view('index',compact('authRules','authCount'));
    }
    //authRole 添加
    public function add()
    {
        if (request()->isPost()){
            $authRule = new AuthRule();
            $status = isset($_POST['status']) ? 1 : 0;

            $data = [
                'name'=> input('name'),
                'title'=> input('title'),
                'status' => $status
            ];
            if ($authRule->data($data)->save()) {

                $this->success('添加成功',url('index'),null);
            }

        }
        return view('add');
    }

    public function rindex()
    {
//        $authGroups = AuthGroup::get(1);
//        $rules = explode(',',$authGroups->rules);
//        $pathTitle = '';
//        foreach ($rules as $rule){
//            $pathTitle .= AuthRule::get((int)$rule)->title.'';
//        }
//        halt($pathTitle);
        $authGroups = AuthGroup::order('id')->paginate(10);
        $groupCount = Db::name('auth_group')->count();
        return view('rindex',compact('authGroups','groupCount'));
    }

    public function radd()
    {
        $rules = AuthRule::all();
        if (request()->isPost()){
            $authGroup = new AuthGroup();
            $status = isset($_POST['status']) ? 1 : 0;

            $data = [
                'title'=> input('title'),
                'rules'=> input('rules'),
                'status' => $status
            ];

//            halt($data);
            if ($authGroup->data($data)->save()) {

                $this->success('添加角色成功',url('index'),null);
            }

        }
        return view('radd',compact('rules'));
    }

    public function giveAuth()
    {

            $id = input('id');
            $authGroup = AuthGroup::get($id);
            $authRules = AuthRule::all();
        return view('giveauth',compact('authGroup','authRules'));
    }
}
