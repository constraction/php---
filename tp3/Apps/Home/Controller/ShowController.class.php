<?php
namespace Home\Controller;
use Think\Controller;
use Model\UserModel;
class LoginController extends Controller {
    public function show()
    {
        $this -> display('Apps\Home\View\Show\show.html');
    }
}