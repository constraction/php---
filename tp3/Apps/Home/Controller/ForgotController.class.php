<?php
namespace Home\Controller;
use Think\Controller;
use Home\Model\UserModel;
class ForgotController extends Controller {
    
    /**
     * 显示忘记密码页
     */
    public function index()
    {
        $this->display('Apps\Home\View\Forgot\forget.html');
    }

    /**
     * 执行修改密码操作
     */
    public function forget()
    { 
        header("Content-type:text/html;charset=utf-8");
        $name=I('post.Username');
        $pwd=I('post.Password1');
        $data['pwd']=$pwd;
        $where['name']=$name;
        # 实例化User对象
        $user = D('User');
        // $users=new RegModel();
        // $users->$_validate;
        # 通过create()调用对应的模型进行自动验证 创建数据集
        if (!$user->create()) {
            // 如果创建失败 表示验证没有通过 输出错误提示信息
                exit($user->getError());
        }else {
            //如果用户输入的都符合条件的话
            //插入数据库
            $id = $user
                    ->where($where)
                    ->save($data);
            // dump($data);
            if ($id) {
                $this->success('修改成功', '../Login/index', 1);
            } else {
                $this->error('修改失败');
            } 
        }
    }
}