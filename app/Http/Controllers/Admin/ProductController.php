<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\GoodModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //
    private $file = "Admin.product-";
    private $goodModel;

    public function __construct()
    {
        $this->goodModel = new GoodModel();
    }

    public function add()
    {
        return view($this->file . "add");
    }


    public function brand()
    {
        return view($this->file . "brand");
    }

    /**
     * 房间酒店管理
     * @return $this
     */
    public function cateGory()
    {
        $room = DB::table('hotel_room')->leftJoin('hotel', 'hotel.hotel_id', '=', 'hotel_room.room_hotel_id')->paginate(10);
        return view($this->file . "category")->with([
            'room' => $room
        ]);
    }


    public function cateGoryAdd()
    {
        return view($this->file . "category-add");
    }

    /**
     * 商品管理
     * @param Request $request
     * @return $this
     */
    public function lists(Request $request)
    {
        $good = DB::table('good')->orderBy('good_id', 'desc')->paginate(10);
        return view($this->file . "list")->with([
            'good' => $good
        ]);
    }

    /**
     * 添加商品信息
     */
    public function addGood(Request $request)
    {
        $row = $this->goodModel->insertGood(array(
            'good_name' => $request->input('good_name'),
            'good_freight' => $request->input('good_freight'),
            'good_amount' => $request->input('good_amount'),
            'good_details' => $request->input('good_details'),
            'good_recommend' => time(), // 排名
            'good_time' => time()  // 添加时间
        ));
        if ($row) {
            echo '<script type="text/javascript">alert("添加成功")</script>';
            return back();
        } else {
            echo '<script type="text/javascript">alert("添加成功")</script>';
            return back();
        }
    }

}
