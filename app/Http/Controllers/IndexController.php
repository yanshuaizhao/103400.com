<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/13
 * Time: 15:59
 */

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{

    /**
     * 首页
     */
    public function home(){
        $list = DB::table('article')->orderBy('id', 'desc')->get();

        return view('www/index', compact('list'));
    }


    /**
     * 文章详情
     */
    public function articleDetail($aid){
        $data = DB::table('article')->find($aid);

        return view('www/article_detail', ['data'=>$data]);
    }

}