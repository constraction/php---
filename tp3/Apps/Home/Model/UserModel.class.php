<?php
namespace Home\Model;
use Think\Model;
/**
 * user 模型 
 * 操作 user 表
 */
class UserModel extends Model 
{
     /**
      * 重新定义表
      */
     protected $tableName = 'user';

     /**
      * 自动验证（静态验证用：$_validate）
      * 手册中：模型->自动验证、自动完成
      * self::EXISTS_VALIDATE 或者0 存在字段就验证（默认）
      * self::MUST_VALIDATE 或者1 必须验证
      * self::VALUE_VALIDATE或者2 值不为空的时候验证
      */
     protected $_validate = array(
         # 用正则表达式验证密码, [必须包含字母+数字，且长度6~20字节]
        array('Password1', '/^(?=.*[A-Za-z])(?=.*[0-9])[A-Za-z0-9]{6,20}$/', '密码格式不对：必须包含字母+数字，且长度6~20字节', 0),
        # 验证两次输入密码是否一致
        array('Password1', 'Password2', '两次密码不一致', 0, 'confirm'),
        // array('Username', '', '该用户已经被注册', 0, 'unique', 1),
        array('Password2', 'require', '确认密码不能为空'),
        array('Username', 'require', '用户名不能为空'),
        array('Password1', 'require', '密码不能为空'),
     );
 
     /**
      * 自动完成
      * 静态方式：在模型类里面通过$_auto属性定义处理规则。
      */
     protected $_auto = array(
         /* 登录时自动完成 */
         # 对password字段使用md5函数处理
         array('password', 'md5', 3, 'function'),
     );
}