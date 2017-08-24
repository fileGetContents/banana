<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Model;

class SbeginController extends Controller
{
    protected $banModel;

    public function __construct()
    {
        $this->banModel = new Model\BananaModel();
    }

    public function sendPost()
    {

        return view($this->web . 'sendpost');
    }

    public function small()
    {
        $sift = $this->banModel->getIndexRecommend(30);
        return view($this->web . "small")->with([
            'sift' => $sift
        ]);
    }


    public function start()
    {
        $small = $this->banModel->getIndexRecommend(10);
        $weekend = $this->banModel->getIndexRecommend(20);
        $sift = $this->banModel->getIndexRecommend(30);
        $num = 0;
        return view($this->web . 'start')->with([
            'small' => $small,
            'weekend' => $weekend,
            'sift' => $sift,
            'num' => 0
        ]);
    }

}
