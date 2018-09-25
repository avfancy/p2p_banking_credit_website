$(function(){
    /* 给按钮注册点击事件 */
    $("#btnOff").on("click",function(){
        /* 点击按钮切换active类样式 */
        $("#centerCont").toggleClass("active");
        /* 判断如果有类文字显示为显示，没有类文字显示为隐藏 */
        if($("#centerCont").hasClass("active")){
            $(this).text("显示");
        }else{
            $(this).text("隐藏");
        }
    })

    /* 移动端触屏事件 */
    //定义变量
        var x1,y1;
    //获取触屏开始坐标
    $(window).on("touchstart",function(e){
        x1=e.originalEvent.changedTouches[0].clientX;
        y1=e.originalEvent.changedTouches[0].clientY;
    
    })  
    //获取触屏结束坐标
    $(window).on("touchend",function(e){
        var x2=e.originalEvent.changedTouches[0].clientX;
        var y2=e.originalEvent.changedTouches[0].clientY;
        //计算触摸结束到开始的距离
        var dx=x2-x1;
        var dy=y2-y1;
        //判断当横向滑动的值是一个有效值时，就触发点击事件
        if(Math.abs(dx)>=100){
            /* trigger是jquery中的一个触发事件；语法:$("选择器").trigger("事件") */
            $("#btnOff").trigger("click");
        }
    })
});