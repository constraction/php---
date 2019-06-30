<?php
namespace Home\Controller;
use Think\Controller;
use Home\Model\InformModel;
use Think\Model\RelationModel;
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
        $inform=new InformModel();
        $inform->insert();
    }
}
