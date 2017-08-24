<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PictureController extends Controller
{
    //
    private $file = "Admin.picture-";

    public function add()
    {


        return view($this->file . "add");
    }


    public function lists()
    {


        return view($this->file . "list");
    }

    public function show()
    {

        return view($this->file . "show");
    }
}
