<?php
namespace app\index\controller;
use think\Controller;
use think\Exception;
use think\Request;
use think\Validate;

class Reg extends Controller
{
    /**
     * 注册页
     */
    public function index()
    {
        return $this->fetch('register');
    }

    public function reg()
    {
        $name=input('post.username');
        $pwd=input('post.password');
        $repwd=input('post.repassword');

        $data=array(
            'username'  =>  $name,
            'password'  =>  $pwd,
            'status'    =>  '1'
        );

        $datas=input('post.');
        //匹配密码强度
        //$pPattern="/^.*(?=.{6,})(?=.*\d)(?=.*[A-Z])(?=.*[a-z])(?=.*[!@#$%^&*? ]).*$/";
        //匹配号码格式
        //$tPattern="/^((13[0-9])|(14[5|7])|(15([0-3]|[5-9]))|(18[0,5-9]))\d{8}$/";
        $rules=[
            'password | 密码'  =>  ['min'=>6,'max'=>25,'regex'=>'pPattern'],
            'username | 用户名'  =>  ['min'=> 2 ,'chsAlphaNum'],
            'repassword | 确认密码'     =>  ['confirm'],
            'tel | 电话号码'    =>  ['regex'=>'tPattern'],
        ];
        $messages=[
            
            'password.regex'  =>  '密码最少6位，包括至少1个大写字母，1个小写字母，1个数字，1个特殊字符',
            'username.chsAlphaNum'  =>  '用户名的值只能是汉字、字母和数字',
            'username.min'  =>  '用户名的长度最少是2个字符',
            'password.max'  =>  '密码的长度最多是25个字符',
            'password.min'  =>  '密码的长度最少是6个字符',
            'repassword.confirm '  =>  '两次密码要一致',
            'tel.regex'    =>  '电话号码格式不正确'
        ];
        $validator = new Validate($rules,$messages);//1.实例化一个验证器
        $changjing = $validator->scene('changjing1',['username','password','repassword','tel']);//2.规定场景：changjing1 场景，只验证名称
        $result = $changjing->check($datas);
        
        $code=input('post.code');
        if ($code) 
        {
            $captcha=new \think\captcha\Captcha();//引用验证码类
            if (!$captcha->check($code)) 
            {
                return $this->error('验证码错误');
            }else 
            {
                if (!$result) 
                {
                    return $this->error("验证不通过");
                }else 
                {
                    $db=db('User')->insert($data);
                    if ($db) 
                    {
                        return $this->success('注册成功','Login/index');
                    } 
                    else 
                    {
                        return $this->error('注册失败'); 
                    }
                }
            }
        }
    }
}