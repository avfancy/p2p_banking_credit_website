<?php
    //启动session
    session_start();
    //判断查找session
    if(isset($_SESSION["username"])){
        $username=$_SESSION["username"];
        $result=["isSuccess"=>true,"msg"=>"登录成功！","username"=>$username];
        echo json_encode($result);
    }else{
        $result=["isSuccess"=>false,"msg"=>"请先登录!再跳转"];
        echo json_encode($result);
    }
?>