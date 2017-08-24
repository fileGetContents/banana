<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Crypt;
use Storage;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        dump($request->all());
        dump(Crypt::encrypt("admin"));
        dump(Crypt::decrypt('eyJpdiI6ImFSXC8yVU9OUU80OHBDRHB2SW5VbWFBPT0iLCJ2YWx1ZSI6InhnWm1vcldCVU9aQjRYOEs1VW5OYmc9PSIsIm1hYyI6IjZjNTBhZjAzOTM2OGZmZTgyODNlYTNjNTYwMzk1Mjk4Mjg0ZWZlNDJkZjY2ZDQxN2QyNTk0NjQ1ZDBhMDFiMzAifQ=='));
        echo strlen("201708221650204357696519");
//        Storage::put(
//            rand(1000,9999).'.png',
//            file_get_contents($request->file('file')->getRealPath())
//        );
    }


    /**
     * 通用下载文件
     */
    public function downloadFile(Request $request)
    {
        if(getimagesize($_GET['file'])){
            $type = getimagesize($_GET['file']);
            $filename = $_GET['file'];     //指定文件名
            header('Content-Type:' . $type['mime']);   //指定下载文件类型
            header("Content-Disposition:attachment;filename={$filename}");   //指定下载文件的描述
            header('Content-Length:' . filesize($filename));  //指定下载文件的大小
            readfile($filename);    //将文件内容读取出来并直接输出，以便下载
        } else {
            $file = $_GET['file'];
            header("Content-type: application/octet-stream");
            header('Content-Disposition: attachment; filename="' . basename($file) . '"');
            header("Content-Length: " . filesize($file));
        }
    }
}
