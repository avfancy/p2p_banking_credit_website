<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>p2p金融借贷网站</title>
    <!-- 引入bootstrap样式 -->
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
    <!-- 引入bootstrapValidator.js -->
    <link rel="stylesheet" href="./lib/bootstrapValidator/css/bootstrapValidator.min.css">
    <!-- 引入自定义less压缩css -->
    <link rel="stylesheet" href="./dist/css/minCss/regLogin.min.css">
</head>

<body>
    <!-- header -->
    <!-- 引入主导航 -->
    <?php
        require_once("./mainNav1.php");
    ?>

    <!-- nav2 -->
    <nav class="navbar navbar-default">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand" href="#">
                    <img src="./images/logo.png" alt="图片加载失败">
                </a>
                <span>用户注册</span>
            </div>  
        </div>
    </nav>


    <!-- 模板的内容开始 -->
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">用户注册</h3>
            </div>
            <div class="panel-body">
                <p>请填写注册信息，点击“提交注册”即可完成注册！</p>
                <form id="regForm" class="form-horizontal">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">用户名</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" name="username" placeholder="请输入用户名">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">密&emsp;码</label>
                        <div class="col-sm-9">
                        <input type="password" class="form-control" name="pwd" placeholder="请输入密码">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">确认密码</label>
                        <div class="col-sm-9">
                        <input type="password" class="form-control" name="repeatPwd" placeholder="请确认密码">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">手机号码</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" name="tel" placeholder="请输入手机号码">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">电子邮箱</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" name="email" placeholder="请输入电子邮箱">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-9">
                        <div class="checkbox">
                            <label>
                            <input type="checkbox"> 使用协议说明书
                            </label>
                        </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-9">
                        <button type="submit" class="btn btn-success">同意协议并注册</button>
                        <a href="./login.php">已有账号，马上登录</a>
                        </div>
                    </div>
                </form>
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
    <!-- 引入bootstrapValidator.js -->
    <script src="./lib/bootstrapValidator/js/bootstrapValidator.min.js"></script>
    <!-- 引入js -->
    <script src="./dist/js/index.min.js"></script>
    <!-- 引入表单验证js -->
    <script src="./dist/js/formVlidator.min.js"></script>

</body>

</html>