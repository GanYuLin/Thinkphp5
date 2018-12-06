<?php
namespace app\admin\controller;
// 引入系统数据类
use think\Db;
// 引入系统控制器类
use think\Controller;
class Index extends Controller
{
    public function index()
    {
        return "后台首页";

//        dump(config('database'));
//    	return view();


    }
}
