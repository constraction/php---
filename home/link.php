<?php
header("Content-type:text/html;charset=utf-8");   
/*
 * 连接数据库
 */
// 创建连接  

$conn=mysqli_connect('localhost','root','0000');//三个参数分别对应服务器名，账号，密码  

// 检测连接  

if (mysqli_connect_error($conn)) {  

    die("连接服务器失败: " . mysqli_connect_error());//连接服务器失败退出程序  

}  

// 创建数据库命名为studentinfo  

$sql_database = "CREATE DATABASE studentinfo";  

if (mysqli_query($conn,$sql_database)) {  

    echo "数据库创建成功</br>";  

} else {  

    echo "数据库创建失败: " . mysqli_error()."</br>";  

}  

//连接数据库studentinfo  

$sele=mysqli_select_db( $conn,'studentinfo' );  

if(!$sele){  

    die("连接数据库失败: ".mysqli_error());//连接数据库失败退出程序  

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

$retval = mysqli_query($conn, $sql_table );  

if(! $retval ){  

echo '数据表创建失败: ' . mysqli_error()."</br>";  

}else{  

echo "数据表创建成功</br>";  

}  

mysqli_query($conn,'set names utf8');  

   

mysqli_close($conn);//关闭连接  




?>