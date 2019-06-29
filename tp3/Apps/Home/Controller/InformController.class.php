<?php
namespace Home\Controller;
use Think\Controller;
use Home\Model\InformModel;
class InformController extends Controller 
{
    public function index()
    {
        
        $inform=new InformModel();
        $inform->index();
        $this->display("Apps\Home\View\Inform\inform.html");
    }
    public function insert_index()
    {
        $this->display('Apps\Home\View\Inform\insert.html');
    }
    public function insert_insert()
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
        $rs=M('student') 
            ->join("user on user.uid=student.sid") //附表连主表
            ->where('sid=2')
            // ->fetchSql(true)
            ->save($data);
        // dump($rs);
        
        if ($rs) {
            $this->success('修改成功', '../Inform/index', 1);
        } else {
            $this->error('修改失败');
        } 
    }
}
