<?php
namespace app\api\controller;

class Index
{
    public function index()
    {
        echo "api的index方法";
    }
    public function test(){
        return "I'm Index/test function";
    }


}
