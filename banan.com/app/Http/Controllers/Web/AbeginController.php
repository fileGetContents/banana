<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Model;

class AbeginController extends Controller
{

    protected $banana;

    public function __construct()
    {
        $this->banana = new Model\BananaModel();
    }

    public function abroad()
    {
        return view($this->web . "abroad");
    }

    public function activeDetails(Request $request)
    {
        $info = $this->banana->getInfoFirst($request->id);
        dump($info);

        dump(unserialize($info->travel_images));

        return view($this->web . "activedetails")->with([
            'info' => $info
        ]);
    }

    public function addPlace()
    {
        return view($this->web . "addplace");
    }

    public function addPlace2()
    {
        return view($this->web . "addplace2");
    }

    public function all()
    {
        return view($this->web . "all");
    }


}
