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
    private $bananModel;

    public function __construct()
    {
        $this->goodModel = new Model\GoodModel();
        $this->bananModel = new Model\BananaModel();
    }

    public function add()
    {
        return view($this->file . "add");
    }

    /**
     * 旅游管理
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function brand()
    {
        $travel = DB::table('travel')->paginate(10);
        return view($this->file . "brand")->with([
            'travel' => $travel
        ]);
    }

    /**
     * 添加旅游项目
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function brandAdd(Request $request)
    {
        if ($request->isMethod('post')) {
            // 添加旅游信息
            $id = $this->bananModel->insertTravel(array(
                'travel_name' => $request->input('travel_name'),
                'travel_venue' => $request->input('travel_venue'),
                'travel_notice' => $request->input('travel_notice'),
                'travel_voyage' => $request->input('travel_voyage'),
                'travel_bourn' => $request->input('travel_bourn'),
                'travel_expense' => $request->input('travel_expense'),
                'travel_time' => $_SERVER['REQUEST_TIME'],
            ));
            // 添加旅游其他信息
            if (is_numeric($id)) {
                foreach ($request->input('start') as $key => $value) {
                    $this->bananModel->insertTravelInfo(array(
                        'info_start' => strtotime($value),
                        'info_over' => strtotime($request->input('over')[$key]),
                        'info_week' => $request->input('week')[$key],
                        'info_travel_id' => $id,
                    ));
                }
                echo '<script type="text/javascript">alert("添加成功")</script>';
            } else {
                echo '<script type="text/javascript">alert("添加失败")</script>';
            }
        }

        return view($this->file . "brand_add");
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

    /**
     * 添加房间
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function cateGoryAdd(Request $request)
    {
        if ($request->isMethod("post") == 'post') {

        }

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
            'good_name' => $request->input('good_name'), 'good_freight' => $request->input('good_freight'), 'good_amount' => $request->input('good_amount'), 'good_details' => $request->input('good_details'), 'good_recommend' => time(), // 排名
            'good_time' => time()  // 添加时间
        ));
        if ($row) {
            echo '<script type="text/javascript">alert("添加成功")</script>';
            return back();
        } else {
            echo '<script type="text/javascript">alert("添加失败")</script>';
            return back();
        }
    }

}
