<?php
namespace app\index\validate;
use \think\Validate;

class User extends Validate
{
    protected $rule = [
        //包含中文正则
        'username'  =>  '/[\u4E00-\u9FA5]/ | max:25',
        //密码强度正则，最少6位，包括至少1个大写字母，1个小写字母，1个数字，1个特殊字符
        'password' =>  '/^.*(?=.{6,})(?=.*\d)(?=.*[A-Z])(?=.*[a-z])(?=.*[!@#$%^&*? ]).*$/',
        'repassword'    =>  'confirm',
        'tel'   =>  '/^((13[0-9])|(14[5|7])|(15([0-3]|[5-9]))|(18[0,5-9]))\d{8}$/',
    ];
}