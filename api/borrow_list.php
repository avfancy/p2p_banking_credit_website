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

    //遍历获取结果集
    //mysqli_fetch_assoc($result)有结果返回行记录的数组，没记录返回null
    $borrowData=[];//定义空数组
    //遍历结果集
    while($rs=mysqli_fetch_assoc($result)){
        //将遍历的数据追加至空数组；
        array_push($borrowData,$rs);
    }
    //将数据返回给前端
    echo json_encode($borrowData);
?>