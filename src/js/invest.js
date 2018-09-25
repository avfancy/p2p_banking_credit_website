/* 借款页面加载时自动发起ajax请求到后台获取数据 */
/* $.get("./api/invest.php",function(result){
    //数据和模板结合
    var htmlStr=$("#investTmpl").tmpl(result);
    //将结合的数据渲染
    $("#investData").html(htmlStr);
},"json") */
$(function () {
    /* 分页效果 */
    $("#page").page({
        debug: true,//开启调试
        showInfo: true,//显示调试信息
        showJump: true,//跳转功能
        pageSize:3,//定义每页显示的数据条数
        showPageSizes: true,//自定义每页显示条数
        remote: {
            //请求数据的地址
            url: './api/invest.php',
            //请求成功的回调
            success: function (data) {
                console.log("回来的数据",data);
                //数据和模板结合
                var htmlStr=$("#investTmpl").tmpl(data.list);
                //将结合的数据渲染
                $("#investData").html(htmlStr);
            }
        }
    });

    $("#page").on("pageClicked", function (event, pageIndex) {
        //$("#eventLog").append('EventName = pageClicked , pageIndex = ' + pageIndex + '<br />');
    }).on('jumpClicked', function (event, pageIndex) {
        //$("#eventLog").append('EventName = jumpClicked , pageIndex = ' + pageIndex + '<br />');
    }).on('pageSizeChanged', function (event, pageSize) {
        //$("#eventLog").append('EventName = pageSizeChanged , pageSize = ' + pageSize + '<br />');
    });
});




 