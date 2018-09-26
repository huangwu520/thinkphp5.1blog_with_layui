<?php /*a:3:{s:65:"/home/wwwroot/layblog.blog/./template/admin/index/admin_info.html";i:1537350176;s:61:"/home/wwwroot/layblog.blog/./template/admin/common/inner.html";i:1537345520;s:62:"/home/wwwroot/layblog.blog/./template/admin/common/footer.html";i:1537198855;}*/ ?>
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
    
</head>
<body>

<div class="layui-tab page-content-wrap">
    <ul class="layui-tab-title">
        <li class="layui-this">修改资料</li>
        <li>修改密码</li>
    </ul>
    <div class="layui-tab-content">
        <div class="layui-tab-item layui-show">
            <form class="layui-form"  style="width: 90%;padding-top: 20px;">
                <div class="layui-form-item">
                    <label class="layui-form-label">ID：</label>
                    <div class="layui-input-block">
                        <input type="text" name="id" disabled autocomplete="off" class="layui-input layui-disabled" value="<?php echo htmlentities($data['id']); ?>">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">用户名：</label>
                    <div class="layui-input-block">
                        <input type="text" name="username" disabled autocomplete="off" class="layui-input layui-disabled" value="<?php echo htmlentities($data['username']); ?>">
                    </div>
                </div>
                <!--<div class="layui-form-item">-->
                    <!--<label class="layui-form-label">姓名：</label>-->
                    <!--<div class="layui-input-block">-->
                        <!--<input type="text" name="name" required  lay-verify="required" placeholder="请输入标题" autocomplete="off" class="layui-input" value="未知">-->
                    <!--</div>-->
                <!--</div>-->
                <div class="layui-form-item">
                    <label class="layui-form-label">邮箱：</label>
                    <div class="layui-input-block">
                        <input type="text" name="email" required  lay-verify="required" placeholder="请输入标题" autocomplete="off" class="layui-input" value="<?php echo htmlentities($data['email']); ?>">
                    </div>
                </div>
                <div class="layui-form-item layui-form-text">
                    <label class="layui-form-label">备注：</label>
                    <div class="layui-input-block">
                        <textarea name="about" placeholder="请输入内容" class="layui-textarea"><?php echo htmlentities($data['about']); ?></textarea>
                    </div>
                </div>
                <div class="layui-form-item">
                    <div class="layui-input-block">
                        <button class="layui-btn layui-btn-normal" lay-submit lay-filter="adminInfo">立即提交</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="layui-tab-item">
            <form class="layui-form" v style="width: 90%;padding-top: 20px;">
                <div class="layui-form-item">
                    <label class="layui-form-label">用户名：</label>
                    <div class="layui-input-block">
                        <input type="text" name="username" disabled autocomplete="off" class="layui-input layui-disabled" value="<?php echo htmlentities($data['username']); ?>">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">旧密码：</label>
                    <div class="layui-input-block">
                        <input type="password" name="old_password" required lay-verify="required" placeholder="请输入密码" autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">新密码：</label>
                    <div class="layui-input-block">
                        <input type="password" name="password" required lay-verify="required" placeholder="请输入密码" autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">重复密码：</label>
                    <div class="layui-input-block">
                        <input type="password" name="password_confirm" required lay-verify="required" placeholder="请输入密码" autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <div class="layui-input-block">
                        <button class="layui-btn layui-btn-normal" lay-submit lay-filter="adminPassword">立即提交</button>
                    </div>
                </div>
            </form>
        </div>
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
    //Demo
    layui.use(['form','element','layedit','laydate','layer'], function(){
        let form = layui.form();
        let element = layui.element();
        let layer = layui.layer;
        let $ = layui.jquery;
        // form.render();
        //监听信息提交
        form.on('submit(adminInfo)', function(data){
            $.ajax({
                type: "POST",
                url: "<?php echo url('/admin/index/adminInfo'); ?>",
                dataType: "json",
                data: data.field,
                async: false,
                success: function (result) {
                    if (result.status === "success") {
                        layer.msg(result.info, {icon: 1, time: 1500}, function () {
                            location.href = '<?php echo url("/admin/index/adminInfo"); ?>';
                        });
                    } else {
                        layer.msg(result.info, {icon: 2, time: 2300}, function () {
                            location.href = '<?php echo url("/admin/index/adminInfo"); ?>';
                        });
                    }
                },
                error: function () {
                    alert('请联系网站管理员');
                }
            });
            return false;
        });
        //监听密码提交
        form.on('submit(adminPassword)', function(data){
            $.ajax({
                type: "POST",
                url: "<?php echo url('/admin/index/adminInfo'); ?>",
                dataType: "json",
                data: data.field,
                async: false,
                success: function (result) {
                    console.log(result);
                    if (result.status === "success") {
                        layer.msg(result.info, {icon: 1, time: 1000}, function () {
                            location.href = '<?php echo url("/admin/index/adminInfo"); ?>';
                        });
                    } else {
                        layer.msg(result.info, {icon: 2, time: 1000}, function () {
                            location.href = '<?php echo url("/admin/index/adminInfo"); ?>';
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