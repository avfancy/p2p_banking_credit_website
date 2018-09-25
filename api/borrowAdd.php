<?php
    //接收前端数据
    $borrowType=$_POST["borrowType"];//string
    $borrowAmount=$_POST["borrowAmount"];
    $currentRate=$_POST["currentRate"];
    $monthes2Return=$_POST["monthes2Return"];
    $repayment=$_POST["repayment"];//string
    $minAmount=$_POST["minAmount"];
    $maxAmount=$_POST["maxAmount"];
    $rewardAmount=$_POST["rewardAmount"];
    $disableDays=$_POST["disableDays"];
    $borrowTitle=$_POST["borrowTitle"];//string
    $description=$_POST["description"];//string
    //开启session
    session_start();
    //使用session获取id
    $id=$_SESSION["id"];
    
    //构造sql语句
    $sql="insert into borrowinfo(borrowType,borrowAmount,currentRate,monthes2Return,repayment,minAmount,maxAmount,rewardAmount,disableDays,borrowTitle,description,id) values('$borrowType',$borrowAmount,$currentRate,$monthes2Return,'$repayment',$minAmount,$maxAmount,$rewardAmount,$disableDays,'$borrowTitle','$description',$id)";

    //连接数据库
    require_once("./conn.php");
    //执行sql语句
    $result=mysqli_query($link,$sql);
    //根据执行的结果，返回数据给前端
    if($result){
        //成功
        $rsArray=["isSuccess"=>true,"msg"=>"借款信息提交成功"];
        echo json_encode($rsArray);
    }else{
        //失败
        $rsArray=["isSuccess"=>false,"msg"=>"借款信息提交失败"];
    }

    //关闭数据库连接
    require_once("./freeClose.php");

?>





