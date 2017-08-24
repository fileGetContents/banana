<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{

    private $prefix = "Admin.admin-";

    public function login()
    {
        return view($this->prefix . "index");
    }

    public function lists()
    {

        return view($this->prefix . "list");
    }

    public function add()
    {
        return view($this->prefix . "add");
    }

    public function permission()
    {

        return view($this->prefix . "permission");
    }

    public function role()
    {
        return view($this->prefix . "role");
    }

    public function roleAdd()
    {
        return view($this->prefix."role_add");
    }

}
