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
  <!-- 引入个人中心less压缩css -->
  <link rel="stylesheet" href="./dist/css/minCss/personalCenter.min.css">
</head>

<body>
  <!-- 引入头部文件 -->
  <?php
      require_once("header.php");
  ?>


  <!-- 个人中心内容开始 -->
  <div class="container" id="centerCont">
    <div class="row">
      <!-- 引入左侧导航列表 -->
      <?php
        require_once("./commonNavList.php");
      ?>

      <!-- 右侧主体内容 -->
      <div class="col-sm-9 col-xs-12 rightCont">
        <button type="button" id="btnOff" class="btn btn-primary btn-xs">隐藏</button>
        <div class="panel panel-default">
          <!-- 头部用户信息 -->
          <div class="panel-heading">
            <img class="pull-left" src="./images/head_icon.jpg" alt="">
            <div class="pull-left panel-title">
                <p>昵&emsp;称：源代码教育</p>
                <p>用户名：小强</p>
                <p>最后登录时间：2016-10-25 15:30:10</p>
            </div>
          </div>
          <!-- 中间内容 -->
          <div class="panel-body middleCont">
            <!-- 内容头部 -->
            <div class="row cash">
              <div class="col-sm-4">总金额：<span>10000元</span></div>
              <div class="col-sm-4">可用金额：<span>8000元</span></div>
              <div class="col-sm-4">冻结金额：<span>2000元</span></div>
            </div>
            <!-- 内容身体 -->
            <div class="contBtn">
              <button type="button" class="btn btn-primary btn-lg">账户充值</button>
              <button type="button" class="btn btn-danger btn-lg">账户提现</button>
            </div>
            <!-- 内容尾部 -->
            <div class="row msgList">
              <div class="col-sm-4">
                <div class="essay">
                  <img class="pull-left" src="./images/shiming.png" alt="">
                  <p class="auth">实名认证</p>
                  <p style="font-size:12px">未认证&emsp;<a href="#">马上认证</a></p>
                </div>
                <p style="margin-top:20px">实名认证之后才能在平台投资</p>
              </div>
              <div class="col-sm-4">
                <div class="essay">
                  <img class="pull-left" src="./images/shouji.jpg" alt="">
                  <p class="auth">实名认证</p>
                  <p style="font-size:12px">已认证&emsp;<a href="#">查看</a></p>
                </div>
                <p style="margin-top:20px">可以收到系统操作信息，并增加使用安全性</p>
              </div>
              <div class="col-sm-4">
                <div class="essay">
                  <img class="pull-left" src="./images/youxiang.jpg" alt="">
                  <p class="auth">实名认证</p>
                  <p style="font-size:12px">已认证&emsp;<a href="#">查看</a></p>
                </div>
                <p style="margin-top:20px">您可以设置邮箱来接收重要信息</p>
              </div>
            </div>
            <div class="row vip">
              <div class="col-md-4">
                <div class="essay">
                  <img class="pull-left" src="./images/baozhan.jpg" alt="">
                  <p class="auth">实名认证</p>
                  <p style="font-size:12px">普通用户&emsp;<a href="#">查看</a></p>
                </div>
                  <p style="margin-top:20px">VIP会员，让你更快捷的投资</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- 个人中心内容结尾 -->


  <!-- 引入页脚文件 -->
  <?php
      require_once("footer.php");
  ?>


  <!-- 引入jquery.js -->
  <script src="./lib/jquery/jquery.min.js"></script>
  <!-- 引入session防火墙 -->
  <script src="./src/js/userStateCheck.js"></script>
  
  <!-- 引入bootstrap.js -->
  <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
  <!-- 引入js -->
  <script src="./dist/js/index.min.js"></script>
  <!-- 引入个人中心js -->
  <script src="./dist/js/personalCenter.min.js"></script>


</body>

</html>