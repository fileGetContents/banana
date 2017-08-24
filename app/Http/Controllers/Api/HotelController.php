<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Model;

class HotelController extends Controller
{

    protected $hotelModel;

    public function __construct()
    {
        $this->hotelModel = new Model\HotelModel();
    }

    /**
     * 获取酒店列表
     * @param Request $request
     */
    public function getHotelList(Request $request)
    {
        $room = $this->hotelModel->selectHotelList($request->input("skip", 0));
        dump($room);
        echo collect($room)->toJson();
    }

    /**
     * 获取相似名字的酒店
     * @param Request $request
     */
    public function getLikeHotelName(Request $request)
    {
        $hotel = $this->hotelModel->likeHotelNameList(
            $request->input('name', "测试"), $request->input('skip', 0)
        );
        echo collect($hotel);
    }

    /**
     * 获取酒店详细信息
     * @param Request $request
     */
    public function getHotelContent(Request $request)
    {
        $hotel = $this->hotelModel->selectFirstHotel($request->input("id", 1));
        $room = $this->hotelModel->selectRoomList($request->input('id', 1));
        dump(array('hotel' => $hotel, 'room' => $room));
        echo collect(array('hotel' => $hotel, 'room' => $room));
    }


    /**
     * 获取出发第详细地址
     * @param Request $request
     */
    public function getHotelAddress(Request $request)
    {
       echo  "待完善";
    }

}
