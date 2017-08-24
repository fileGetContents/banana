<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MbeginController extends Controller
{
    public function made()
    {
        return view($this->web . "made");
    }

    public function message()
    {
        return view($this->web . "message");
    }

    public function moneybag()
    {
        return view($this->web."moneybag");
    }

}
