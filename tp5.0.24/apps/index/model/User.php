<?php
namespace app\index\model;
use \think\Db;
use \think\Cookie;

class User extends \think\Model
{
    // 设置当前模型对应的完整数据表名称
    protected $table = 'user';

    /**
     * 连接数据库，通过查询获取账号密码
     * 在前台通过 JavaScript 验证登录
     */
    public function in()
    {
        $username=input('post.username');
        $password=input('post.password');

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

    /**
     * 连接数据库，执行注册操作
     */
    public function up()
    {
        $username=input('post.username');
        $password=input('post.password');

        $user=db('user')
                ->where('status=1')
                ->field('username,password')
                ->find();
    }
}
