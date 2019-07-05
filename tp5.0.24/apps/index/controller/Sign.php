<?php
namespace app\index\controller;
use \think\Controller;

class Sign extends Controller
{
    public function index()
    {
        return $this->fetch('in');
    }
}
