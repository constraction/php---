<?php
namespace app\index\controller;
use index\model\User;

class Login extends \think\Controller
{
    /**
     * 登录页主页
     */
    public function index()
    {
        return $this->fetch('login');
    }
    
    /**
     * 登录操作
     * 验证码验证
     */
    public function login()
    {
        // $login=model('User');
        // $login->index();

        $name=input('post.username');
        $pwd=input('post.password');
        $where=array(
            'username'  =>  $name,
            'password'  =>  $pwd,
            'status'    =>  '1'
        );
        $db=db('user')
            ->where($where)
            ->find();
        
        $code=input('post.code');
        if ($code) 
        {
            $captcha=new \think\captcha\Captcha();//引用验证码类
            if (!$captcha->check($code)) 
            {
                return $this->error('验证码错误');
            }else 
            {
                if ($db) 
                {
                    session('name',$db['username']);
                    return $this->success('登录成功','Index/index');   
                }else 
                {
                    return $this->error('账号或密码错误');
                }
            }
        }
        
    }
}