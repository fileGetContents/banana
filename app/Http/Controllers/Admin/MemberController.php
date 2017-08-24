<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
    //
    private $file = "Admin.member-";

    public function add()
    {

        return view($this->file . "add");
    }

    public function del()
    {

        return view($this->file . "del");
    }


    public function lists()
    {
        $user = DB::table('user')->orderBy('user_id','desc')->paginate(10);
        return view($this->file . "list")->with([
            'user' => $user
        ]);
    }

    public function browse()
    {
        return view($this->file . "record-browse");
    }

    public function download()
    {

        return view($this->file . "record-download");

    }


    public function share()
    {
        return view($this->file . "record-share");
    }

    public function show()
    {
        return view($this->file . "show");
    }


}
