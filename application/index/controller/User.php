<?php
namespace app\index\controller;
use think\Db;

class User{
    public function index(){
       $DB=new Db;

       $data=$DB::table('common')->select();
//        或:whereOr
        $data=$DB::table('common')->where('id=1')->whereOr('id=4')->select();
//         2<id<10
//        $data=$DB::table('common')->where('id','>','2')->where('id','<','10')->select();

        $data=$DB::table('common')->where("id>2 and id<15")->select();

        $data=$DB::table('admin')->where('name','like','%yu%')->select();

        $data=$DB::table('common')->where('id','>','2')->select();
       dump($data);
       dump(Db::getLastSql());

    }
    public function test(){

    }

}