<?php

namespace app\admin\controller;

use app\admin\model\Admin;
use think\Controller;
use think\Db;

class AdminController extends Controller
{
    public function index()
    {
        $admins = Admin::order('id')->paginate(5);
        $adminsCount = Db::name('admin')->count();
        return $this->fetch('index',compact('admins','adminsCount'));
    }
}
