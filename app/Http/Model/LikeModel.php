<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class LikeModel extends Model
{
    protected $table = "review_like";

    /**
     * @param $like_id int 编号
     * @return mixed
     */
    public function isReviewLike($like_id = 1, $user_id = 1)
    {
        return DB::table($this->table)
            ->where('like_review_id', '=', $like_id)
            ->where('like_user_id', '=', $user_id)
            ->get();
    }

    /**
     * 获取点赞用户的
     * @param $post_id
     */
    public function getUserPraise($post_id)
    {
        $praise = DB::table('post_praise')
            ->select('user_name', 'user_images')
            ->leftJoin('user', "user.user_id", '=', 'post_praise.praise_user_id')
            ->where('praise_post_id', '=', $post_id)
            ->get();
        return $praise;
    }

}
