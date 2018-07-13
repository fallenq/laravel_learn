<?php

namespace App\Http\Controllers\Frontend\V0\Home;

use App\Http\Controllers\Controller;
use Frameworks\Tool\Base\Response\BaseResponse;
use Frameworks\Tool\Ioc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class IndexController extends Controller
{
    public function index()
    {
//        dd(Storage::disk('public')->put('test.txt', 'Contents'));
//        dd(Storage::disk('public')->get('test.txt'));
//        dd(asset('storage/test.txt'));
//        $response = Ioc::getInstance(BaseResponse::class);
//        $response->errorCode();
//        exit($response->toJson());
//        exit('Hello');
    }
}
