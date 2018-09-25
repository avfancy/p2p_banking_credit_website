<?php
    header("Content-type:text/html;charset=utf-8");
    //销毁session
    session_start();
    session_destroy();
    //注销之后跳转至登录页面
    echo "<script>alert('退出成功');location.href='../login.php'</script>";
?>