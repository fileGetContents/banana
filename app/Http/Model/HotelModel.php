<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class HotelModel extends Model
{
    protected $table = "hotel";
    protected $roomTable = "hotel_room";
    protected $orderTable = "hotel_order";


    /**
     * 添加数据房间订单
     * @param $hotel array
     * @return mixed
     */
    public function insertOrder($hotel)
    {
        return DB::table($this->orderTable)->insert($hotel);
    }


    /**
     * 添加房间
     * @param  $insert array
     * @return mixed
     */
    public function insertRoom($insert)
    {
        return DB::table($this->roomTable)->insert($insert);
    }

    /**
     * 分页获取详细酒店信息
     * @param $skip
     * @return mixed
     */
    public function selectHotelList($skip = 0)
    {
        return DB::table($this->table)->orderBy("hotel_order", "ASC")->take(5)->skip($skip)->get();
    }


    /**
     * 获取一个酒店详细信息
     * @param $hotel_id
     * @return mixed
     */
    public function selectFirstHotel($hotel_id)
    {
        return DB::table($this->table)->where("hotel_id", '=', $hotel_id)->first();
    }

    /**
     * 获取酒店的房间信息
     * @param $room_hotel_id
     * @return mixed
     */
    public function selectRoomList($room_hotel_id)
    {
        return DB::table($this->roomTable)->where("room_hotel_id", '=', $room_hotel_id)->get();
    }


    /**
     * 获取相似名字
     */
    public function likeHotelNameList($hotelName, $skip = 0)
    {
        return DB::table($this->table)->where('hotel_name', 'like', '%' . $hotelName . "%")->skip($skip)->take(5)->get();
    }


    /**
     *获取订单号
     * @param $where array
     */
    public function existOrderNum($where)
    {
        return DB::table($this->orderTable)->select('order_num')->where($where)->get();
    }


}
