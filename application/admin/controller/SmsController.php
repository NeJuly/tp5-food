<?php

namespace app\admin\controller;

use app\admin\model\Sms;
use Mrgoon\AliSms\AliSms;
use think\Controller;
use think\Db;

class SmsController extends Controller
{
    public function index()
    {
        $smses = Sms::order('id')->paginate(4);
        $smsCount = Db::name('sms')->count();
        return view('index',compact('smsCount','smses'));
    }

    public function add()
    {
        if (request()->isPost()){
            $data = [
                'access_key' => input('access_key'),
                'access_secret' => input('access_secret'),
                'sign_name' => input('sign_name'),
                'template_code' =>input('template_code')
            ];
            $data['status'] = isset($_POST['status']) ? 1 : 0;
            $sms = new Sms();
            if ($sms->data($data)->save()) {
                $this->success('添加模板成功！','index');
            }
        }
        return view();
    }

    public function sendSms($mobile)
    {
        $code = rand(1000,9999);
        $sms = Sms::get(1);
        $config = [
            'access_key' => $sms->access_key,
            'access_secret' => $sms->access_secret,
            'sign_name' => $sms->sign_name,
        ];

        $aliSms = new AliSms();
        $response = $aliSms->sendSms($mobile, $sms->template_code, ['code'=> $code], $config);
//        halt($response);
        if ($response->Message === 'OK' && $response->Code === 'Ok'){
            session('tel_'.$mobile,$code);
            echo session('tel'.$mobile);exit;
        }
    }
}
