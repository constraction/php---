<?php
namespace app\tb\controller;

use think\Db;
use think\Model;
use app\tb\model\User;

class Index
{
    public function index()
    {
    	$db = Db::name('home');
    	$result =json($db->select());
		return($result);
    }
}
