<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        // echo "<h1>hi</h1>";
        $this->display('Apps\Home\View\Index\index.html');
    }
}