<?php /*a:3:{s:60:"/home/wwwroot/layblog.blog/./template/admin/login/index.html";i:1537345863;s:61:"/home/wwwroot/layblog.blog/./template/admin/common/inner.html";i:1537345520;s:62:"/home/wwwroot/layblog.blog/./template/admin/common/footer.html";i:1537198855;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <title>后台管理 - Powered by Php!</title>
    <meta name="keywords" content="fly,layui,前端社区">
    <meta name="description" content="Fly社区是模块化前端UI框架Layui的官网社区，致力于为web开发提供强劲动力">
    <link rel="stylesheet" href="/static/admin/layui/css/layui.css">
    <link rel="stylesheet" href="/static/admin/css/admin.css"/>
    
    <link rel="stylesheet" type="text/css" href="/static/admin/css/login.css" />

</head>
<body>

        <div class="m-login-bg">
            <div class="m-login">
                <h3>后台系统登录</h3>
                <div class="m-login-warp">
                    <form class="layui-form" >
                        <div class="layui-form-item">
                            <input type="text" name="username" id="username" required lay-verify="required" placeholder="用户名" autocomplete="off" class="layui-input">
                        </div>
                        <div class="layui-form-item">
                            <input type="text" name="password" required lay-verify="required" placeholder="密码" autocomplete="off" class="layui-input">
                        </div>
                        <div class="layui-form-item">
                            <div class="layui-inline">
                                <input type="text" name="verify" required lay-verify="required" placeholder="验证码" autocomplete="off" class="layui-input">
                            </div>
                            <div class="layui-inline">
                                <img class="verifyImg" onclick="this.src='<?php echo captcha_src(); ?>?time='+Math.random()" src="<?php echo captcha_src(); ?>" alt="点击更换" />
                            </div>
                        </div>
                        <div class="layui-form-item m-login-btn">
                            <div class="layui-inline">
                                <button class="layui-btn layui-btn-normal" lay-submit lay-filter="login">登录</button>
                            </div>
                            <div class="layui-inline">
                                <button type="reset" class="layui-btn layui-btn-primary">重置输入</button>
                            </div>
                        </div>
                    </form>
                </div>
                <p class="copyright">Copyright 2015-2018 by github contributor </p>
            </div>
        </div>

<!--JS引用-->
<script src="/static/admin/layui/layui.js" type="text/javascript" charset="utf-8"></script>
<script src="/static/admin/js/common.js" type="text/javascript" charset="utf-8"></script>
<script src="/static/admin/js/main.js" type="text/javascript" charset="utf-8"></script>
<script type="javascript" >
    // layui.use(['layer'], function() {
    //     let layer = layui.layer;
    //     let $ = layui.jquery;
    //
    //     $('#logout').click(function()
    //     {
    //         $.ajax({
    //             type: "POST",
    //             url: "<?php echo url('/admin/logout/index'); ?>",
    //             dataType: "json",
    //             // data: "{'logout':'true'}",
    //             async: false,
    //             success: function (result) {
    //                 // console.log(result);
    //                 if (result.status === "success") {
    //                     layer.msg(result.info, {icon: 1, time: 2100}, function () {
    //                         location.href = '<?php echo url("/admin/login/index"); ?>';
    //                     });
    //                 } else {
    //                     layer.msg("连接失败,请重试", {icon: 2, time: 3700}, function () {
    //                         location.href = '<?php echo url("/admin/index/index"); ?>';
    //                     });
    //                 }
    //             },
    //             error: function () {
    //                 alert('请联系网站管理员');
    //                 // console.log(data);
    //             }
    //         });
    //     })
    // });
</script>
<!--<script src="/static/js/jquery.min.js"></script>-->

<!--页面JS脚本-->

        <script>

            layui.use(['form', 'layedit', 'laydate'], function() {
                var form = layui.form();
                var layer = layui.layer;
                let $ = layui.jquery;

                //打开网页自动聚焦用户名位置
                $(function(){
                    $('#username').focus();
                });

                //监听提交
                form.on('submit(login)', function(data) {
                    // let datas = JSON.stringify(data.field);
                    // console.log(datas);
                    // alert('nnn');
                    $.ajax({
                        type: "POST",
                        url: "<?php echo url('/admin/login/index'); ?>",
                        dataType: "json",
                        data: data.field,
                        async: false,
                        success: function (result) {
                            // console.log(result);
                            if (result.status === "success") {
                                layer.msg(result.info, {icon: 1, time: 3000}, function () {
                                    location.href = '<?php echo url("/admin/index/index"); ?>';
                                });
                            } else {
                                layer.msg(result.info, {icon: 2, time: 3000}, function () {
                                    location.href = '<?php echo url("/admin/login/index"); ?>';
                                });
                            }
                        },
                        error: function () {
                            alert('请联系网站管理员');
                        // console.log(data);
                        }
                    });
                    return false;
                });
            });
        </script>

</body>
</html>