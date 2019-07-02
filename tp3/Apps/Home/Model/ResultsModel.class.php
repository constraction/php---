<?php
namespace Home\Model;
use Think\Model;
/**
 * results 模型 
 * 操作 results 表
 */
class ResultsModel extends Model 
{
    /**
     * 重新定义表
     */
    protected $tableName = 'results';

    /**
     * 所有的学生的成绩单
     */
    public function all()
    {
        header("Content-type:text/html;charset=utf-8");
        
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
                    r.geographic,
                    r.sum,
                    r.average
                ")
            ->select();

        $data=array();
        $data=array_keys($rs[0]);
        
            echo "<table marginwight='0,0'>";
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
                                echo "<th>总分</th>";
                                echo "<th>平均分</th>";
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

    /**
     * 登录的学生自己的成绩单
     */
    public function myself()
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
                    r.geographic,
                    r.sum,
                    r.average
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
            '9'=>array($rs['geographic']),
            '10'=>array($rs['sum']),
            '11'=>array($rs['average'])
        );
        echo "<link rel='stylesheet' href='../../../Public/css/TablePractice.css'>";
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
                    echo "<th>总分</th>";
                    echo "<th>平均分</th>";
				echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
                echo "<tr>";
                for ($i=0; $i <count($rs) ; $i++) 
                { 
                    echo "<td>".$data[$i][0]."</td>";
                }
                echo "</tr>";
            echo "</tbody>";
    }

     /**
     * 如果学生发现没有自己的成绩信息，
     * 则可以自行添加
     */
    public function grade()
    {
        header("Content-type:text/html;charset=utf-8");

        $where=array(
            'user.name'=>session('name')
        );
        $uid=M('user')->where($where)->field('uid')->find();
        
        $rid=$uid['uid'];
        $chinese =   I("chinese");
        $math               =   I("math"); 
        $english           =   I("english"); 
        $physical       =   I("physical"); 
        $chemical       =   I("chemical"); 
        $biological     =   I("biological"); 
        $political      =  I("political"); 
        $history         =  I("history"); 
        $geographic    =   I("geographic");

        $sum = $chinese+$math+$english+$physical+$chemical+$biological+$political+$history+$geographic;
        $average = $sum / 9;

        $data = array(
            'rid'                   => $rid,
            'chinese'           =>  $chinese,
            'math'               =>  $math ,
            'english'           =>   $english,
            'physical'         =>  $physical,
            'chemical'        =>  $chemical,
            'biological'      =>  $biological,
            'political'         =>  $political,
            'history'           => $history,
            'geographic'    =>  $geographic,
            'sum'               =>  $sum,
            'average'          =>  sprintf("%.2f", $average)
        );

        $ins=M('results')
                ->where('rid='.$rid)
                ->add($data);
        
        if ($ins) 
        {
            echo "添加成功<h3><a href='../Show/index'>点击这里跳转</a></h3>";
        }
        else 
        {
            echo "添加失败";
        }
    }
}
