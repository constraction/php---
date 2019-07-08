<?php
namespace app\index\controller;

class Reg extends \think\Controller
{
    public function index()
    {
        return $this->fetch('register');
    }
}