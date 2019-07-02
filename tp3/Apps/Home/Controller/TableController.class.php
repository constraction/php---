<?php
namespace Home\Controller;
use Think\Controller;
use Home\Model\ResultsModel;
class TableController extends Controller 
{
    /**
     * 显示所有学生的成绩
     */
    public function index()
    {
        
        $this->display('Apps\Home\View\Table\table.html');
    }
    public function table()
    {
        header("Content-type:text/html;charset=utf-8");
        $table=D('Results');
        $table->all();
    }
}
