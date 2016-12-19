<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<!--[if lt IE 9]>
<script type="text/javascript" src="/Public/H-ui/lib/html5.js"></script>
<script type="text/javascript" src="/Public/H-ui/lib/respond.min.js"></script>
<script type="text/javascript" src="/Public/H-ui/lib/PIE_IE678.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="/Public/H-ui/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/Public/H-ui/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/Public/H-ui/lib/Hui-iconfont/1.0.7/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/Public/H-ui/lib/icheck/icheck.css" />
<link rel="stylesheet" type="text/css" href="/Public/H-ui/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="/Public/H-ui/static/h-ui.admin/css/style.css" />
<!--[if IE 6]>
<script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->

<title>注册会员</title>
</head>
<body>
    <article class="page-container">
        <form action="/index.php/Admin/Member/useradd.html" method="post" class="form form-horizontal registerform" id="form-member-add">
            {__TOKEN__} 
            <fieldset style="border: 1px solid #56b4f3; border-radius: 9px;">
                <legend style="margin-left: 50px; color: #fff; background-color: #56b4f3;width:80px;font-size: 12px;text-align: center; margin-bottom: 0px;height:25px;line-height: 25px;">注册会员</legend>
                <div class="row cl">
                    <label class="form-label col-xs-3 col-sm-2" style='text-align:right;'><span class="c-red">*</span>会员账号：</label>
                    <div class="formControls col-xs-7 col-sm-3">
                        <input type="text" class="input-text username" value="<?php echo ($username); ?>" placeholder="" ajaxurl="<?php echo U('/Admin/Member/check_input_unique');?>"  errormsg="会员账号格式不对" nullmsg="请输入会员账号！"  id="username" name="username"  datatype="u6-16" >
                    </div><div><a title="刷新" href="javascript:location.replace(location.href);" style="line-height:1.6em;" class="btn btn-success radius l"><i class="Hui-iconfont"></i></a>&nbsp;&nbsp;
                    </div>
                </div>
                <div class="row cl">
                    <label class="form-label col-xs-3 col-sm-2" style='text-align:right;' ><span class="c-red">*</span>会员昵称：</label>
                    <div class="formControls col-xs-7 col-sm-3">
                          <input type="text" class="input-text name" value="" placeholder="" id="name" name="name" errormsg="不能为空" nullmsg="请输入昵称！" datatype="*">
                    
                    </div>

                    <div class="Validform_checktip"></div>
                </div>
                <div class="row cl">
                    <label class="form-label col-xs-3 col-sm-2" style='text-align:right;'><span class="c-red">*</span>手机号：</label>
                    <div class="formControls col-xs-7 col-sm-3">
                        <input type="text" value='' class="input-text mobile" placeholder="" ajaxurl="<?php echo U('/Admin/Member/check_input_unique');?>" name="mobile" id="mobile" errormsg="手机号码格式不正确！"  nullmsg='请输入您的手机号码' datatype="mobile">
                    </div>
                    <div class="Validform_checktip"></div>
                </div>
                <div class="row cl">
                    <label class="form-label col-xs-3 col-sm-2" style='text-align:right;' ><span class="c-red">*</span>密码：</label>
                    <div class="formControls col-xs-7 col-sm-3">
                        <input type="text" class="input-text password" value="111111" placeholder="" id="password" name="password" errormsg="密码范围在6~16位之间！" nullmsg="请设置密码！" datatype="*6-16">
                    </div>
                    <div class="Validform_checktip"></div>
                </div>

                <div class="row cl">
                    <label class="form-label col-xs-3 col-sm-2" style='text-align:right;'><span class="c-red">*</span>确认密码：</label>
                    <div class="formControls col-xs-7 col-sm-3">
                        <input type="text" value="111111" class="input-text affirm_password" placeholder="" name="affirm_password" id="affirm_password" errormsg="您两次输入的密码不一致！" nullmsg="请再输入确认密码！" recheck="password" datatype="*" tip="test">
                    </div>
                    <div class="Validform_checktip"></div>
                </div>
                <div class="row cl">
                    <label class="form-label col-xs-3 col-sm-2" style='text-align:right;'><span class="c-red">*</span>推荐人：</label>
                    <div class="formControls col-xs-7 col-sm-3">
                        <input type="text" value='' class="input-text recommend" placeholder=""   ajaxurl="<?php echo U('/Admin/Member/check_input_recommend_exist');?>" name="recommend" id="recommend" errormsg="账号至少6个字符,最多18个字符！" nullmsg="请输入推荐人账号！" datatype="s6-18">
                    </div>
                    <div class="Validform_checktip"></div>
                </div>
                <div class="row cl">
                    <label class="form-label col-xs-3 col-sm-2" style='text-align:right;'><span class="c-red">*</span>选择区域：</label>
                    <div class="formControls col-xs-7 col-sm-3 ">


                        <select class="select region select-box region" size="1" name="region"  datatype="*" nullmsg="请选择区域"  id="area"  onblur="getArea()"  >
                            <option value=''>请选择区域</option>
                            <option value="0">左区</option>
                            <option value="1" >中区</option>
                            <option value="2">右区</option>
                        </select>

                    </div>  <div class="Validform_checktip" id='quyi'></div>

                </div>


                <div style='height:20px;'></div>

                <div class="row cl">
                    <div class="col-xs-8 col-sm-4 col-xs-offset-4 col-sm-offset-3">
                        <button class="btn btn-primary radius" type="submit" ><i class="Hui-iconfont">&#xe632;  </i>提交</button>
                    </div>
                </div>
            </fieldset>


        </form>
    </article>


 
<script type="text/javascript" src="/Public/H-ui/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/Public/H-ui/lib/layer/2.1/layer.js"></script>
<script type="text/javascript" src="/Public/H-ui/lib/laypage/1.2/laypage.js"></script> 
<script type="text/javascript" src="/Public/H-ui/lib/My97DatePicker/WdatePicker.js"></script> 
<script type="text/javascript" src="/Public/H-ui/lib/datatables/1.10.0/jquery.dataTables.min.js"></script> 
<script type="text/javascript" src="/Public/H-ui/lib/icheck/jquery.icheck.min.js"></script> 
<script type="text/javascript" src="/Public/H-ui/lib/jquery.validation/1.14.0/jquery.validate.min.js"></script>
<script type="text/javascript" src="/Public/H-ui/lib/jquery.validation/1.14.0/validate-methods.js"></script>
<script type="text/javascript" src="/Public/H-ui/lib/jquery.validation/1.14.0/messages_zh.min.js"></script>
<script type="text/javascript" src="/Public/H-ui/lib/Validform/5.3.2/Validform_v5.3.2_min.js"></script>
<script type="text/javascript" src="/Public/H-ui/static/h-ui/js/H-ui.js"></script> 
<script type="text/javascript" src="/Public/H-ui/static/h-ui.admin/js/H-ui.admin.js"></script> 

</body>
</html>

<script type="text/javascript">
        function getArea()
    {
        var recommend = $("#recommend").val();
        var region = $(".region").val();
         $("#quyi").children('span').remove();  
        if (recommend == "")
        {
            //select 失效
           // disabled="true"
            $("#area").attr("disabled", "disabled");
        } else
        {
            if(region==""){
                   $("#quyi").append("<span class='Validform_checktip Validform_wrong'>请选择区域</span>");
                   //$("#area").attr("disabled", "false");
            }else{
            //ajax 获取区域
            //select 清空拼接显示
            var msg={};
            msg.flag=false;
            $.ajax({
                type: "post",
                url: "/Admin/Member/returnrecommend",
                data: {recommend: recommend,region:region},
                dataType: 'json',
                async: false, //设置为同步操作就可以给全局变量赋值成功 
                success: function (data) {
                    if (data.status == 1)
                    {
                        $("#area").removeAttr("disabled"); 
                        $("#quyi").append("<span class='Validform_checktip Validform_right'>"+data.msg+"</span>");
                         msg.flag=true;
                           msg.msg="ok";
                    } else
                    {
                        //select 失效
                       // $("#area").attr("disabled", "disabled");
                       
                        $("#quyi").append("<span class='Validform_checktip Validform_wrong'>"+data.msg+"</span>");
                       msg.msg=data.msg;
                    }

                }
            });
            return msg;
        }}
    }
    
    $(function () {

        $.extend($.Datatype, {
         //   "z2-4": /^[\u4E00-\u9FA5\uf900-\ufa2d]{2,4}$/,
        });


        $(".registerform").Validform({
            callback: function (form) {
                var msg=getArea();
                if(msg.flag){
                    user_add_save();
                }else{
                      $("#quyi").children('span').remove(); 
                     $("#quyi").append("<span class='Validform_checktip Validform_wrong'>"+msg.msg+"</span>");
                }
               
                return false;
            },
            tiptype: 2,
            datatype: {//传入自定义datatype类型【方式二】;
                // "z2-4": /^[\u4e00-\u9fa5]{2,4}$|^[a-zA-Z]{2,30}$/gi,
                "yb-6": /[1-9]\d{5}(?!\d)/,
                "u6-16": /^[A-Za-z0-9]{6,12}$/,
                "yhno-16-19": /^(\d{16}|\d{19})$/,
                "xxdz": /^(?=.*?[\u4E00-\u9FA5])[\d\u4E00-\u9FA5]+/,
                'mobile':/^1[34578]\d{9}$/,
                "idcard": function (gets, obj, curform, datatype) {
                    //该方法由佚名网友提供;

                    var Wi = [7, 9, 10, 5, 8, 4, 2, 1, 6, 3, 7, 9, 10, 5, 8, 4, 2, 1];// 加权因子;
                    var ValideCode = [1, 0, 10, 9, 8, 7, 6, 5, 4, 3, 2];// 身份证验证位值，10代表X;

                    if (gets.length == 15) {
                        return isValidityBrithBy15IdCard(gets);
                    } else if (gets.length == 18) {
                        var a_idCard = gets.split("");// 得到身份证数组   
                        if (isValidityBrithBy18IdCard(gets) && isTrueValidateCodeBy18IdCard(a_idCard)) {
                            return true;
                        }
                        return false;
                    }
                    return false;

                    function isTrueValidateCodeBy18IdCard(a_idCard) {
                        var sum = 0; // 声明加权求和变量   
                        if (a_idCard[17].toLowerCase() == 'x') {
                            a_idCard[17] = 10;// 将最后位为x的验证码替换为10方便后续操作   
                        }
                        for (var i = 0; i < 17; i++) {
                            sum += Wi[i] * a_idCard[i];// 加权求和   
                        }
                        valCodePosition = sum % 11;// 得到验证码所位置   
                        if (a_idCard[17] == ValideCode[valCodePosition]) {
                            return true;
                        }
                        return false;
                    }

                    function isValidityBrithBy18IdCard(idCard18) {
                        var year = idCard18.substring(6, 10);
                        var month = idCard18.substring(10, 12);
                        var day = idCard18.substring(12, 14);
                        var temp_date = new Date(year, parseFloat(month) - 1, parseFloat(day));
                        // 这里用getFullYear()获取年份，避免千年虫问题   
                        if (temp_date.getFullYear() != parseFloat(year) || temp_date.getMonth() != parseFloat(month) - 1 || temp_date.getDate() != parseFloat(day)) {
                            return false;
                        }
                        return true;
                    }

                    function isValidityBrithBy15IdCard(idCard15) {
                        var year = idCard15.substring(6, 8);
                        var month = idCard15.substring(8, 10);
                        var day = idCard15.substring(10, 12);
                        var temp_date = new Date(year, parseFloat(month) - 1, parseFloat(day));
                        // 对于老身份证中的你年龄则不需考虑千年虫问题而使用getYear()方法   
                        if (temp_date.getYear() != parseFloat(year) || temp_date.getMonth() != parseFloat(month) - 1 || temp_date.getDate() != parseFloat(day)) {
                            return false;
                        }
                        return true;
                    }

                }
            }
        });


    })


</script>