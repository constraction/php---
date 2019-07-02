<?php
namespace Home\Model;
use Think\Model;
use Think\Controller;
class InformModel extends Model 
{
    protected $tableName='student';

    /**
     * 显示学生的个人信息
     */
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

    /**
     * 学生修改自己的个人信息
     */
    public function insert()
    {
        header("Content-type:text/html;charset=utf-8");

        $name=I('post.name');
        $sex=I('post.sex');
        $grade=I('post.grade');
        $class=I('post.class');
        $phone=I('post.phone');
        $mail=I('post.mail');

        $data['sex']=$sex;
        $data['grade']=$grade;
        $data['class']=$class;
        $data['phone']=$phone;
        $data['mail']=$mail;
        
        $where=array(
            'user.name'=>$name
        );
        $uid=M('user')->where($where)->field('uid')->find();

        $sid=$uid['uid'];
        $rs=M('student') 
            ->where('sid='.$sid)
            // ->fetchSql(true)
            ->save($data);
        // dump($rs);
        
        if ($rs) {
            echo "修改成功<h3><a href='./index'>点击这里跳转</a></h3>";
            // $this->success('修改成功', '../Inform/index', 1);
        } else {
            echo "修改失败";
            // $this->error('修改失败');
        } 
    }

    /**
     * 如果学生发现没有自己的成绩信息，
     * 则可以自行添加
     */
    public function grade()
    {
        header("Content-type:text/html;charset=utf-8");

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
            'average'          =>  $average
        );

        $where=array(
            'user.name'=>session('name')
        );
        $uid=M('user')->where($where)->field('uid')->find();
        $rid=$uid['uid'];

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
