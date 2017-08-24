<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TbeginController extends Controller
{

    public function talk()
    {
        return view($this->web . "talk");
    }

}
