<?php
namespace app\index\controller;

class Details extends \think\Controller
{
    public function index()
    {
        return $this->fetch('details');
    }
}