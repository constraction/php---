<?php
namespace app\index\controller;

class Shopcar extends \think\Controller
{
    public function index()
    {
        return $this->fetch('shopCar');
    }
}