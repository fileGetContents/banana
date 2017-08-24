<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HbeginController extends Controller
{
    public function home()
    {
        return view($this->web . "home");
    }


    public function homeClass()
    {

        return view($this->web . "home-class");
    }


    public function homeNew()
    {
        return view($this->web . "home-new");
    }

    public function homeSpecial()
    {
        return view($this->web . "home-special");
    }

    public function hotel()
    {
        return view($this->web . "hotel");
    }
}
