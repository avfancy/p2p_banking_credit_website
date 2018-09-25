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
					<div class="panel-body">
						<div class="row">
							<div class="el-tip-info">
								<h3>信用借款</h3>
								<p>
									<span class="text-info">授信额度：</span><span class="text-danger">2000 </span> &emsp;&emsp;&emsp;
									<span class="text-info">可借金额：</span><span class="text-danger">2000</span>
								</p>
							</div>

							<div class="page-header lead">
								借款信息
								<label class="label label-primary">信用标</label>
							</div>
							<form id="borrowForm" class="form-horizontal el-borrow-form" method="post">
								<div class="form-group">
									<label class="control-label">
										借款类型
									</label>
									<select class="form-control" name="borrowType" id="borrowType">
										<option value="t1">信用贷</option>
										<option value="t2">车易贷</option>
										<option value="t3">房易贷</option>
									</select>
								</div>
								<div class="form-group">
									<label class="control-label">
										借款金额
									</label>
									<div class="input-group">
										<input class="form-control" name="borrowAmount" />
										<span class="input-group-addon">元</span>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label">
										借款利息
									</label>
									<div class="input-group">
										<input class="form-control" name="currentRate" />
										<span class="input-group-addon">%</span>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label">
										借款期限
									</label>
									<div class="input-group">
										<select class="form-control" name="monthes2Return">
											<option value="1">1</option>
											<option value="3">3</option>
											<option value="6">6</option>
											<option value="9">9</option>
											<option value="12">12</option>
											<option value="24">24</option>
										</select>
										<span class="input-group-addon">月</span>
									</div>
								</div>

								<div class="form-group">
									<label class="control-label">
										还款方式
									</label>
									<label class="radio-inline">
										<input type="radio" value="0" checked="checked" name="repayment" />
										按月分期
									</label>
									<label class="radio-inline">
										<input type="radio" value="1" name="repayment" />
										按月到期
									</label>
								</div>

								<div class="form-group">
									<label class="control-label">
										最小投标
									</label>
									<div class="input-group">
										<input class="form-control" name="minAmount" />
										<span class="input-group-addon">元</span>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label">
										最大投标
									</label>
									<div class="input-group">
										<input class="form-control" name="maxAmount" />
										<span class="input-group-addon">元</span>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label">
										投标奖金
									</label>
									<div class="input-group">
										<input class="form-control" name="rewardAmount" value="0" />
										<span class="input-group-addon">%</span>
									</div>
								</div>

								<div class="form-group">
									<label class="control-label">招标天数</label>
									<div class="input-group">
										<select class="form-control" name="disableDays">
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
											<option value="11">11</option>
											<option value="12">12</option>
										</select>
										<span class="input-group-addon">天</span>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label">借款标题</label>
									<input name="borrowTitle" class="form-control" />
								</div>
								<div class="form-group">
									<label>借款描述</label>
									<textarea name="description" rows="4" class="form-control col-sm-6" style="resize: none;"></textarea>
								</div>
								<div class="form-group">
									<button id="btnSubmit" class="btn btn-primary" type="button" data-loading-text="提交">提交申请</button>
								</div>
							</form>
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
	<!-- 引入borrow.js -->
	<script src="./dist/js/borrow.min.js"></script>

</body>

</html>