<?php
namespace Home\Controller;
use Think\Controller;
use Home\Model\RegModel;
class RegController extends Controller {
    public function index(){
        $this->display('Apps\Home\View\Reg\signup.html');
    }
    public function signup(){ 
        # 实例化User对象
        $user = D('user');
        # 通过create()调用对应的模型进行自动验证 创建数据集
        $data = $user->create();
        dump($data);
        //如果用户输入的都符合条件的话
        //插入数据库
        $id = $user->add($data);
        dump($id);
        // if ($id) {
        //     $this->success('注册成功', 'Apps\Home\View\Show\show.html', 1);
        // } else {
        //     $this->error('注册失败');
        // } 
    }
}