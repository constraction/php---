<?php
namespace app\index\controller;

class Sign extends \think\Controller
{
    /**
     * 显示登录注册页
     */
    public function index()
    {
        $in=model('User');
        $in->in();
        return $this->fetch('in');
    }

    /**
     * 登录操作模型
     */
    public function in()
    {
        
    }
}
