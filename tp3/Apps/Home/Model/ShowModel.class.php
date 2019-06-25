<?php
namespace Home\Model;
use Think\Model;
class ShowModel extends Model{
    protected $tableName = 'results';
    public function index()
    {
        
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
            // ->fetchSql(sql)
            ->find();
            // dump($rs);
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
        // dump($data['0']);
        echo "<link rel='stylesheet' href='../../../../Public/css/TablePractice.css'>";
        echo "<form>";
        echo "<div>";
            echo "<table>";
            $ss=session('name');
                echo "<h2 style='text-align:center'>".$ss."的成绩单</h2>";
                echo "<thead>";
                        echo "<tr>";
                                echo "<th>姓名</th>";
                                echo "<th>语文</th>";
                                echo "<th>数学</th>";
                                echo "<th>英语</th>";
                                echo "<th>物理</th>";
                                echo "<th>化学</th>";
                                echo "<th>生物</th>";
                                echo "<th>政治</th>";
                                echo "<th>历史</th>";
                                echo "<th>地理</th>";
                                // echo "<th>操作</th>";
                            echo "</tr>";
                echo "</thead>";
                echo "<tbody>";
                    echo "<tr>";
                    for ($i=0; $i <=9 ; $i++) { 
                        echo "<td>".$data[$i][0]."</td>";
                    }
                    echo "</tr>";
                echo "</tbody>";
            echo "</table>";
        echo "</div>";
    echo "</form>";
        
    }
}