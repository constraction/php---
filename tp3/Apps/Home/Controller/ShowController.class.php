<?php
namespace Home\Controller;
use Think\Controller;
class ShowController extends Controller {
    public function index()
    {
        $names=session('name');
        echo '<h1>Welcome! '.$names.'</h1>';
        $this -> display('Apps\Home\View\Show\show.html');
    }
}