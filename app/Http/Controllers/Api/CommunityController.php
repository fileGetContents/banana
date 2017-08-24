<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Model;
use Illuminate\Support\Facades\DB;

class CommunityController extends Controller
{

    protected $communityModel;
    protected $likeModel;
    protected $userModel;

    public function __construct()
    {
        $this->communityModel = new Model\CommunityModel();
        $this->likeModel = new Model\LikeModel();
        $this->userModel = new Model\UserModel();
    }

    /**
     * 返回参数
     * @param Request $request
     */
    public function getPostAll(Request $request)
    {
        $post = $this->communityModel->getPostListAll($request->input('skip'));
        echo collect($post)->toJson();
    }

    /**
     * 获取帖子详情关系(评论 ,点赞 ,用户的名称和头像)
     * @param Request $request
     */
    public function getPostReview(Request $request)
    {
        $review = $this->communityModel->getPostReview($request->input('id', 1)); // 获取该帖评论
        $return['review'] = array();
        $return['post'] = $review['post'];
        // 查看当前用户是否点赞
        foreach ($review['review'] as $value) {
            $v = $this->likeModel->isReviewLike($value->review_id, session('user_id', 1));
            if (empty($v)) {
                $value->isLike = 0;
            } else {
                $value->isLike = 1;
            }
            $return['review'][] = $value;
        }
        $prise = $this->likeModel->getUserPraise($request->input("id", 1));
        $return['prise'] = $prise;
        echo collect($return);
    }


    /**
     * 为贴子点赞
     * @param Request $request
     */
    public function updatePostPraise(Request $request)
    {
        $post = DB::table("post")->where("post_id", "=", $request->input('id', 1))->first();
        DB::beginTransaction();
        try {
            $sql1 = DB::table('post')
                ->where("post_id", "=", $post->post_id)
                ->update(array(
                    "post_praise_num" => $post->post_praise_num + 1,
                ));
            $sql2 = DB::table('post_praise')
                ->insert(array(
                    "praise_user_id" => session('user_id', 1),
                    "praise_post_id" => $post->post_id,
                    "praise_time" => time()
                ));
            if ($sql1 && $sql2) {
                DB::commit();
                echo collect(array("info" => 0, "message" => "点赞失败"));
            }
        } catch (\Exception $e) {
            DB::rollBack();
            echo collect(array("info" => 1, "message" => "点赞失败"));
        }
    }


    /**
     * 为评论点赞
     * @param Request $request
     */
    public function updateLike(Request $request)
    {
        $review = DB::table("post_review")->where("review_id", "=", $request->input('id', 1))->first();
        DB::beginTransaction();
        try {
            $sql1 = DB::table("post_review")
                ->where('review_id', '=', $review->review_id)
                ->update(array("review_user_num" => $review->review_user_num + 1));

            $sql2 = DB::table("review_like")
                ->insert(array(
                    "like_review_id" => $review->review_id,
                    "like_user_id" => session("user_id", 1),
                    'like_time' => time()
                ));
            if ($sql1 && $sql2) {
                DB::commit();
                echo collect(array("info" => 0, "message" => "点赞失败"));
            }
        } catch (\Exception $e) {
            DB::rollBack();
            echo collect(array("info" => 1, "message" => "点赞失败"));
        }
    }

    /**
     * 为贴子添加评论
     * post_id  贴子id
     * message  内容
     * @param Request $request
     */
    public function addReview(Request $request)
    {
        $array = array(
            'review_post_id' => $request->input('post_id', 1),
            'review_body' => $request->input('message', "不错呦!"),
            'review_user_id' => session("user_id", 1),
            'review_time' => time(),
        );
        $insert = $this->communityModel->insertReview($array);
        if ($insert) {
            echo collect(array("info" => 0, "message" => "添加成功"));
        } else {
            echo collect(array("info" => 1, "message" => "添加失败"));
        }
    }

    /**
     * 添加评论
     * @param Request $request
     */
    public function addPost(Request $request)
    {
        $array = array(
            'post_content' => $request->input("message", '发了一个贴纸'),
            'post_user_id' => session("user_id", 1),
            'post_time' => time(),
        );
        $whether = $this->communityModel->insertPost($array);
        if ($whether) {
            echo collect(array("info" => 0, "message" => "发帖成功"));
        } else {
            echo collect(array("info" => 0, "message" => "发帖失败"));
        }
    }


    /**
     * 获取帖子数量
     */
    public function getPostNum()
    {
        echo $this->communityModel->getPostNum();
    }

    /**
     * 获取用户参与的帖子
     */
    public function getUserPostJoin(Request $request)
    {
        $post_id = $this->communityModel->getUserJoinPost($request->input("user_id", 1));
        $postList = array();
        foreach ($post_id as $key => $value) {
            $postList[$key]['info'] = $this->communityModel->getPostReview($value);
            $postList[$key]['praise'] = $this->likeModel->getUserPraise($value);
            $postList[$key]['review_num'] = count($postList[$key]['info']['review']); // 评论长度
            $postList[$key]['praise_num'] = count($postList[$key]['praise']);         // 点赞人数
            foreach ($postList[$key]['info']['review'] as $m => $praise) {
                $like = $this->likeModel->isReviewLike($praise->review_id, session("user_id", 1));
                // 获取用户是否为该评论点赞
                if (empty($like)) {
                    $postList[$key]['info']['review'][$m]->user_like = "false";
                } else {
                    $postList[$key]['info']['review'][$m]->user_like = "true";
                }
                // 获取点赞数目
                $postList[$key]['info']['review'][$m]->like_num = count($like);
            }
        }
        echo collect($postList)->toJson();
    }

    /**
     * 获取用户发过的帖子
     */
    public function getUserAllPost(Request $request)
    {
        $post = $this->communityModel->selectUserPost($request->input("user_id", 1));
        $return = array();
        foreach ($post as $value) {
            $review = $this->communityModel->getPostReview($value->post_id);
            $user = $this->likeModel->getUserPraise($value->post_id);
            $value->review = $review['review'];
            $value->user = $user;
            $return[] = $value;
        }
        // dump($return);
        echo collect($return)->toJson();
        // dump($review);
    }

}
