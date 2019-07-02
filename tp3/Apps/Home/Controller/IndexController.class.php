<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    
    /**
     * 显示网站主页
     */
    public function index(){
        $this->display('Apps\Home\View\Index\index.html');
    }
}