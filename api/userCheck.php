<?php
    //接收用户数据
    $username=$_POST["username"];
    $pwd=md5($_POST["pwd"]);//md5加密32位密码
    
    //引入链接数据库资源
    require_once("conn.php");

    //构造sql语句
    $sql="select * from userinfo where username='".$username."' and pwd='".$pwd."'";

    //执行sql语句
    $result=mysqli_query($link,$sql);

    //获取查询的结果集
    $rs=mysqli_fetch_assoc($result);//不为null就是账号密码正确，登录成功，反之就是账号或者密码不正确
    //var_dump($rs);
    //根据是否执行成功返回json结果到前端
    if($rs!=null){
        //启动session
        session_start();
        //session对象创建变量
        $_SESSION["username"]=$rs["username"];
        $_SESSION["id"]=$rs["id"];
        
        //执行成功，返回数据给前端
        $rsArray=["isSuccess"=>true,"msg"=>"用户登录成功！"];
        //把关联数组转换为json格式
        echo json_encode($rsArray);
    }else{
        //执行失败，返回数据给前端
        $rsArray=["isSuccess"=>false,"msg"=>"用户登录失败！"];
        echo json_encode($rsArray);
    }
   

    //释放内存
    mysqli_free_result($result);
    require_once("freeClose.php");
    
?>