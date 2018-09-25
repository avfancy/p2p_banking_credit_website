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
	<!-- 引入左侧导航样式 -->
	<link rel="stylesheet" href="./dist/css/minCss/commonNavList.min.css">
	<!-- 引入右侧导航样式 -->
	<link rel="stylesheet" href="./dist/css/minCss/borrow_list.min.css">
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
		<div class="panel panel-default col-sm-9 col-xs-12 rightCont">
			<button type="button" id="btnOff" class="btn btn-primary btn-xs">隐藏</button>
			<div class="panel-heading">
				<h3 class="panel-title">借款类别报表统计</h3>
			</div>
			<div class="panel-body">
                <!-- 给echarts准备一个dom盒子 -->
				<div id="mybox" style="width:100%;height:400px"></div>
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
	<!-- 引入jquery模板 -->
	<script src="./lib/jqueryTemplate/jquery.tmpl.js"></script>
    <!-- 引入bootstrap.js -->
    <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- 引入js -->
    <script src="./dist/js/index.min.js"></script>
	<!-- 引入个人中心js -->
	<script src="./dist/js/personalCenter.min.js"></script>
    <!-- 引入echarts -->
    <script src="./lib/echarts/echarts-all.js"></script>
	<!-- 引入报表统计.js -->
	<script src="./dist/js/borrow_statistics.min.js"></script>
   
	


</body>

</html>