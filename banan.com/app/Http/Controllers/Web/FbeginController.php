<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class FbeginController extends Controller
{
    public function frame()
    {
        return view($this->web . "frame");
    }

    public function friend()
    {
        return view($this->web . "friend");
    }

    public function friendList()
    {
        return view($this->web . "friend-list");
    }
}
