<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Model;

class GoodController extends Controller
{

    protected $good;

    public function __construct()
    {
        $this->good = new Model\GoodModel();
    }

    /**
     * 获取某个商品详情
     * @param Request $request
     */
    public function getGoodInfo(Request $request)
    {
        $return["good"] = $this->good->getGoodInfoFirst($request->input("id", 1));
        $return["info"] = $this->good->getGoodAppend($request->input("id", 1));
        echo collect($return)->toJson();
    }


    /**
     * 获取剩余份数
     * @param Request $request
     */
    public function getGoodAmount(Request $request)
    {
        $amount = $this->good->getGoodInfoFirst($request->input('id', 1));
        echo $amount->good_amount;
    }

    /**
     * 获取特定的位置商品
     * @param Request $request
     */
    public function getTagGood(Request $request)
    {
        $good = $this->good->getTagGood($request->input('tag', 20));
        echo collect($good)->toJson();
    }

    /**
     * 获取搜索商品
     */
    public function getGoodLikeList(Request $request)
    {
        $return = $this->good->getLikeList($request->input('title', ""), $request->input("limit", 0));
        echo collect($return)->toJson();
    }

    /**
     * 获取最新的商品
     */
    public function getByTimeDesc(Request $request)
    {
        $return = $this->good->getByTime($request->input("limit", 0));
         // dump(collect($return)->toArray());
        echo collect($return)->toJson();
    }


}
