<?php
namespace Home\Controller;
use Think\Controller;
use Home\Model\TableModel;
class TableController extends Controller 
{
    public function index()
    {
        $this->display('Apps\Home\View\Table\table.html');
    }
    public function all()
    {
        header("Content-type:text/html;charset=utf-8");
        $table=new TableModel();
        $table->index();
    }
}
