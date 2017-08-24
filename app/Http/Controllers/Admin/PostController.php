<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{

    protected $file = 'Admin.feedback-';

    /**
     * 获取全部评论
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function lists()
    {
        $post = DB::table('post')->leftJoin('user', 'user.user_id', '=', 'post.post_user_id')->paginate(15);
        return view($this->file . 'list')->with([
            'post' => $post
        ]);
    }

}
