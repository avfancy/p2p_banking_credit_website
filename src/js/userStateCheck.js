//发送ajax请求到后端api验证是否登录
$.get("./api/checkState.php",function(data){

    if(!data.isSuccess){
        alert(data.msg);
        location.href="login.php";
    }
},"json");



