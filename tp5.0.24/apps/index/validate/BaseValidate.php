<?php
namespace app\index\validate;
use think\Exception;
use think\Request;
use think\Validate;

class BaseValidate extends Validate
{
    public function goCheck($data='')
    {
        //实例化请求对象
        $requestObj=Request::instance();
        //如果传入为空则获取请求里的参数
        empty($data)&&$data=$requestObj->param();
        if ($this->check($data)) {
            //如果验证通过了
            return true;
        }else{
            //如果验证没通过
            $error=$this->getError();
            //抛出异常
            throw new Exception($error);
        }
    }
}