<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class KimsModel extends Model
{

    protected $table = "user_kims";

    /**
     * 添加数组
     * @param $array
     * @return mixed
     */
    public function insertKims($array)
    {
        return DB::table($this->table)->insert($array);
    }

    /**
     * 查询代金卷
     * @param $user_id int 用户id
     */
    public function selectKimsFirst($user_id)
    {
        return DB::table($this->table)
            ->where('kims_user_id', '=', $user_id)
            ->where('kims_over_time', '>', time() + 30000)
            ->orwhere('kims_over_time', '=', 0)
            ->where('kims_tag', '=', 0)
            ->get();
    }

    /**
     * 更新代金券
     * @param $where array
     * @return mixed
     */
    public function updateKims($where, $update)
    {
        return DB::table($this->table)
            ->where($where)
            ->update($update);
    }

}
