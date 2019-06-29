<?php
namespace Home\Model;
use Think\Model;
use Think\Controller;
class InformModel extends Model 
{
    protected $tableName='student';
    public function index()
    {
        header("Content-type:text/html;charset=utf-8");
        
        $db=M('user'); //主表
        $rs=array();
        $rs=$db 
        ->join("student s on user.uid=s.sid") //附表连主表
        ->field
            ("
                user.name,
                s.sex,
                s.grade,
                s.class,
                s.phone,
                s.mail
            ")
            ->select();

        $data=array();
        $data=array_keys($rs[0]);
        
            echo "<table marginwight='0,0'>";
                echo "<thead>";
                        echo "<tr>";
                                echo "<th>姓名</th>";
                                echo "<th>性别</th>";
                                echo "<th>年级</th>";
                                echo "<th>班级</th>";
                                echo "<th>电话</th>";
                                echo "<th>邮箱</th>";
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
    public function insert()
    {
        
    }
}
