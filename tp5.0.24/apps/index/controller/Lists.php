<?php
namespace app\index\controller;

class Lists extends \think\Controller
{
    public function index()
    {
        return $this->fetch('list');
    }
}