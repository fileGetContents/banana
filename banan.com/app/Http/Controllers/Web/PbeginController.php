<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PbeginController extends Controller
{
    public function pannel()
    {
        return view($this->web . "pannel");
    }

    public function pay()
    {
        return view($this->web . 'pay');
    }

    public function pay2()
    {
        return view($this->web . "pay2");
    }

    public function payOrder()
    {
        return view($this->web . "payorder");
    }

    public function payOrder2()
    {
        return view($this->web . "payorder2");
    }


    public function person()
    {
        return view($this->web . "person");
    }

    public function post()
    {

        return view($this->web . "post");
    }

    public function pra()
    {
        return view($this->web . "pra");
    }
}
