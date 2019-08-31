<?php
/**
 * Created by PhpStorm.
 * User: chunguang
 * Date: 2019/8/31
 * Time: 18:04
 */

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;

/**
 * 首页控制器
 * Class IndexController
 * @package App\Http\Controllers\Index
 */
class IndexController extends Controller
{

    /**
     * 首页
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('welcome', ['name'=>__FUNCTION__]);
    }
}
