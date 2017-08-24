<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Model;
use Crypt;

class UserController extends Controller
{
    protected $userModel;
    protected $kimsModel;

    public function __construct()
    {
        $this->userModel = new Model\UserModel();
        $this->kimsModel = new Model\KimsModel();
    }

    // 获取用户基础信息
    public function getUserInfo()
    {
        $return = $this->userModel->getUserInfoFirst(session('user_id', 1));
        echo collect($return)->toJson();
    }

    // 更新用户基础信息
    public function updateUserInfo(Request $request)
    {
        $this->validate($request, [
            'nickname' => 'required',
            'telephone' => 'required',
            'email' => 'required|email',
        ]);
        $array = array(
            'user_email' => $request->input("email", "111@qq.com"),
            'user_tel' => $request->input('telephone', '182801955555'),
            'user_name' => $request->input('nickname', 'ajax2')
        );
        $message = $this->userModel->updateInfo($array, session('user_id', 1));
        if ($message == "success") {
            echo collect(array('info' => 0, 'message' => 'success'));
        } else {
            echo collect(array('info' => 1, 'message' => 'error'));
        }
    }

    /**
     * 用户登录
     * @param Request $request
     */
    public function userLogin(Request $request)
    {
        $user = $this->userModel->Login($request->input("telephone", 182801955555));
        if (!is_null($user)) {
            if (Crypt::decrypt($user->user_pass) == $request->input("pass", "admin")) {
                $request->session()->put("user_id", $user->user_id);
                echo collect(array("info" => 0, "message" => "登录成功"));
            } else {
                echo collect(array("info" => 1, "message" => "密码和账号不匹配"))->toJson();
            }
        } else {
            echo collect(array("info" => 1, "message" => "没有相关信息"))->toJson();
        }
    }

    /**
     *用户注册
     */
    public function userRegister(Request $request)
    {
//        $this->validate($request, [
//            'telephone' => ['required', 'regex:/^13[0-9]{9}$|14[0-9]{9}|15[0-9]{9}$|18[0-9]{9}$|17[0-9]{9}$/'],
//            'pass' => 'required|alpha_num'
//        ]);
//        // 验证是否重复
//        $phone = $this->userModel->Login($request->input('telephone'));
        $phone = null;
        if (is_null($phone)) {
            $whether = $this->userModel->register(
                $request->input("telephone", 18222222222), $request->input("pass", "admin")
            );
            if ($whether['info'] == 0) {
                $request->session()->put("user_id", $whether["message"]);
                // 添加代金券
                $or = $this->kimsModel->insertKims(array(
                    'kims_user_id' => $whether['message'],
                    'kims_money' => 100,
                    'kims_time' => time(),
                    'kims_over_time' => 0, // 永不过期
                ));
                echo collect(array("info" => 0, "message" => "注册成功"));
            } else {
                echo collect(array("info" => 1, "message" => $whether['message']));
            }
        } else {
            echo collect(array('info' => 1, 'message' => '手机号重复'));
        }
    }

    /**
     * 添加收获人地址
     */
    public function addAddress(Request $request)
    {
//        $this->validate($request, [
//            'name' => "required",
//            'province' => "required",
//            'city' => "required",
//            'area' => "required",
//            'telephone' => 'required',
//            'address' => 'required',
//            'code' => 'required'
//        ]);
        $array = array(
            'address_user_id' => session("user_id", 1),
            'address_city' => serialize(array(
                $request->input("province", "省"),
                $request->input("city", '城市'),
                $request->input("area", '县')
            )),
            'address_contact' => $request->input("telephone", 1111111111),
            'address_detail' => $request->input('address', "哈哈哈哈哈"),
            'address_name' => $request->input("name", "呵呵呵呵"),
            'address_code' => $request->input('code', '2222'),
            'address_time' => time()
        );
        $whether = $this->userModel->addAddress($array);
        if (is_numeric($whether)) {
            echo collect(array("info" => 0, "message" => "添加成功"));
        } else {
            echo collect(array("info" => 1, "message" => "添加失败"));
        }
    }

    /**
     * 删除用户地址
     */
    public function DelAddress(Request $request)
    {
        $whether = $this->userModel->delAddress($request->input('id', 1));
        if ($whether) {
            echo collect(array("info" => 0, "message" => "删除成功"));
        } else {
            echo collect(array("info" => 1, "message" => "删除失败"));
        }
    }

    /**
     * 获取地址
     */
    public function getAddress(Request $request)
    {
        $whether = $this->userModel->selectAddress($request->input("id", 1));
        echo collect($whether)->toJson();
    }

    /**
     * 检查是否登录
     */
    public function isLogin()
    {
        if (session("user_id", -1) == -1) {
            echo collect(array("info" => 1, "message" => "error"));
        } else {
            echo collect(array("info" => 0, "message" => 'success'));
        }
    }

    /**
     * 退出登录
     */
    public function exitLogin(Request $request)
    {
        $request->session()->forget('user_id');
        echo collect(array("info" => 0, "message" => "success"));
    }

    /**
     * 获取代金券
     * @param Request $request
     */
    public function getUserKims(Request $request)
    {
        $kims = $this->kimsModel->selectKimsFirst(session("user_id", 1));
        echo collect($kims)->toJson();
    }

    /**
     * 修改代金券的状态
     * @param Request $request
     */
    public function updateUserKims(Request $request)
    {
        $whether = $this->kimsModel->updateKims(
            array("kims_user_id" => session("user_id", 1)),
            array("kims_tag" => $request->input("tag", 10))
        );
        if ($whether) {
            echo collect(array("info" => 0, "message" => "success"));
        } else {
            echo collect(array("info" => 1, "message" => "error"));
        }

    }

    /**
     * 获取用户信息
     * @param Request $request
     */
    public function getUserMoney(Request $request)
    {
        $user = $this->userModel->selectUserMoney(session('user_id', 1));
        echo $user->user_money;
    }


}
