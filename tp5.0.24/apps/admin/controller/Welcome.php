<?php
namespace app\admin\controller;

class Welcome extends \think\Controller
{
    /**
     * 显示欢迎页面
     */
    public function index()
    {
        return $this->fetch('welcome');
    }
}