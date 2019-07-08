<?php
namespace app\index\controller;

class Selfinfo extends \think\Controller
{
    public function index()
    {
        return $this->fetch('self_info');
    }
}