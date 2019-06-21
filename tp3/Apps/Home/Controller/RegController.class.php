<?php
namespace Home\Controller;
use Think\Controller;
class RegController extends Controller {
    public function index(){
        $this->display('Apps\Home\View\Reg\signup.html');
    }
    public function signup(){ 
        # 实例化User对象
        $user = D('user');

        # 通过create()调用对应的模型进行自动验证 创建数据集
        if (!$data = $user->create()) {
            # 防止输出中文乱码
            header("Content-type: text/html; charset=utf-8");
            # 输出对应的错误
            # 例如：用户没有输入用户名，就提示
            # 用户名不能为空
            exit($user->getError());
        }
        
        //如果用户输入的都符合条件的话
        //插入数据库
        if ($id = $user->add($data)) {

            $this->success('注册成功', 'Apps\Home\View\Show\show.html', 1);
        } else {
            $this->error('注册失败');
        } 
    }
}