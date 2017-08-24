<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Http\Model;

class TravelController extends Controller
{
    protected $banana;

    public function __construct()
    {
        $this->banana = new Model\BananaModel();
    }


    public function ajaxLikeAddress(Request $request)
    {
        $address = $this->banana->getLikeAddress(
            $request->input("like"),
            $request->input('start')
        );
        echo collect($address)->toJson();

        foreach ($address as $v) {

        }
    }



}
