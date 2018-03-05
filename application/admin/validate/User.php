<?php
/**
 * Created by PhpStorm.
 * User: NE_July
 * Date: 2018/2/5
 * Time: 11:10
 */

namespace app\admin\validate;


use think\Validate;

class User extends Validate
{
    protected $rule = [
        'username'  =>  'require|max:25',
        'nikename'  =>  'require|max:25',
        'password_hash'  =>  'require|max:25',
        'telephone'  =>  'require|max:25',
        'email' =>  'email',
    ];
}