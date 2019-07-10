<?php
namespace app\index\model;
use \think\Db;
use \think\Cookie;

class User extends \think\Model
{
    // 设置当前模型对应的完整数据表名称
    protected $table = 'user';
    protected $regex = [ 
        //匹配密码强度
        'pPattern'  =>  '/^.*(?=.{6,})(?=.*\d)(?=.*[A-Z])(?=.*[a-z])(?=.*[!@#$%^&*? ]).*$/',
        //匹配号码格式
        'tPattern'  =>  '/^((13[0-9])|(14[5|7])|(15([0-3]|[5-9]))|(18[0,5-9]))\d{8}$/',
    ];
}