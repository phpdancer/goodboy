<?php
/**
 * Created by PhpStorm.
 * User: chunguang
 * Date: 2019/8/31
 * Time: 19:13
 */

namespace Modules\Api\Http\Controllers\Index;

use App\Http\Controllers\Controller;

/**
 * API index控制器
 * Class IndexController
 * @package Modules\Api\Http\Controllers\Index
 */
class IndexController extends Controller
{

    /**
     * API index
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return response()->json(['hi goodboy.ren api']);
    }
}
