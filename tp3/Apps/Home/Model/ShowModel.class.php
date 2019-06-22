<?php
namespace Home\Model;
use Think\Model;
class ShowModel extends Model{
    protected $tableName = 'user';
    public function index()
    {
        $names=session('name');
        echo "<h1>Welcome！".$name."</h1>";
        echo "<h3>这是你的成绩单：</h3>";
    }
}