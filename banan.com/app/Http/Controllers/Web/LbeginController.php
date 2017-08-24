<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class LbeginController extends Controller
{

    public function live()
    {
        return view($this->web . "live");
    }

    public function login()
    {
        return view($this->web . "login");
    }
}
