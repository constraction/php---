<?php
header("Content-type:text/html;charset=utf-8");
/*
 * 添加数据
 */



function addtabel_data(){  
	$conn=mysqli_connect('localhost','root','0000');//三个参数分别对应服务器名，账号，密码

    //多维数组  

    $datas=array(  

      array("name"=>"测试猫","chinese"=>100,"english"=>100,"math"=>100),  

      array("name"=>"测试狗","chinese"=>99,"english"=>99,"math"=>99),  

      array("name"=>"测试虎","chinese"=>98,"english"=>98,"math"=>98)  

    );  

    for($i=0;$i<count($datas);$i++){  

       $name=$datas[$i]["name"];  

       $chinese=$datas[$i]["chinese"];  

       $english=$datas[$i]["english"];  

       $math=$datas[$i]["math"];  

       //多维数组数据逐条插入student表

      mysqli_query($conn,"insert into student(name,chinese,english,math) values ($name,$chinese,$english,$math)");

    }  

    $res=mysqli_affected_rows($conn);//返回影响行  

    if($res>0){  

        echo "添加数据成功</br>";  

    }else{  

        echo "添加数据失败</br>";  

    }  

}  

addtabel_data();//调用
?>