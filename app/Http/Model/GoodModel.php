<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class GoodModel extends Model
{
    protected $table = "good";
    protected $order = "good_order";

    /**
     *获取一个商品信息
     * @param $good_id int 商品id
     * @return object
     */
    public function getGoodInfoFirst($good_id)
    {
        return DB::table($this->table)->where('good_id', '=', $good_id)->first();
    }

    /**
     * 获取特定的商品套餐内容
     * @param $good_id
     * @return mixed
     */
    public function getGoodAppend($good_id)
    {
        return DB::table("good_information")->where("info_good_id", "=", $good_id)->get();
    }


    /**
     * 获取特定的方式
     * @param $tag  int 方式
     * @return mixed
     */
    public function getTagGood($tag)
    {
        return
            DB::table($this->table)
                ->where("good_tag", '=', $tag)
                ->orderBy("good_recommend", "asc")
                ->get();
    }


    /**
     * @param $name string 名称
     * @param int $limit int 偏移量
     * @return mixed
     */
    public function getLikeList($name, $skip = 0)
    {
        return
            DB::table($this->table)
                ->take(5)
                ->skip($skip)
                ->where("good_name", "like", "%$name%")
                ->orderBy('good_recommend', 'asc')
                ->get();
    }


    /**
     * 按时间获取最新商品
     */
    public function getByTime($skip = 0)
    {
        return
            DB::table($this->table)
                ->orderBy("good_id", "DESC")
                ->skip($skip)
                ->take(5)
                ->get();
    }


    /**
     * 添加订单号
     * @param $order
     */
    public function insertGoodOrder($order)
    {
        return DB::table($this->order)->insert($order);
    }


    /**
     * 添加商品
     * @param $good
     * @return mixed
     */
    public function insertGood($good)
    {
        return DB::table($this->table)->insert($good);
    }

    /**
     * 获取用户订单
     * @param $pay_tag  int
     * @param $user_id  int
     * @return mixed
     */
    public function selectGoodOrder($pay_tag, $user_id)
    {
        if ($pay_tag == -1) {
            return
                DB::table($this->order)
                    ->where('order_user_id', '=', $user_id)
                    ->get();
        } else {
            return
                DB::table($this->order)
                    ->where('order_pay_tag', '=', $pay_tag)
                    ->where('order_user_id', '=', $user_id)
                    ->get();
        }
    }

    /**
     * 检查存在这个订单号
     */
    public function existOrderNum($orderNum)
    {
        return DB::table($this->order)
            ->select('order_num')
            ->where("order_num", '=', $orderNum)
            ->get();
    }

}
