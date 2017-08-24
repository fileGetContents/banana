<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ObeginController extends Controller
{
    public function order()
    {
        return view($this->web . "order");
    }

    public function other()
    {
        return view($this->web . "other");
    }

    public function otherJoin()
    {

        return view($this->web . "otherjoin");
    }

    public function otherPost()
    {
        return view($this->web . "otherpost");
    }

    public function outdoor()
    {
        return view($this->web . 'outdoor');
    }
}
