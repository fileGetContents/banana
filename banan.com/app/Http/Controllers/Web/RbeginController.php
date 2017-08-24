<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class RbeginController extends Controller
{
    public function register()
    {
        return view($this->web . "register");
    }

}
