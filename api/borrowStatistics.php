<?php
    header("Content-type:text/html;charset-utf-8");
    //连接数据库
    require_once("./conn.php");

    //构造sql语句，根据id查询
    //获取id
    session_start();
    $id=$_SESSION["id"];
    //sql语句
    $sql="select * from borrowinfo where id=$id";

    //执行sql语句
    $result=mysqli_query($link,$sql);

    //数据
    $data=[
        ["value"=> 0, "name"=> '信用贷'],
        ["value"=> 0, "name"=> '房易贷'],
        ["value"=> 0, "name"=> '车易贷'],
    ];

    //遍历结果集
    while($rs=mysqli_fetch_assoc($result)){
        //根据借款的类型修改数据中的值
        if($rs["borrowType"]=="t1"){
            $data[0]["value"]+=$rs["borrowAmount"];
        }else if($rs["borrowType"]=="t2"){
            $data[2]["value"]+=$rs["borrowAmount"];
        }else if($rs["borrowType"]=="t3"){
            $data[1]["value"]+=$rs["borrowAmount"];
        }
    };
    //var_dump($data);
 
    //返回的结果
    $result=[
        "title"=>['信用贷','房易贷','车易贷'],
        "data"=>$data
    ];
    //将数据返回给前端
    echo json_encode($result);
  
?>