<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class EnrolModel extends Model
{
    protected $table = "enrol";

    public function getTravelUser($travel_id = 2)
    {
        $travelUser = DB::table($this->table)
            ->leftJoin('user', 'enrol.enrol_user_id', '=', 'user.user_id')
            ->where("enrol_travel_id", '=', $travel_id)
            ->get();
        return $travelUser;
    }

}
