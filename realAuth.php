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
    <!-- 引入实名认证样式 -->
    <link rel="stylesheet" href="./dist/css/minCss/realAuth.min.css">
</head>

<body>
    <!-- 引入头部文件 -->
    <?php
        require_once("header.php");
    ?>


    <!-- 模板的内容开始 -->
    <div class="container" id="centerCont">
        <div class="row">
            <!-- 引入左侧导航列表 -->
            <?php
                require_once("./commonNavList.php");
            ?>

            <!-- 右侧主体内容 -->
            <div class="col-sm-9">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>实名认证</h4>
                    </div>
                    <div class="panel-body">
                        <div class="col-sm-12 col-xs-12">
                            <p style="color:red">为保护您账户安全，实名认证成功之后不能修改信息，请认真填写！</p>
                            <p style="font-weight:bold">用户名：<span>小强</span></p>
                        </div>
                        
                        <form id="realForm" class="form-horizontal">
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label">姓名</label>
                                <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputEmail3">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-3 control-label">性别</label>
                                <div class="col-sm-9">
                                <input type="checkbox">男
                                <input type="checkbox">女
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label">证件类型</label>
                                <div class="col-sm-9">
                                    <select class="form-control">
                                        <option>身份证件</option>
                                        <option>通行证</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label">证件号码</label>
                                <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputEmail3">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label">出生日期</label>
                                <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputEmail3">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label">证件地址</label>
                                <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputEmail3">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label">身份证照片</label>
                                <div class="col-sm-9">
                                <h5>请点击“选择图片”，选择证件的正反两面照片。</h5>
                                <input type="file" class="form-control" id="inputEmail3">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-primary">提交认证</button>
                                </div>
                            </div>
                        </form>
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