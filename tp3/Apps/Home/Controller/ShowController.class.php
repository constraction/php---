<?php
namespace Home\Controller;
use Think\Controller;
use Home\Model\ShowModel;
class ShowController extends Controller {
    public function index()
    {
        $grd=new ShowModel();
        $grd->index();
        $show=new ShowModel();
        $show->result();
        $this -> display('Apps\Home\View\Show\show.html');
    }
    public function result()
    {
        session('name',null);
        $this->display('Apps\Home\View\Login\login.html');
    }
}