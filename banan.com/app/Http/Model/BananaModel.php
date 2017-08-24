<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class BananaModel extends Model
{
    protected $table = "travel";

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
    public function getLikeAddress($like, $start = 0)
    {
        return DB::table($this->table)
            ->where('travel_tag', "=", 20)
            ->where('travel_name', "like", "%" . $like . "%")
            ->orderBy("travel_sort", "asc")
            ->skip($start)
            ->take(5)
            ->get();
    }

    /**
     * @param $id int id
     * @return mixed
     */
    public function getInfoFirst($id)
    {
        return DB::table($this->table)->where('travel_id', '=', $id)->first();
    }
}
