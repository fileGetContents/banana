<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
class IndexController extends Controller
{

    private $file = "Admin.";


    public function __construct()
    {
    }

    public function login()
    {
        // echo 111;
        return view($this->file . "load");
    }

    public function index()
    {
        return view($this->file . "index");
    }

    /**
     * 系统首页
     */
    public function welcome()
    {

        return view($this->file . "welcome");
    }


}
