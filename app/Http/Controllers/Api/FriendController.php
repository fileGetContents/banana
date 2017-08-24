<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Model;

class FriendController extends Controller
{

    protected $friendModel;

    public function __construct()
    {
        $this->friendModel = new Model\FriendModel();
    }

    /**
     * 获取用户关注对象
     * @param Request $request
     */
    public function getUserFriend(Request $request)
    {
        // 获取用户关注对象
        $friend = $this->friendModel->selUserFriend(session("user_id", 1));
        // 获取未读消息条数
        $friends = array();
        foreach ($friend as $value) {
            $value->num = $this->friendModel->selectNumDialogue(10, 27);
            $friends[] = $value;
        }
        echo collect($friends)->toJson();
    }

    /**
     * 添加/取消关注
     */
    public function addFriend(Request $request)
    {
        $whether = $this->friendModel->addCancelFriend(session('user_id', 1), $request->input("id", 10));
        if ($whether) {
            echo collect(array("info" => 0, "message" => "success"));
        } else {
            echo collect(array("info" => 1, "message" => "error"));
        }
    }

    /**
     * 检查是否关注
     */
    public function isFriend(Request $request)
    {
        $whether = $this->friendModel->isFriend(array(
            'friend_friend_id' => $request->input("friend_id", 10),
            'friend_user_id' => session("user_id", 1)
        ));
        if (is_null($whether)) {
            echo 0;
        } else {
            echo 1;
        }
    }

    /**
     * 添加聊天信息
     * @param Request $request
     */
    public function addDialogue(Request $request)
    {
        $whether = $this->friendModel->insertDialogue(array(
            'dialogue_user_id' => session('user_id', 1),
            'dialogue_friend_id' => $request->input('friend_id', 10),
            'dialogue_dialogue' => $request->input('dialogue', '哈哈哈'),
            'dialogue_time' => $_SERVER['REQUEST_TIME'],
            'dialogue_tag' => 0
        ));
        if ($whether) {
            echo collect(array('info' => 0, 'message' => 'success'));
        } else {
            echo collect(array("info" => 1, 'message' => 'error'));
        }
    }

    /**
     * 修改消息状态
     */
    public function changDialogueTag(Request $request)
    {
        $whether = $this->friendModel->updateDialogue(
            array(
                'dialogue_user_id' => session("user_id", 1),
                'dialogue_friend_id' => $request->input("friend_id", 10)),
            array('dialogue_tag' => 10)
        );
        if ($whether) {
            echo collect(array('info' => 0, 'message' => 'success'));
        } else {
            echo collect(array('info' => 1, 'message' => 'error'));
        }
    }

    /**
     * 一对一获取未读消息
     */
    public function getUnreadDialogue(Request $request)
    {
        $return["dialogue"] = $this->friendModel->selectDialogue(session('user_id', 27), $request->input('friend', 10));
        if ($request->input('tag', 0) == 1) {  // 需要修改状态
            // 修改聊天状态
            $this->friendModel->updateDialogue(
                array(
                    'dialogue_user_id' => session("user_id", 1),
                    'dialogue_friend_id' => $request->input("friend_id", 10)),
                array('dialogue_tag' => 10)
            );
        }
        $return['user_id'] = session("user_id", 27);
        echo collect($return)->toJson();
    }

    /**
     *  获取全部关注用户和未读消息条数
     */
    public function getFriendInfo(Request $request)
    {
        // 获取全部关注对象

    }

}
