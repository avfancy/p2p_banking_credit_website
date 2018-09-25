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
    <!-- 引入自定义borrow.css -->
    <link rel="stylesheet" href="./dist/css/minCss/borrow.min.css">
</head>

<body>
    <!-- 引入头部文件 -->
    <?php
        require_once("header.php");
    ?>


    <!-- 模板的内容开始 -->
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading" id="credit">
                        <h3 class="panel-title">信用贷</h3>
                    </div>
                    <div class="panel-body">
                        <p>可借金额&yen;2000.00</p>
                        <p><a href="#">申请条件</a></p>
                        <p>仅限成都地区</p>
                        <p><img src="./images/sequare.png" alt=""> 填写基本资料</p>
                        <p><img src="./images/sequare.png" alt="">身份认证</p>
                        <p><img src="./images/sequare.png" alt="">视频认证</p>
                        <p><a href="./borrow_apply.php?id=t1"><button type="button" class="btn btn-primary btn-sm">立刻申请</button></a></p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading" id="car">
                        <h3 class="panel-title">车易贷</h3>
                    </div>
                    <div class="panel-body">
                        <p>可借金额&yen;2000.00</p>
                        <p><a href="#">申请条件</a></p>
                        <p>仅限成都地区</p>
                        <p><img src="./images/sequare.png" alt="">填写基本资料</p>
                        <p><img src="./images/sequare.png" alt="">身份认证</p>
                        <p><img src="./images/sequare.png" alt="">视频认证</p>
                        <p><a href="./borrow_apply.php?id=t2"><button type="button" class="btn btn-primary btn-sm">立刻申请</button></a></p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading" id="house">
                        <h3 class="panel-title">房易贷</h3>
                    </div>
                    <div class="panel-body">
                        <p>可借金额&yen;12000.00</p>
                        <p><a href="#">申请条件</a></p>
                        <p>仅限成都地区</p>
                        <p><img src="./images/sequare.png" alt="">填写基本资料</p>
                        <p><img src="./images/sequare.png" alt="">身份认证</p>
                        <p><img src="./images/sequare.png" alt="">视频认证</p>
                        <p><a href="./borrow_apply.php?id=t3"><button type="button" class="btn btn-primary btn-sm">立刻申请</button></a></p>
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