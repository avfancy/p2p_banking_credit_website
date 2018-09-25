<!-- header -->
<!-- 引入主导航 -->
<?php
    require_once("mainNav1.php");
?>

<!-- nav2 -->
<nav class="navbar navbar-default">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <a class="navbar-brand" href="#">
                <img src="./images/logo.png" alt="图片加载失败">
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <ul class="nav navbar-nav" id="mainMenu">
            <li><a href="./index.php?menuid=1">首页</a></li>
            <li><a href="./invest.php?menuid=2">我要投资</a></li>
            <li><a href="./borrow.php?menuid=3">我要借款</a></li>
            <li class="active"><a href="./personalCenter.php?menuid=4">个人中心</a></li>
            <li><a href="#">新手指引</a></li>
            <li><a href="#">关于我们</a></li>
        </ul>
    </div>
</nav>

<!-- 点击某个栏目就添加activve高亮效果 -->
<script>
    /* 获取所有栏目的地址 */
    var reqUrl=location.href;
    /* 获取地址的ID号 */
    var menuid=reqUrl.split("=")[1];
    /* 给获取到的id添加类名，其它兄弟删除类名 */
    $("#mainMenu li").eq(menuid-1).addClass("active").siblings().removeClass("active")


</script>




