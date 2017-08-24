<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class FriendModel extends Model
{
    protected $table = "user_friend";
    protected $userTable = "user";
    protected $dialogue = "user_dialogue";

    public function selUserFriend($user_id)
    {
        return DB::table($this->table)
            ->leftJoin(
                $this->userTable,
                $this->userTable . ".user_id", '=', $this->table . ".friend_id"
            )
            ->where('friend_user_id', "=", $user_id)
            ->get();
    }


    public function addCancelFriend($user_id, $friend_id)
    {
        $where = array(
            "friend_user_id" => $user_id,
            "friend_friend_id" => $friend_id
        );
        $whether = $this->isFriend($where);
        if (!is_null($whether)) {
            $row = DB::table($this->table)->where(array(
                'friend_user_id' => $whether->friend_user_id,
                'friend_friend_id' => $whether->friend_friend_id
            ))->delete();
            return $row;
        } else {
            $row = DB::table($this->table)->insert(array(
                "friend_user_id" => $user_id,
                "friend_friend_id" => $friend_id,
                "friend_time" => time()
            ));
            return $row;
        }
    }

    /**
     * 查看是否已经关注
     * @param $array
     * @return mixed
     */
    public function isFriend($array)
    {
        return DB::table($this->table)->where($array)->first();
    }

    /**
     * 添加聊天信息
     * @param $insert  array
     * @return mixed
     */
    public function insertDialogue($insert)
    {
        return DB::table($this->dialogue)->insert($insert);
    }

    /**
     * 修改消息状态
     * @param $where array  条件
     * @param $update array 更新内容
     * @return mixed
     */
    public function updateDialogue($where, $update)
    {
        return DB::table($this->dialogue)->where($where)->update($update);
    }

    /**
     * 获取信息记录
     * @param $where
     */
    public function selectDialogue($user_id, $friend_id)
    {

        return DB::table($this->dialogue)
            ->where(array('dialogue_friend_id' => $friend_id))
            ->orwhere(array('dialogue_user_id' => $user_id))
            ->orwhere(array('dialogue_user_id' => $friend_id))
            ->orwhere(array('dialogue_friend_id' => $user_id))
            ->orderBy('dialogue_time', 'DESC')
            ->take(50)
            ->get();
    }

    /**
     * 获取用户的关于关注对象的消息
     * @param  $friend_id int 关注对象id
     * @param $user_id  int
     * @return mixed
     */
    public function selectNumDialogue($user_id, $friend_id)
    {
        echo 1;
        return DB::table($this->dialogue)
            ->where(array('dialogue_friend_id' => $friend_id))
            ->orwhere(array('dialogue_user_id' => $user_id))
            ->orwhere(array('dialogue_user_id' => $friend_id))
            ->orwhere(array('dialogue_friend_id' => $user_id))
            ->where(array('dialogue_tag' => 0))
            ->count();
    }

}

