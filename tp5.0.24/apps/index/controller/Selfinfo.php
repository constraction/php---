<?php
namespace app\index\controller;
use think\Request;

class Selfinfo extends \think\Controller
{
    public function index()
    {
        return $this->fetch('self_info');
    }

    /**
     * 上传头像
     */
    public function upload()
    {
        // 获取表单上传文件 例如上传了001.jpg
        $file =$this-> request->file('i');
        // 移动到框架应用根目录/public/uploads/ 目录下
        if($file){
            $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
            if($info){
                $image_url=ROOT_PATH . 'public' . DS . 'uploads'.'\\'.$info->getSaveName();
                $su=str_replace("\\","/",$image_url);
                $session['name']=session('name');
                $wher=array(
                    'username'  =>  $session['name'],
                    'status'    =>  1
                );
                $user=db('user')
                        ->where($wher)
                        ->field('uid')
                        ->find();
                
                $uid=$user['uid'];
                $data['head']=$info->getFileName();
                $data['head_url']=$su;
                $where=array(
                    'iid'   =>  $uid,
                );
                $inf=db('info')->where($where)->update($data);
                if ($inf) {
                    return $this->success('上传成功','selfinfo/show'); 
                } else {
                    return $this->error('上传失败');
                }
                
            }else{
                // 上传失败获取错误信息
                echo $file->getError();
            }
        }
    }

    /**
     * 从数据库读取图片
     */
    public function show()
    {
        $info=db("info")
                ->field('head_url')
                ->find();
        cookie('src',$info['head_url'],3600);
        echo cookie('src');
        
    }
    /**
     * 退出登录，清空 session
     */
    public function exits()
    {
        session('name',null);
        return $this->fetch('Login/login');
    }
}