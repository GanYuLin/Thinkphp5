<?php
namespace app\index\controller;
use redis\Redis;
//use think\cache\driver\Redis;

use think\Db;
use think\Controller;

class Redis1 extends Controller
{
    public function index()
    {
        return $this->fetch();

    }
    public function test1(){
        $redis=new Redis();
//        $comment=$_POST['comment'];
        $id=$redis->inc("globel:id",1);
//        $id=1;
        $target_id='1234';
        $target_type='0';
        $resp_user_id='v2';
        $uid='v3';
        $object_id='1235';
        $comment_content='牛逼呀';
        $like_num=101;
        $createAt=date("Y-m-d h:i:s");

        $redis->mset(array(
            'comment:'.$id=>$id,
            'comment:'.$id.':target_id'=>$target_id,
            'comment:'.$id.':target_type'=>$target_type,
            'comment:'.$id.':resp_user_id'=>$resp_user_id,
            'comment:'.$id.':uid'=>$uid,
            'comment:'.$id.':object_id'=>$object_id ,
            'comment:'.$id.':comment_content'=>$comment_content,
            'comment:'.$id.':like_num'=>$like_num,
            'comment:'.$id.':createAt'=>$createAt,
            ));

        dump($redis->get('comment:'.$id));
        dump($redis->get('comment:'.$id.':target_id'));
        dump($redis->get('comment:'.$id.':target_type'));
        dump($redis->get('comment:'.$id.':resp_user_id'));
        dump($redis->get('comment:'.$id.':uid'));
        dump($redis->get('comment:'.$id.':object_id'));
        dump($redis->get('comment:'.$id.':comment_content'));
        dump($redis->get('comment:'.$id.':like_num'));
        dump($redis->get('comment:'.$id.':createAt'));

    }
    public function test2(){
        $redis=new Redis();
        dump("I'm function test2!");
        $id=3;
        if($id==$redis->get("comment:".$id)){
            dump($redis->get('comment:'.$id));
            dump($redis->get('comment:'.$id.':target_id'));
            dump($redis->get('comment:'.$id.':target_type'));
            dump($redis->get('comment:'.$id.':resp_user_id'));
            dump($redis->get('comment:'.$id.':uid'));
            dump($redis->get('comment:'.$id.':object_id'));
            dump($redis->get('comment:'.$id.':comment_content'));
            dump($redis->get('comment:'.$id.':like_num'));
            dump($redis->get('comment:'.$id.':createAt'));
        }

    }

    public function test3(){
        $redis=new Redis();
        $mysql=new Db;

        $data=$mysql::table("user")->where("id>2 and id<7")->select();
//        $data = $data->toArray($data);
        $length = count($data);

//        dump($data);
//        dump($length);
        for($i=0;$i<$length;$i++){
            $id=$data[$i]["id"];
            $username=$data[$i]["username"];
            $password=$data[$i]["password"];
            $sex=$data[$i]["sex"];
            $qq=$data[$i]["qq"];
            $email=$data[$i]["email"];
            $phone=$data[$i][ "phone"];
            $address=$data[$i]["address"];

            $redis->mset(array(
                "user:".$id=>$id,
                "user:".$id.":username"=>$username,
                "user:".$id.":password"=>$password,
                "user:".$id.":sex"=>$sex,
                "user:".$id.":qq"=>$qq,
                "user:".$id.":email"=>$email,
                "user:".$id.":phone"=>$phone,
                "user:".$id.":address"=>$address,
            ));
            $id=$id+1;
        }
//           dump( $redis->hget("user:id"));
//           dump($redis->hget("user:".$id.":username"));
//           dump($redis->hget("user:".$id.":password"));
//           dump($redis->hget("user:".$id.":sex"));
//           dump($redis->hget("user:".$id.":qq"));
//           dump( $redis->hget("user:".$id.":email"));
//           dump( $redis->hget("user:".$id.":phone"));
//           dump( $redis->hget("user:".$id.":address"));
//        $redis->zadd();












    }

}