<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CommunityModel extends Model
{
    protected $table = "post";
    protected $post_review = "post_review";
    protected $post_praise = "post_praise";
    protected $review_like = "review_like";

    /**
     * @param int $skip int  开始位置
     * @return mixed
     */
    public function getPostListAll($skip = 0)
    {
        return DB::table($this->table)->orderBy("post_id", "DESC")->take(5)->skip($skip)->get();
    }

    public function getPostReview($post_id)
    {
        $return['post'] = $this->getPostFiupdateVisitrst($post_id);
        $return['review'] = DB::table('post_review')
            ->where('review_post_id', '=', $post_id)
            ->get();
        return $return;
    }

    /**
     * 获取一条数据
     * @param $post_id
     * @return mixed
     */
    public function getPostFirst($post_id)
    {
        return DB::table("post")->where('post_id', '=', $post_id)->first();
    }

    /**
     * 添加评论
     */
    public function insertReview($array)
    {
        return DB::table($this->post_review)->insert($array);
    }

    /**
     *添加帖子
     */
    public function insertPost($array)
    {
        return DB::table($this->table)->insert($array);
    }

    /**
     * 获获取帖子数量
     * @return mixed
     */
    public function getPostNum()
    {
        return DB::table($this->table)->select('id')->count();
    }

    /**
     *获取用户参与帖子
     * @param $user_id int 用户id
     * @return  array
     */
    public function getUserJoinPost($user_id)
    {
        //$post = $this->selectUserPost($user_id);
        $praise = $this->selectUserJoinPraise($user_id);
        $review = $this->selectUserJoinReview($user_id);
        $like = $this->selectUserJoinLike($user_id);
        $post = array();
        foreach ($praise as $value) {
            $whether = collect($post)->contains($value->praise_post_id);
            if (!$whether) {
                $post[] = $value->praise_post_id;
            }
        }

        foreach ($review as $value) {
            $whether = collect($post)->contains($value->review_post_id);
            if (!$whether) {
                $post[] = $value->review_post_id;
            }
        }

        foreach ($like as $value) {
            $id = DB::table($this->post_review)
                ->select('review_post_id')
                ->where("review_id", "=", $value->like_review_id)
                ->first();
            $whether = collect($post)->contains($id->review_post_id);
            if (!$whether) {
                $post[] = $id->review_post_id;
            }
        }

        return $post;
    }

    /**
     * 获取用户点赞帖子信息
     * @param $user_id  int 用户id
     * @return mixed
     */
    public function selectUserJoinPraise($user_id)
    {
        return DB::table($this->post_praise)->where("praise_user_id", "=", $user_id)->get();
    }

    /**
     * 获取用户评论帖子
     * @param $user_id int 用户id
     * @return  array
     */
    public function selectUserJoinReview($user_id)
    {
        return DB::table($this->post_review)->where("review_user_id", "=", $user_id)->get();
    }

    /**
     * 获取用户点赞评论
     */
    public function selectUserJoinLike($user_id)
    {
        return DB::table($this->review_like)->where("like_user_id", '=', $user_id)->get();
    }

    /**
     *  获取用户贴纸
     */
    public function selectUserPost($user_id)
    {
        return DB::table($this->table)->where("post_user_id", '=', $user_id)->get();
    }


    /**
     * 更新浏览量
     */
    public function updateVisit()
    {
        DB::table("visit")->increment("banan_visit");
    }

}
