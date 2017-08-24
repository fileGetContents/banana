<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SystemController extends Controller
{
    //
    private $file = "Admin.system-";

    public function base()
    {


        return view($this->file . "base");
    }

    public function cateGory()
    {

        return view($this->file . "category");
    }


    public function cateGoryAdd()
    {


        return view($this->file . "categoryadd");
    }

    public function date()
    {

        return view($this->file . "date");
    }

    public function log()
    {
        return view($this->file . "log");

    }

    public function shielding()
    {
        return view($this->file . "shielding");
    }


}

