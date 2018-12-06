<?php
namespace app\api\controller;

class User{
    public function index($id){
        echo 'controller:user     function:index';
        echo "<br>";
        echo $id;
    }
    public function test(){
        return "I'm User/test function";
    }

}