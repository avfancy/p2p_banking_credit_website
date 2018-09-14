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
</head>

<body>
    <!-- 引入头部文件 -->
    <?php
        require_once("header.php");
    ?>

    <!-- banner -->
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- 轮播图圆点显示 -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        </ol>
        <!-- 轮播图片 -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="./images/banner01.jpg" alt="图片加载失败">
                <div class="carousel-caption">
                </div>
            </div>
            <div class="item">
                <img src="./images/banner02.jpg" alt="图片加载失败">
                <div class="carousel-caption">
                </div>
            </div>
        </div>
        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- 主营业务 -->
    <div id="primaryList" class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="row">
                    <div class="col-sm-3">
                        <img src="./images/feature01.png" alt="">
                    </div>
                    <div class="col-sm-9">
                        <h3>投资理财</h3>
                        <p>稳定投资、高收益、短期限，易融贷先行赔付，保障投资人权益。</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="row">
                    <div class="col-sm-3">
                        <img src="./images/feature02.png" alt="">
                    </div>
                    <div class="col-sm-9">
                        <h3>投资理财</h3>
                        <p>稳定投资、高收益、短期限，易融贷先行赔付，保障投资人权益。</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="row">
                    <div class="col-sm-3">
                        <img src="./images/feature03.png" alt="">
                    </div>
                    <div class="col-sm-9">
                        <h3>投资理财</h3>
                        <p>稳定投资、高收益、短期限，易融贷先行赔付，保障投资人权益。</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 借贷信息 -->
    <div class="container">
        <div class="panel panel-default">
            <!-- Default panel contents -->
            <div class="panel-heading">
                <h2 class="pull-left">进行中借款</h2>
                <a class="pull-right" href="#">进入投资列表</a>
            </div>
            <!-- Table -->
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

    <!-- 最新资讯 -->
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="panel panel-default">
                    <div class="panel-heading clearfix">
                        <h2 class="pull-left">企业最新资讯</h2>
                        <a class="pull-right" href="#">更多资讯</a>
                    </div>
                    <div class="panel-body">
                        <ul>
                            <li><a href="#">央视力挺互联网金融 <span class="pull-right">发表日期：2015-03-23</span></a></li>
                            <li><a href="#">央视力挺互联网金融 <span class="pull-right">发表日期：2015-03-23</span></a></li>
                            <li><a href="#">央视力挺互联网金融 <span class="pull-right">发表日期：2015-03-23</span></a></li>
                            <li><a href="#">央视力挺互联网金融 <span class="pull-right">发表日期：2015-03-23</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="panel panel-default ">
                    <div class="panel-heading clearfix">
                        <h2 class="pull-left">用户反馈</h2>
                        <a class="pull-right" href="#">更多资讯</a>
                    </div>
                    <div class="panel-body">
                        <ul>
                            <li><a href="#">央视力挺互联网金融 <span class="pull-right">发表日期：2015-03-23</span></a></li>
                            <li><a href="#">央视力挺互联网金融 <span class="pull-right">发表日期：2015-03-23</span></a></li>
                            <li><a href="#">央视力挺互联网金融 <span class="pull-right">发表日期：2015-03-23</span></a></li>
                            <li><a href="#">央视力挺互联网金融 <span class="pull-right">发表日期：2015-03-23</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="panel panel-default">
                    <div class="panel-heading clearfix">
                        <h2 class="pull-left">企业最新资讯</h2>
                        <a class="pull-right" href="#">更多资讯</a>
                    </div>
                    <div class="panel-body">
                        <ul>
                            <li><a href="#">央视力挺互联网金融 <span class="pull-right">发表日期：2015-03-23</span></a></li>
                            <li><a href="#">央视力挺互联网金融 <span class="pull-right">发表日期：2015-03-23</span></a></li>
                            <li><a href="#">央视力挺互联网金融 <span class="pull-right">发表日期：2015-03-23</span></a></li>
                            <li><a href="#">央视力挺互联网金融 <span class="pull-right">发表日期：2015-03-23</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="panel panel-default ">
                    <div class="panel-heading clearfix">
                        <h2 class="pull-left">用户反馈</h2>
                        <a class="pull-right" href="#">更多资讯</a>
                    </div>
                    <div class="panel-body">
                        <ul>
                            <li><a href="#">央视力挺互联网金融 <span class="pull-right">发表日期：2015-03-23</span></a></li>
                            <li><a href="#">央视力挺互联网金融 <span class="pull-right">发表日期：2015-03-23</span></a></li>
                            <li><a href="#">央视力挺互联网金融 <span class="pull-right">发表日期：2015-03-23</span></a></li>
                            <li><a href="#">央视力挺互联网金融 <span class="pull-right">发表日期：2015-03-23</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 引入页脚文件 -->
    <?php
        require_once("footer.php");
    ?>



    <!-- 引入jquery.js -->
    <script src="./lib/jquery/jquery.min.js"></script>
    <!-- 引入bootstrap.js -->
    <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- 引入js -->
    <script src="./src/js/index.js"></script>


</body>

</html>