/* 借款页面加载时自动发起ajax请求到后台获取数据 */
$.get("./api/borrow_list.php",function(result){
    //数据和模板结合
    var htmlStr=$("#borrowTmpl").tmpl(result);
    //将结合的数据渲染
    $("#tmplData").html(htmlStr);
},"json")



