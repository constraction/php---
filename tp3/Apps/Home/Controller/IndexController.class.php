<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    
    /**
     * 显示网站主页
     */
    public function index(){
        // echo "<h1>hi</h1>";
        $this->display('Apps\Home\View\Index\index.html');
    }
}