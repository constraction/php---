<?php
namespace Home\Controller;
use Think\Controller;
use Home\Model\LoginModel;
class LoginController extends Controller {
    public function index(){
        header("Content-type:text/html;charset=utf-8");
        // $v=new LoginModel();
        // $v->ver();
        $this->display('Apps\Home\View\Login\login.html');
    }
    public function verify()
    {
        ob_clean();
        $Verify = new \Think\Verify();
        $Verify->codeSet='1345680';
        $Verify->entry(1);
        
    }
    public function check()
    {
        header("Content-type: text/html; charset=utf-8");
        
    }
    public function login(){

        header("Content-type:text/html;charset=utf-8");

        # 清空session之前保留的数据
        session('name',null);
        # 判断提交方式
        if (IS_POST) {
            # 实例化Login对象
            $login = new LoginModel();
            # 通过create()调用对应的模型进行自动验证 创建数据集
            # $data = 获取用户输入的信息
            $data = $login->create();
             
            // 组合查询条件
            $where = array();
            # $where['user_name']：数据库中的user_name字段
            # $data['user_name'：与此模型同名视图下的name名
            $where['name'] = I('post.Username');
            $where['pwd'] = I('post.Password');
            # 相当于：
            # select * from think_user where user_name=用户输入的user_name and user_repwd=用户输入的密码;
            # result输出为一个二维数组
            $result = $login->where($where)->select();
            $code=I('post.code');
            $verify=new \Think\Verify();
            $check=$verify->check($code,1);
            if ($check)
            {
                if ($result) {
                    # 保存session
                    # 将$result['user_name']值赋值给session,名字叫uname               
                    session('name', $result[0]['name']);
                    $this->success('登录成功,正跳转至用户列表...','../Show/index', 1);
                } else {
                    $this->error('登录失败,用户名或密码不正确!');
                }
            }
            else
            {
                $this->error('验证码不正确!');
            }
        }
    }
    
}