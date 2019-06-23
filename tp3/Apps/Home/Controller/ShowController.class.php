<?php
namespace Home\Controller;
use Think\Controller;
use Home\Model\ShowModel;
class ShowController extends Controller {
    public function index()
    {
        $grd=new ShowModel();
        $grd->index();
        $this -> display('Apps\Home\View\Show\show.html');
    }
    public function result()
    {
        $show=new ShowModel();
        $show->result();
    }
}