<?php
namespace Home\Controller;
use Think\Controller;
use Home\Model\ResultsModel;
class ShowController extends Controller {
    
    /**
     * 显示登录学生的个人成绩页面
     */
    public function index()
    {
        
        $this -> display('Apps\Home\View\Show\show.html');
    }

    /**
     * 显示 session 获取的学生名字
     */
    public function session()
    {
        header("Content-type:text/html;charset=utf-8");
        $grd=D('Result');
        $grd->index();
        $this->display();
    }

    /**
     * 显示登录学生的个人成绩单
     */
    public function table()
    {
        header("Content-type:text/html;charset=utf-8");
        $show=D('Result');
        $show->myself();
    }

    /**
     * 注销登录，返回登录页面
     */
    public function result()
    {
        session('name',null);
        $this->display('Apps\Home\View\Login\login.html');
    }
    
}