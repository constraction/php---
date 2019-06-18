<?php
namespace Home\Controller;
use Think\Controller;
class RegController extends Controller {
	 /*
	 * 注册
	 */
	public function index()
	{
		header("Content-type:text/html;charset=utf-8");   
		
		// 创建连接  
		
		
		$conn=mysql_connect('localhost','root','0000');//三个参数分别对应服务器名，账号，密码  
		// 检测连接  
		
		if (!$conn)
		{  
		
		    die("连接服务器失败! " . mysql_connect_error());//连接服务器失败退出程序  
		
		}
		else
		{
			echo "连接服务器成功!";
		}
		
		//连接数据库studentinfo  
		
		$sele=mysql_select_db( 'studentinfo' );  
		
		if(!$sele)
		{  
		
		    die("连接数据库失败: ".mysql_error());//连接数据库失败退出程序  
		
		}
		else
		{
			echo "连接数据库成功!";
		}

		//插入数据
		$name=$_POST('name');
		$acc=$_POST('acc');
		$phone=$_POST('phone');
		$pwd=$_POST('pwd1');

		if ($pwd==$_POST('pwd2'))
		{
			$res=mysql_query("insert into user(name,acc,phone,pwd,status) values ('$name','$acc','$phone','$pwd',1)");
			//	$res=mysql_affected_rows();//返回影响行数
			if($res&&mysql_num_rows($res))
			{
				 echo "注册成功！";
			}
			else
			{
				echo "注册失败！".mysql_error();			
			}	
		}else {
			echo "两次密码不一致，请返回去重新输入";
		}
    }
}