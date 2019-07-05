<?php
namespace app\index\model;
use \think\Db;
use \think\Cookie;

class User extends \think\Model
{
    // 设置当前模型对应的完整数据表名称
    protected $table = 'user';

    public function in()
    {
        $username=input('username');
        $password=input('password');

        $user=db('user')
                ->where('status=1')
                ->field('username,password')
                ->find();
        $name=$user['username'];
        $pwd=$user['password'];

        session('name',$name);
        cookie(['prefix' => '', 'expore' => 7200]);
        cookie('name',$name,7200);
        cookie('pwd',$pwd,7200);
    }
}
