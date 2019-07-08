<?php
namespace app\index\controller;

class Order extends \think\Controller
{
    public function index()
    {
        return $this->fetch('order');
    }
}