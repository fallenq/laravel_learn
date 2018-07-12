<?php
/**
 * api
 * Date: 2018/5/31
 * Time: 16:36
 */
namespace App\Http\Controllers\Api\V0\Home;

use App\Http\Controllers\Controller;
use Dingo\Api\Routing\UrlGenerator;

class IndexController extends Controller
{
    public function index()
    {
//        $url = app('Dingo\Api\Routing\UrlGenerator')->version('v1')->route('v1.home.index');
        return ['code'=>500, 'msg'=>'test'];
    }
}