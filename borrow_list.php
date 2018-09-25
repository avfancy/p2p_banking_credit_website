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
				<h3 class="panel-title">借款项目</h3>
			</div>
			<div class="panel-body">
				<table class="table table-hover">
					<thead>
                        <tr>
                            <th>标题</th>
                            <th>时间</th>
                            <th>借款金额(元)</th>
                            <th>期限</th>
                            <th>利率</th>
                            <th>状态</th>
                        </tr>
                    </thead>
					<tbody id="tmplData">
						
					</tbody>
				</table>
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
	<!-- 引入borrow.js -->
	<script src="./dist/js/borrow_list.min.js"></script>

	<!-- 定义模板，渲染数据 -->
	<script id="borrowTmpl" type="text/html">
		<tr>
			<td>${borrowTitle}</td>
			<td>${submitDatetime}</td>
			<td>${borrowAmount}</td>
			<td>${monthes2Return}</td>
			<td>${currentRate}</td>
			<td>
				<label class="text-muted">待发布</label>
			</td>
		</tr>
	</script>


</body>

</html>