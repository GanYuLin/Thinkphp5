<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
use think\Route;
//return [
//    '__pattern__' => [
//        'name' => '\w+',
//    ],
//    '[hello]'     => [
//        ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
//        ':name' => ['index/hello', ['method' => 'post']],
//    ],
//
//];

Route::rule([
    "api/login"=>"index/index/login",
    "api/register"=>"index/index/register",
    "api/"=>"index/index/index",
    "api/sms"=>"index/index/SMS",
//    "api/login"=>"",
//    "api/login"=>"",
//    "api/login"=>"",
//    "api/login"=>"",
//    "api/login"=>"",
//    "api/login"=>"",
//    "api/login"=>"",
//    "api/login"=>"",
//    "api/login"=>"",
//    "api/login"=>"",
//    "api/login"=>"",
//    "api/login"=>"",
])



?>



