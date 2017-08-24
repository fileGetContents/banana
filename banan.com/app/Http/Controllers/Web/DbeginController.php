<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class DbeginController extends Controller
{

    public function details()
    {

        return view($this->web . "details");
    }

}
