<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\ErrorCorrectionLevel;
use Endroid\QrCode\LabelAlignment;

//use Endroid\QrCode\Response\QrCodeResponse;
class QrcodeController extends Controller
{
    public function index1()
    {


        $qrCode = new QrCode('Life is too short to be generating QR codes');

        header('Content-Type: ' . $qrCode->getContentType());
//        echo $qrCode->writeString();
        exit($qrCode->writeString());
    }

    public function index()
    {
//        halt(ROOT_PATH);
        // Create a basic QR code
        $qrCode = new QrCode('http://lbbfront.szmou.com/');
        $qrCode->setSize(300);

        // Set advanced options
        $qrCode->setWriterByName('png');
        $qrCode->setMargin(10);
        $qrCode->setEncoding('UTF-8');
        $qrCode->setErrorCorrectionLevel(ErrorCorrectionLevel::HIGH);
        $qrCode->setForegroundColor(['r' => 0, 'g' => 0, 'b' => 0, 'a' => 0]);
        $qrCode->setBackgroundColor(['r' => 255, 'g' => 255, 'b' => 255, 'a' => 0]);
        $qrCode->setLabel('lbbShop', 16, ROOT_PATH . '/public/assets/noto_sans.otf', LabelAlignment::CENTER);
        $qrCode->setLogoPath(ROOT_PATH . '/public/assets/2.png');
        $qrCode->setLogoWidth(100);
//        $qrCode->setRoundBlockSize(true);
        $qrCode->setValidateResult(false);

        // Directly output the QR code
        header('Content-Type: ' . $qrCode->getContentType());
//        echo $qrCode->writeString();

//        exit($qrCode->writeString());
//        // Save it to a file
        $qrCode->writeFile(ROOT_PATH. '/public/assets/lbb.png');
//
//        // Create a response object
//        $response = new QrCodeResponse($qrCode);
    }
}
