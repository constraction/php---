<?php
namespace app\index\controller;

class Login extends \think\Controller
{
    public function index()
    {
        return $this->fetch('login');
    }
    
    public function login()
    {
        $login=model('User');
        $login->index();

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
                    return $this->success('登录成功','Index/index');   
                }else 
                {
                    return $this->error('账号或密码错误');
                }
            }
        }
        
    }
}