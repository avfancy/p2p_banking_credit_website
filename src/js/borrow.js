/* 定义borrow_apply中借款类型js */
//获取地址id
var reqUrl=location.href;
var borrowType=reqUrl.split("=")[1];
$("#borrowType").val(borrowType);

/* 借款信息的前端业务逻辑 */
//给提交按钮监听事件
$("#btnSubmit").on("click",function(){
    //获取表单的值
    var formData=$("#borrowForm").serialize();
    //console.log(formData);
    //发起ajax请求
    $.post("./api/borrowAdd.php",formData,function(result){
        //根据后端返回的数据处理前端数据
        if(result.isSuccess){
            alert(result.msg);
            location.href="./borrow_list.php";
        }else{
            alert(result.msg);
        }
    },"json");
})







