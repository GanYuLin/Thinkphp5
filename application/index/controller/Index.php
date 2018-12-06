<?php
namespace app\index\controller;
// 引入系统数据类
use think\Db;
// 引入系统控制器类
use think\Controller;
use verify\SendCode;

class Index extends Controller
{
    public function index()
    {

        $DB=new Db;
//        将common表中所有数据打印出来
//        $data=$DB::table('common')->select();
//        原生查询
//        $data=$DB::query("select * from common");
//        原生插入
//        $data=$DB::execute("insert into admin VALUES(null,:name,:pwd,:age,:gender)",['name'=>"admin",'pwd'=>"123",'age'=>21,'gender'=>"男"]);

//        原生删除
//        $data=$DB::execute("delete from admin where id=?",[4]);
//        原生更新
        $data=$DB::execute("update admin set pwd='456' where id=1");

        echo Db::getLastSql();
        dump($data);
//        return json_encode($data);
    }

    public function login(){
        $token=$this->token();
        echo "666";
        echo "</ br>";
        return $token;

    }

    public function register(){

        echo "6666";
    }

    public function token(){
        echo "I'm a student"."<br>";
        echo "66666"."<br>";
    }

    public function SMS(){
        $Rest = new SendCode();
//        $Rest->sendTemplateSMS("电话号码",array('验证码','有效时间'),"1");

        $Rest ->sendTemplateSMS("18935580035","你妈喊你回家吃饭","1");
    }


}
