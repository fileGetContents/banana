<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Crypt;

class UserModel extends Model
{
    protected $table = "user";
    protected $address = "user_address";

    public function getUserInfoFirst($user_id = 1)
    {
        return DB::table($this->table)->where('user_id', '=', $user_id)->first();
    }


    public function updateInfo($array, $user_id = 1)
    {
        $message = DB::table($this->table)->where('user_id', '=', $user_id)->update($array);
        if ($message) {
            return 'success';
        } else {
            return 'error';
        }
    }

    /**
     * 获取用户信息
     * @param $user_telephone string 电话号码
     * @return mixed
     */
    public function Login($user_telephone)
    {
        return DB::table($this->table)->where("user_tel", '=', $user_telephone)->first();
    }

    /**
     * 用户注册
     */
    public function register($user_telephone, $pass)
    {
        $whether = $this->Login($user_telephone);
        //$whether = null;
        if (is_null($whether)) {
            $user_id = DB::table($this->table)->insertGetId(array(
                "user_tel" => $user_telephone,
                'user_pass' => Crypt::encrypt($pass),
                'user_time' => time()
            ));
            if (is_numeric(intval($user_id))) {
                return array("info" => 0, "message" => $user_id);
            } else {
                return array("info" => 1, "message" => "添加失败");
            }
        } else {
            return array("info" => 2, "message" => "已经注册");
        }
    }


    /**
     * 添加住址
     * @param $array array
     * @return mixed
     */
    public function addAddress($array)
    {
        return DB::table($this->address)->insertGetId($array);
    }

    /**
     * 删除地址
     * @param $address_id int 地址id
     * @return mixed
     */
    public function delAddress($address_id)
    {
        return DB::table($this->address)->where("address_id", '=', $address_id)->delete();
    }

    /**
     * 获取用户添加地址
     * @param $user_id   int 用户id
     * @return mixed
     */
    public function selectAddress($user_id)
    {
        return DB::table($this->address)->where("address_user_id", '=', $user_id)->get();
    }

    /**
     * 获取用户地址
     * @param $address_id  int  地址id
     * @return mixed
     */
    public function selectAddressFirst($address_id)
    {
        return DB::table($this->address)->where("address_id", '=', $address_id)->first();
    }

    /**
     * 获取用户信息
     * @param $user_id int 用户id
     * @return mixed
     */
    public function selectUserMoney($user_id)
    {
        return DB::table($this->table)->where('user_id', '=', $user_id)->first();
    }

}


