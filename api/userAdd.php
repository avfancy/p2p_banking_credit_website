<?php
    //接收用户数据
    $username=$_POST["username"];
    $pwd=md5($_POST["pwd"]);//md5加密32位密码
    $tel=$_POST["tel"];
    $email=$_POST["email"];
   
    //链接数据库
    require_once("conn.php");

    //构造sql语句
    $sql="insert into userinfo(username,pwd,tel,email) values('".$username."','".$pwd."','".$tel."','".$email."')";

    //执行sql语句
    $result=mysqli_query($link,$sql);

    //根据是否执行成功返回json结果到前端
    if($result){
        $rsArray=["isSuccess"=>true,"msg"=>"用户注册成功！"];
        //把关联数组转换为json格式
        echo json_encode($rsArray);
    }else{
        $rsArray=["isSuccess"=>false,"msg"=>"用户注册失败！"];
        echo json_encode($rsArray);
    }


    //释放内存
    require_once("freeClose.php");
    
?>