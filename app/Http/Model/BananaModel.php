<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class BananaModel extends Model
{
    protected $table = "travel";

    protected $travelInfo = "travel_info";
    protected $travelOrder = 'travel_order';

    /**
     * 首页获取旅行信息
     * @param $tag
     * @return array
     */
    public function getIndexRecommend($tag)
    {
        $return = DB::table($this->table)
            ->where(array('travel_tag' => 20, 'travel_recommend' => $tag))
            ->limit(4)
            ->orderBy("travel_sort", 'ASC')
            ->get();
        return $return;
    }

    /**
     * @param $like int 关键字
     * @param int $limit_start 开始位置
     * @param int $limit_list 结束位置
     * @return mixed
     */
    public function getLikeAddress($like, $skip = 0)
    {
        return DB::table($this->table)
            ->where('travel_tag', "=", 20)
            ->where('travel_name', "like", "%" . $like . "%")
            ->orderBy("travel_sort", "asc")
            ->skip($skip)
            ->take(5)
            ->get();
    }

    /**
     * 获取一个旅行信息
     * @param $id int id
     * @return mixed
     */
    public function getInfoFirst($id)
    {
        return DB::table($this->table)->where('travel_id', '=', $id)->first();
    }

    /**
     * 获取旅游列表
     * @param $travel_classify int
     * @param $skip int
     */
    public function selectTravelList($travel_classify, $skip = 0)
    {
        return DB::table($this->table)
            ->where("travel_classify", "=", $travel_classify)
            ->where('travel_tag', '=', 20)
            ->orderBy('travel_sort', 'ASC')
            ->take(5)
            ->skip($skip)
            ->get();
    }


    /**
     * 获取旅游时间
     * @return mixed
     */
    public function selectTravelTime($where)
    {
        return DB::table($this->travelInfo)->where($where)->get();
    }


    /**
     * @param $where array
     * 获取一个订单号
     */
    public function existOrder($where)
    {
        return DB::table($this->travelOrder)->where($where)->get();
    }


    /**
     * 添加一个订单号
     * @param $insert  array
     * @return mixed
     */
    public function insertTravelOrder($insert)
    {
        return DB::table($this->travelOrder)->insert($insert);
    }


}
