<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        // echo "hi";
        $this->display('Apps\Home\View\Index\index.html');
    }
}