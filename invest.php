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
    <!-- 引入我要投资样式 -->
    <link rel="stylesheet" href="./dist/css/minCss/invest.min.css">
</head>

<body>
    <!-- 引入头部文件 -->
    <?php
        require_once("header.php");
    ?>


    <!-- 模板的内容开始 -->
    <div class="container">
        <h3>投资列表</h3>
        <div class="stateCut">
            <p class="pull-left">标的状态</p>
            <ul class="nav nav-pills pull-left">
                <li role="presentation" class="active"><a href="#">全部</a></li>
                <li role="presentation"><a href="#">招投标</a></li>
                <li role="presentation"><a href="#">还款中</a></li>
            </ul>
        </div>
        <!-- 表格 -->
        <div class="bs-example" data-example-id="hoverable-table">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>借款人</th>
                        <th class="titleList">借款标题</th>
                        <th>年利率</th>
                        <th>金额</th>
                        <th class="titleList">还款方式</th>
                        <th>进度</th>
                        <th>操作</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>张三</td>
                        <td class="titleList">给我2000度过难关</td>
                        <td>10.00%</td>
                        <td>2,000.00</td>
                        <td class="titleList">按月分期还款</td>
                        <td>78.00%</td>
                        <td> <button type="button" class="btn btn-danger btn-sm">查看</button></td>
                    </tr>
                    <tr>
                        <td>张三</td>
                        <td class="titleList">给我2000度过难关</td>
                        <td>10.00%</td>
                        <td>2,000.00</td>
                        <td class="titleList">按月分期还款</td>
                        <td>78.00%</td>
                        <td> <button type="button" class="btn btn-danger btn-sm">查看</button></td>
                    </tr>
                </tbody>
            </table>
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