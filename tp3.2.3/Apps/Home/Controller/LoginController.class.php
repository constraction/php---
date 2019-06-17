<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {
	/*
	 * 验：验证用户名和密码，然后登录
	 */
	public function login()
	{
		header("Content-type:text/html;charset=utf-8");   
		
		// 创建连接  
		
		
		$conn=mysql_connect('localhost','root','0000');//三个参数分别对应服务器名，账号，密码  
		// 检测连接  
		
		if (!$conn)
		{  
		
		    die("连接服务器失败: " . mysql_connect_error());//连接服务器失败退出程序  
		
		}  
		
		//连接数据库studentinfo  
		
		$sele=mysql_select_db( 'studentinfo' );  
		
		if(!$sele)
		{  
		
		    die("连接数据库失败: ".mysql_error());//连接数据库失败退出程序  
		
		}
		//查询数据
		$res=mysql_query("select * from student where status=1");
     //	$res=mysql_affected_rows();//返回影响行数
		if($res&&mysql_num_rows($res))
		{
			while($sql=mysql_fetch_assoc($res))
			{
            	$arr[]=$sql;  
        	}
          //echo json_encode($arr,JSON_UNESCAPED_UNICODE);//把数据(数组嵌套json类型)转换为字符串输出，这个ajax拿数据经常用  
			echo "<link rel='stylesheet' href='../../../Public/css/TablePractice.css'>";
			echo "<table>";
			    echo"<thead>";
			        echo"<tr>";
			        	echo"<th>姓名</th>";
			            echo"<th>语文</th>";
			            echo"<th>英语</th>";
			            echo"<th>数学</th>";
			        echo"</tr>";
			    echo"</thead>";
			    echo"<tbody id='J_TbData'>";
			    	
			    	for($i=0;$i<=mysql_num_rows($res);$i++)
			    	{
			    		echo"<tr>";
			    		echo"<td>".$arr[$i]["name"]."</td>";
			            echo"<td>".$arr[$i]["chinese"]."</td>";
			            echo"<td>".$arr[$i]["english"]."</td>";
			            echo"<td>".$arr[$i]["math"]."</td>";
			            echo"</tr>";
			    	}
			    	
			    echo"</tbody>";
			echo"</table>";
			echo "查询成功！";
		}
		else
		{
			echo "查询失败！".mysql_error();			
		}
    }
	
	/*
	 * 创：创建数据库和数据表
	 */
    public function create()
    {
    	
        header("Content-type:text/html;charset=utf-8");   
		
		// 创建连接  
		
		$conn=mysql_connect('localhost','root','0000');//三个参数分别对应服务器名，账号，密码  
		
		// 检测连接  
		
		if (!$conn)
		{  
		
		    die("连接服务器失败: " . mysql_connect_error());//连接服务器失败退出程序  
		
		}  
		
		// 创建数据库命名为studentinfo  
		
		$sql_database = "CREATE DATABASE studentinfo";  
		
		if (mysql_query($sql_database,$conn)) 
		{  
		
		    echo "数据库创建成功</br>";  
		
		}
		else
		{  
		
		    echo "数据库创建失败: " . mysql_error()."</br>";  
		
		}  
		
		//连接数据库studentinfo  
		
		$sele=mysql_select_db( 'studentinfo' );  
		
		if(!$sele)
		{  
		
		    die("连接数据库失败: ".mysql_error());//连接数据库失败退出程序  
		
		}  
		
		// 创建数据表命名为student，主键为id(不为空整型)，变量名为name(255位不为空字符串)，变量名为chinese(4位不为空整型)
		
		//  变量名为english(4位不为空整型)，变量名为math(4位不为空整型)  
		
		$sql_table = "CREATE TABLE student( ".  
		
		       "id INT NOT NULL AUTO_INCREMENT, ".  
		
		       "name CHAR(255) NOT NULL, ".  
		
		       "chinese INT(4) NOT NULL, ".  
		
		       "english INT(4) NOT NULL, ".  
		
		       "math INT(4) NOT NULL, ".  
		
		       "PRIMARY KEY ( id )); ";  
		
		$retval = mysql_query( $sql_table, $conn );  
		
		if(! $retval )
		{  
		
			echo '数据表创建失败: ' . mysql_error()."</br>";  
		
		}
		else
		{  
		
			echo "数据表创建成功</br>";  
		
		}  
		
		mysql_query('set names utf8');  
		   
		
		mysql_close($conn);//关闭连接  
    }
    /*
     * 增：添加数据
     */
    public function insert()
    {
    	header("Content-type:text/html;charset=utf-8");   
		
		// 创建连接  
		
		
		$conn=mysql_connect('localhost','root','0000');//三个参数分别对应服务器名，账号，密码  
		// 检测连接  
		
		if (!$conn)
		{  
		
		    die("连接服务器失败: " . mysql_connect_error());//连接服务器失败退出程序  
		
		}  
		
		//连接数据库studentinfo  
		
		$sele=mysql_select_db( 'studentinfo' );  
		
		if(!$sele)
		{  
		
		    die("连接数据库失败: ".mysql_error());//连接数据库失败退出程序  
		
		}
		
		$datas=array(
			array("name"=>"测试猫","chinese"=>100,"english"=>80,"math"=>120,"status"=>1),
			array("name"=>"测试狗","chinese"=>90,"english"=>85,"math"=>115,"status"=>1),
			array("name"=>"测试虎","chinese"=>110,"english"=>90,"math"=>100,"status"=>1)
		);
		
		for($i=0;$i<=count($datas);$i++)
		{
			$name=$datas[$i]["name"];
			$chinese=$datas[$i]["chinese"];
			$english=$datas[$i]["english"];
			$math=$datas[$i]["math"];
			$status=$datas[$i]["status"];
			//多维数组逐条插入 studioi 表
			mysql_query(
			"insert into student(name,chinese,english,math,status)
			 values ('$name','$chinese','$english','$math','$status')");
		}
		
		$res=mysql_affected_rows();//返回影响行
		
		if($res>0)
		{
			echo "数据添加成功!</br>";
		}else
		{
			echo "数据添加失败!</br>". mysql_error();
		}
		mysql_close($conn);//关闭连接 
    }
    /*
     * 删：删除数据
     */
    public function delete()
    {
    	header("Content-type:text/html;charset=utf-8");   
		
		// 创建连接  
		
		
		$conn=mysql_connect('localhost','root','0000');//三个参数分别对应服务器名，账号，密码  
		// 检测连接  
		
		if (!$conn)
		{  
		
		    die("连接服务器失败: " . mysql_connect_error());//连接服务器失败退出程序  
		
		}
		else
		{
			echo "连接数据库成功"."</br>";
		}
		
		//连接数据库studentinfo  
		
		$sele=mysql_select_db( 'studentinfo' );  
		
		if(!$sele)
		{  
		
		    die("连接数据库失败: ".mysql_error());//连接数据库失败退出程序  
		
		}
		else
		{
			echo "连接数据库成功"."</br>";
		}
		
		//真·删除
        //	mysql_query("delete from student where name='$name'");//删除 student 表里为 $name 的整条数据
		//假·删除
		mysql_query("update student 
						set status=0 
						where name='测试虎'");
						
		$res=mysql_affected_rows();//返回影响行数
		
		if($res>0)
		{
			echo "删除成功！";
		}
		else
		{
			echo "删除失败！".mysql_error();			
		}
		
    }
    /*
     * 改：修改数据
     */
    public function updata()
    {
    	header("Content-type:text/html;charset=utf-8");   
		
		// 创建连接  
		
		
		$conn=mysql_connect('localhost','root','0000');//三个参数分别对应服务器名，账号，密码  
		// 检测连接  
		
		if (!$conn)
		{  
		
		    die("连接服务器失败: " . mysql_connect_error());//连接服务器失败退出程序  
		
		}
		else
		{
			echo "连接服务器成功"."</br>";
		}
		
		//连接数据库studentinfo  
		
		$sele=mysql_select_db( 'studentinfo' );  
		
		if(!$sele)
		{  
		
		    die("连接数据库失败: ".mysql_error());//连接数据库失败退出程序  
		
		}
		else
		{
			echo "连接数据库成功"."</br>";
		}
		//真·删除
       //mysql_query("delete from student where name='$name'");//删除 student 表里为 $name 的整条数据
		//假·删除
		mysql_query("update student set math=110 where name='测试虎'");
		$res=mysql_affected_rows();//返回影响行数
		if($res>0)
		{
			echo "更新成功！";
		}
		else
		{
			echo "更新失败！".mysql_error();			
		}
    }
    /*
     * 查：查询数据
     */
    public function select()
    {
    	header("Content-type:text/html;charset=utf-8");   
		
		// 创建连接  
		
		
		$conn=mysql_connect('localhost','root','0000');//三个参数分别对应服务器名，账号，密码  
		// 检测连接  
		
		if (!$conn)
		{  
		
		    die("连接服务器失败: " . mysql_connect_error());//连接服务器失败退出程序  
		
		}  
		
		//连接数据库studentinfo  
		
		$sele=mysql_select_db( 'studentinfo' );  
		
		if(!$sele)
		{  
		
		    die("连接数据库失败: ".mysql_error());//连接数据库失败退出程序  
		
		}
		//查询数据
		$res=mysql_query("select * from student where status=1");
      //$res=mysql_affected_rows();//返回影响行数
		if($res&&mysql_num_rows($res))
		{
			while($sql=mysql_fetch_assoc($res))
			{
            	$arr[]=$sql;  
        	}
           //echo json_encode($arr,JSON_UNESCAPED_UNICODE);//把数据(数组嵌套json类型)转换为字符串输出，这个ajax拿数据经常用  
			echo "<link rel='stylesheet' href='../../../Public/css/TablePractice.css'>";
			echo "<table>";
			    echo"<thead>";
			        echo"<tr>";
			        	echo"<th>姓名</th>";
			            echo"<th>语文</th>";
			            echo"<th>英语</th>";
			            echo"<th>数学</th>";
			        echo"</tr>";
			    echo"</thead>";
			    echo"<tbody id='J_TbData'>";
			    	
			    	for($i=0;$i<=mysql_num_rows($res);$i++)
			    	{
			    		echo"<tr>";
			    		echo"<td>".$arr[$i]["name"]."</td>";
			            echo"<td>".$arr[$i]["chinese"]."</td>";
			            echo"<td>".$arr[$i]["english"]."</td>";
			            echo"<td>".$arr[$i]["math"]."</td>";
			            echo"</tr>";
			    	}
			    	
			    echo"</tbody>";
			echo"</table>";
			echo "查询成功！";
		}
		else
		{
			echo "查询失败！".mysql_error();			
		}
		$this->display("./Login_select()");
    }
}