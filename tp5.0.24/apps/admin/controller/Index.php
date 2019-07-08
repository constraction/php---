<?php
namespace app\admin\controller;

class Index extends \think\Controller
{
    /**
     * 显示前台首页
     */
    public function index()
    {
        return $this->fetch('index');
    }
}
