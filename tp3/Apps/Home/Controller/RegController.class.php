<?php
namespace Home\Controller;
use Think\Controller;
use Home\Model\UserModel;
class RegController extends Controller {

    /**
     * 显示注册页
     */
    public function index(){
        $this->display('Apps\Home\View\Reg\signup.html');
    }

    /**
     * 注册操作
     */
    public function signup(){ 
        header("Content-type:text/html;charset=utf-8");

        $name=I('post.Username');
        $pwd=I('post.Password1');
        $data['name']=$name;
        $data['pwd']=$pwd;
        $data['status']='1';
        # 实例化User对象
        $user =D('User');
        // $users=new RegModel();
        // $users->$_validate;
        # 通过create()调用对应的模型进行自动验证 创建数据集
        $code=I('post.code');
        $verify=new \Think\Verify();
        $check=$verify->check($code,1);
        if ($check)
        {
            if (!$user->create()) {
                // 如果创建失败 表示验证没有通过 输出错误提示信息
                    exit($user->getError());
            }else {
                
                //如果用户输入的都符合条件的话
                //插入数据库
                $id = $user->add($data);
                // dump($data);
                if ($id) {
                    $this->success('注册成功', '../Login/index', 1);
                } else {
                    $this->error('注册失败');
                } 
            }
        }
        else
        {
            $this->error('验证码不正确!');
        }
    }
}