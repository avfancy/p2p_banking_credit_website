<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>p2p金融借贷网站</title>
    <!-- 引入bootstrap样式 -->
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
    <!-- 引入自定义less压缩css -->
    <link rel="stylesheet" href="./dist/css/minCss/index.min.css">
    <!-- 引入自定义个人资料样式 -->
    <link rel="stylesheet" href="./dist/css/minCss/personalData.min.css">
</head>

<body>
    <!-- 引入头部文件 -->
    <?php
        require_once("header.php");
    ?>


    <!-- 模板的内容开始 -->
    <div class="container">
        <div class="row">
            <!-- 引入左侧导航列表 -->
            <?php
                require_once("./commonNavList.php");
            ?>

            <!-- 右侧主体内容 -->
            <div class="col-sm-9">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">个人资料</h3>
                </div>

                <div class="panel-body">
                    Panel content
                </div>
                </div>
            </div>

        </div>
    </div>

    <!-- 模板的内容结尾 -->
    
    <!-- 引入页脚文件 -->
    <?php
        require_once("footer.php");
    ?>


    <!-- 引入jquery.js -->
    <script src="./lib/jquery/jquery.min.js"></script>
    <!-- 引入bootstrap.js -->
    <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- 引入js -->
    <script src="./dist/js/index.min.js"></script>

</body>

</html>