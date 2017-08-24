<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Http\Model;

class TravelController extends Controller
{
    protected $bananaModel;

    public function __construct()
    {
        $this->bananaModel = new Model\BananaModel();
    }


    public function ajaxLikeAddress(Request $request)
    {
        $address = $this->bananaModel->getLikeAddress(
            $request->input("like"),
            $request->input('start')
        );

    }

    /**
     *旅行列表
     * @param Request $request
     */
    public function getTravelList(Request $request)
    {
        $travel = $this->bananaModel->selectTravelList($request->input("tag", 20), $request->input("skip"));
        echo collect($travel)->toJson();
    }





}
