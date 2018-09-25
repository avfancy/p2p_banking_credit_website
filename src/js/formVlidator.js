$(function(){
    /* 注册页面表单验证 */
    //要验证的表单
    $('#regForm')
        .bootstrapValidator({
            //图标的定义
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok', //验证成功的图标
                invalid: 'glyphicon glyphicon-remove', //验证失败的图标
                validating: 'glyphicon glyphicon-refresh' //异步验证ajax
            },
            //对哪些表单元素做验证
            fields: {
                //用户名验证
                username:{
                    message:'用户名验证失败',
                    //验证规则
                    validators:{
                        //非空验证
                        notEmpty:{
                            message:'用户名不能为空'
                        },
                        //长度验证
                        stringLength:{
                            min:6,
                            max:12,
                            message:'用户名长度必须在6~12位之间'
                        }
                    }
                },
                pwd:{
                    message:'密码验证失败',
                    //验证规则
                    validators:{
                        //非空验证
                        notEmpty:{
                            message:'密码不能为空'
                        },
                        //长度验证
                        stringLength:{
                            min:6,
                            max:12,
                            message:'密码长度必须在6~12位之间'
                        }
                    }
                },
                repeatPwd:{
                    message:'确认密码验证失败',
                    //验证规则
                    validators:{
                        //非空验证
                        notEmpty:{
                            message:'确认密码不能为空'
                        },
                        //长度验证
                        stringLength:{
                            min:6,
                            max:12,
                            message:'确认密码长度必须在6~12位之间'
                        },
                        //密码一致性验证
                        identical:{
                            field:'pwd',//与哪个字段做比较
                            message:'两次密码输入不一致'
                        }
                    }
                },
                email:{
                    message:'电子邮件验证失败',
                    //验证规则
                    validators:{
                        //非空验证
                        notEmpty:{
                            message:'电子邮件不能为空'
                        },
                        //电子邮件格式验证
                        emailAddress:{
                            message:'电子邮件格式不正确'
                        }
                    }
                },
                tel:{
                    message:'手机号码验证失败',
                    //验证规则
                    validators:{
                        //非空验证
                        notEmpty:{
                            message:'手机号码不能为空'
                        },
                        //手机号码格式验证
                        regexp:{
                            regexp:/^((1[358][0-9])|(14[57])|(17[0678])|(19[7]))\d{8}$/,
                            message:'手机号码格式不正确'
                        }
                    }
                }
            }
        })
        //验证成功后的处理，比如：发起AJAX  
        .on('success.form.bv', function(e) {
            // 阻止表单的默认提交行为
            e.preventDefault();

            // 获取表单实例
            var $form = $(e.target);

            // 获取验证实例
            var bv = $form.data('bootstrapValidator');

            // 使用ajax提交表单数据
            /* 定义请求地址 */
           var requrl="./api/userAdd.php";
            /* 获取表单数据 */
           var data=$form.serialize();
           
            $.post(requrl, data, function(result) {
                //根据后端返回来的数据做页面提示
                if(result.isSuccess){
                    alert(result.msg);
                    //跳转至登录界面
                    location.href="./login.php";
                }else{
                    alert(result.msg);
                }
            }, 'json');   
        });




    /* 登录页面表单验证 */
     //要验证的表单
     $('#loginForm')
     .bootstrapValidator({
         //图标的定义
         feedbackIcons: {
             valid: 'glyphicon glyphicon-ok', //验证成功的图标
             invalid: 'glyphicon glyphicon-remove', //验证失败的图标
             validating: 'glyphicon glyphicon-refresh' //异步验证ajax
         },
         //对哪些表单元素做验证
         fields: {
             //用户名验证
             username:{
                 message:'用户名验证失败',
                 //验证规则
                 validators:{
                     //非空验证
                     notEmpty:{
                         message:'用户名不能为空'
                     },
                     //长度验证
                     stringLength:{
                         min:6,
                         max:12,
                         message:'用户名长度必须在6~12位之间'
                     }
                 }
             },
             pwd:{
                 message:'密码验证失败',
                 //验证规则
                 validators:{
                     //非空验证
                     notEmpty:{
                         message:'密码不能为空'
                     },
                     //长度验证
                     stringLength:{
                         min:6,
                         max:12,
                         message:'密码长度必须在6~12位之间'
                     }
                 }
             }
         }
     })
     //验证成功后的处理，比如：发起AJAX  
     .on('success.form.bv', function(e) {
         // 阻止表单的默认提交行为
         e.preventDefault();

         // 获取表单实例
         var $form = $(e.target);

         // 获取验证实例
         var bv = $form.data('bootstrapValidator');

         // 使用ajax提交表单数据
         /* 定义请求地址 */
         var requrl="./api/userCheck.php";
         /* 获取表单数据 */
         var data=$form.serialize();
        
         $.post(requrl, data, function(result) {
             //根据后端返回来的数据做页面提示
             if(result.isSuccess){
                 //登录成功后调用蒙层的显示方法，显示蒙层
                 /* alert(result.msg); 用户体验不佳，改为蒙层*/
                 //设置蒙层标题
                 $("#msgShowTitle").text("登录成功");
                 //设置蒙层内容
                 $("#msgShowContent").html("<span class='glyphicon glyphicon-ok'></span>"+result.msg +",等待<span id='num'>3</span>秒后跳转到个人中心");
                 //定义定时器修改等待的数字
                 var num=3;
                 var timesId=setInterval(function(){
                    num--;
                    $('#num').text(num);
                    if(num==0){
                        clearInterval(timesId);
                         //跳转至个人中心界面
                        location.href="./personalCenter.php";
                    }
                 },1000);
             }else{
                 //alert(result.msg);
                 //设置蒙层标题
                 $("#msgShowTitle").text("登录失败");
                 //设置蒙层内容
                 $("#msgShowContent").html("<span class='glyphicon glyphicon-remove'></span>"+result.msg);
             }
            //显示蒙层
            $('#msgShowModal').modal('show');
         }, 'json');
     });
});
