<?php
namespace Home\Model;
use Think\Model;
class ShowModel extends Model{
    protected $tableName = 'results';
    public function index()
    {
        echo" session('name')";
    }
    public function result()
    {
        $db=M('user'); //主表
        $where=session('name');
        $rs=$db 
            ->join("results r on user.uid=r.rid") //附表连主表
            ->where("user.name='$where'")
            ->field
                ("
                    user.name,
                    r.chinese,
                    r.math,
                    r.english,
                    r.physical,
                    r.chemical,
                    r.biological,
                    r.political,
                    r.history,
                    r.geographic
                ")
            ->find();
        $data=array(
            '0'=>array($rs['name']),
            '1'=>array($rs['chinese']),
            '2'=>array($rs['math']),
            '3'=>array($rs['english']),
            '4'=>array($rs['physical']),
            '5'=>array($rs['chemical']),
            '6'=>array($rs['biological']),
            '7'=>array($rs['political']),
            '8'=>array($rs['history']),
            '9'=>array($rs['geographic'])
        );
        echo "<link rel='stylesheet' href='../../../Public/css/TablePractice.css'>";
        echo "<tr>";
        for ($i=0; $i <=9 ; $i++) 
        { 
            echo "<td>".$data[$i][0]."</td>";
        }
        echo "</tr>";
    }
}