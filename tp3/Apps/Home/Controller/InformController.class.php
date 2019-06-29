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
        $this->display("Apps\Home\View\Inform\Inform.html");
    }
}
