<?php
namespace app\index\validate;
use \think\Validate;

class Pass extends BaseValidate 
{
    protected $rule = [
        //require是内置规则，而tp5并没有正整数的规则，所以下面这个positiveInt使用自定义的规则
            'password' => 'require|positiveInt',
            'repassword'    =>  'require|confirm'
        ];
    /** 
     * 系统会自动传入几个参数 
     * 第一个是 要验证的值，
     * 第二个是规则，自己可以规定规则内容或者不写，
     * 第三个是最初传入的data。
    */
    protected function positiveInt($value, $rule='', $data)
    {
        $pPattern="/^.*(?=.{6,})(?=.*\d)(?=.*[A-Z])(?=.*[a-z])(?=.*[!@#$%^&*? ]).*$/";
        if (true) 
        {
            
        } else 
        {
            
        }
        
    }
}
