<?php
namespace Home\Model;
use Think\Model;
class TableModel extends Model 
{
    protected $tableName = 'results';
    public function index()
    {
        $db=M('user'); //主表

        $rs=array();
        $rs=$db 
            ->join("results r on user.uid=r.rid") //附表连主表
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
            ->select();
        $data=array();
        $data=array_keys($rs[0]);
        
        echo "<link rel='stylesheet' href='../../../../Public/css/TablePractice.css'>";
        
            echo "<table>";
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
                            echo "</tr>";
                echo "</thead>";
                echo "<tbody>";
                    
                    for ($j=0; $j <=count($rs)-1  ; $j++) { 
                        echo "<tr>";
                        for ($i=0; $i <=count($rs[$j])-1 ; $i++) { 
                            echo "<td>".$rs[$j][$data[$i]]."</td>";
                        }
                        echo "</tr>";
                    }
                   
                echo "</tbody>";
            echo "</table>";
        
    }
}
