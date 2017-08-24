<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class PublicController extends Controller
{


    /**
     * 通用删除
     * table : 表名
     * file : 字段
     * where : 条件
     * @param Request $request
     */
    public function DelAll(Request $request)
    {
        $row = DB::table($request->input('table'))
            ->where($request->input('file'), '=', $request->input('where'))
            ->delete();
        if ($row) {
            echo collect(array('info' => 0, 'message' => 'success'));
        } else {
            echo collect(array('info' => 1, 'message' => 'error'));
        }
    }

}
