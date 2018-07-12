<?php

namespace App\Http\Controllers\Frontend\V0\Home;

use App\Http\Controllers\Controller;
use Frameworks\Tool\Base\Response\BaseResponse;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $response = BaseResponse::getInstance();
        $response->errorCode();
        exit($response->toJson());
//        exit('Hello');
    }
}
