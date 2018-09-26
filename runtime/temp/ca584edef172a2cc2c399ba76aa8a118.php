<?php /*a:3:{s:61:"/home/wwwroot/layblog.blog/./template/admin/index/system.html";i:1537665967;s:61:"/home/wwwroot/layblog.blog/./template/admin/common/inner.html";i:1537345520;s:62:"/home/wwwroot/layblog.blog/./template/admin/common/footer.html";i:1537198855;}*/ ?>
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
                <li class="layui-this">站点配置</li>
                <!--<li>SEO配置</li>-->
                <!--<li>邮箱配置</li>-->
                <li>评论设置</li>
            </ul>
            <div class="layui-tab-content">
                <!--站点配置-->
                <div class="layui-tab-item layui-show">
                    <form class="layui-form" style="width: 90%;padding-top: 20px;">
                        <div class="layui-form-item">
                            <label class="layui-form-label">网站名称：</label>
                            <div class="layui-input-block">
                                <input type="text" name="webname" autocomplete="off" class="layui-input" value="<?php echo htmlentities($data['webname']); ?>">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">网站域名：</label>
                            <div class="layui-input-block">
                                <input type="text" name="domain" autocomplete="off" class="layui-input" value="<?php echo htmlentities($data['domain']); ?>">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">站长邮箱：</label>
                            <div class="layui-input-block">
                                <input type="text" name="email" required lay-verify="required" placeholder="请输入邮箱" autocomplete="off" class="layui-input" value="<?php echo htmlentities($data['email']); ?>">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">是否缓存：</label>
                            <div class="layui-input-block">
                                <?php if($data['cached'] == 'on'): ?>
                                    <input type="checkbox" checked="" name="cached" lay-skin="switch"  lay-filter="switchTest" lay-text="ON|OFF">
                                <?php else: ?>
                                    <input type="checkbox"  name="cached" lay-skin="switch"  lay-filter="switchTest" lay-text="ON|OFF">
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">静态首页：</label>
                            <?php if($data['urlrewrite'] == 'on'): ?>
                                <input type="radio" name="urlrewrite"  value="on" title="生成" checked="">
                                <input type="radio" name="urlrewrite"  value="off" title="不生成">
                            <?php else: ?>
                                <input type="radio" name="urlrewrite"  value="on" title="生成" >
                                <input type="radio" name="urlrewrite"  value="off" title="不生成" checked="">
                            <?php endif; ?>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">备案信息：</label>
                            <div class="layui-input-block">
                                <input type="text" name="ICP"  placeholder="请输入备案信息" autocomplete="off" class="layui-input" value="<?php echo htmlentities($data['ICP']); ?>">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">版权信息：</label>
                            <div class="layui-input-block">
                                <input type="text" name="copyright" required lay-verify="required" placeholder="请输入版权信息" autocomplete="off" class="layui-input" value="<?php echo htmlentities($data['copyright']); ?>">
                            </div>
                        </div>
                        <div class="layui-form-item layui-form-text">
                            <label class="layui-form-label">统计代码：</label>
                            <div class="layui-input-block">
                                <textarea name="statistic" placeholder="请输入代码" class="layui-textarea"><?php echo htmlentities($data['statistic']); ?></textarea>
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <div class="layui-input-block">
                                <button class="layui-btn layui-btn-normal" lay-submit lay-filter="siteInfo">立即提交</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!--SEO配置-->
                <!--<div class="layui-tab-item">-->
                    <!--<form class="layui-form" style="width: 90%;padding-top: 20px;">-->
                        <!--<div class="layui-form-item">-->
                            <!--<label class="layui-form-label">SEO标题：</label>-->
                            <!--<div class="layui-input-block">-->
                                <!--<input type="text" name="title" placeholder="请输入seo标题" autocomplete="off" class="layui-input" value="">-->
                            <!--</div>-->
                        <!--</div>-->
                        <!--<div class="layui-form-item">-->
                            <!--<label class="layui-form-label">关键字：</label>-->
                            <!--<div class="layui-input-block">-->
                                <!--<input type="text" name="keyword" placeholder="请输入seo关键字" autocomplete="off" class="layui-input" value="">-->
                            <!--</div>-->
                        <!--</div>-->
                        <!--<div class="layui-form-item layui-form-text">-->
                            <!--<label class="layui-form-label">描述：</label>-->
                            <!--<div class="layui-input-block">-->
                                <!--<textarea name="desc" placeholder="请输入seo描述" class="layui-textarea"></textarea>-->
                            <!--</div>-->
                        <!--</div>-->
                        <!--<div class="layui-form-item">-->
                            <!--<div class="layui-input-block">-->
                                <!--<button class="layui-btn layui-btn-normal" lay-submit lay-filter="seoInfo">立即提交</button>-->
                            <!--</div>-->
                        <!--</div>-->
                    <!--</form>-->
                <!--</div>-->
                <!--邮箱配置-->
                <!--<div class="layui-tab-item">-->
                    <!--<form class="layui-form"  style="width: 90%;padding-top: 20px;">-->
                        <!--<div class="layui-form-item">-->
                            <!--<label class="layui-form-label">邮箱模式：</label>-->
                            <!--<div class="layui-input-block">-->
                                <!--<input type="radio" name="urlrewrite" value="1" title="SMTP函数发送" checked="">-->
                            <!--</div>-->
                        <!--</div>-->
                        <!--<div class="layui-form-item">-->
                            <!--<label class="layui-form-label">服务器：</label>-->
                            <!--<div class="layui-input-block">-->
                                <!--<input type="text" name="smtp" placeholder="请输入邮件服务器" autocomplete="off" class="layui-input" value="smtp.163.com">-->
                            <!--</div>-->
                        <!--</div>-->
                        <!--<div class="layui-form-item">-->
                            <!--<label class="layui-form-label">端口：</label>-->
                            <!--<div class="layui-input-block">-->
                                <!--<input type="text" name="port" placeholder="请输入邮件发送端口" autocomplete="off" class="layui-input" value="25">-->
                            <!--</div>-->
                        <!--</div>-->
                        <!--<div class="layui-form-item">-->
                            <!--<label class="layui-form-label">发件人：</label>-->
                            <!--<div class="layui-input-block">-->
                                <!--<input type="text" name="email" placeholder="请输入发件人地址" autocomplete="off" class="layui-input" value="admin@abc3210.com">-->
                            <!--</div>-->
                        <!--</div>-->
                        <!--<div class="layui-form-item">-->
                            <!--<label class="layui-form-label">名称：</label>-->
                            <!--<div class="layui-input-block">-->
                                <!--<input type="text" name="name" placeholder="请输入发件人名称" autocomplete="off" class="layui-input" value="mfan管理员">-->
                            <!--</div>-->
                        <!--</div>-->
                        <!--<div class="layui-form-item">-->
                            <!--<label class="layui-form-label">用户名：</label>-->
                            <!--<div class="layui-input-block">-->
                                <!--<input type="text" name="username" placeholder="请输入用户名" autocomplete="off" class="layui-input" value="">-->
                            <!--</div>-->
                        <!--</div>-->
                        <!--<div class="layui-form-item">-->
                            <!--<label class="layui-form-label">密码：</label>-->
                            <!--<div class="layui-input-block">-->
                                <!--<input type="text" name="password" placeholder="请输入密码" autocomplete="off" class="layui-input" value="">-->
                            <!--</div>-->
                        <!--</div>-->
                        <!--<div class="layui-form-item">-->
                            <!--<div class="layui-input-block">-->
                                <!--<button class="layui-btn layui-btn-normal" lay-submit lay-filter="emailInfo">立即提交</button>-->
                            <!--</div>-->
                        <!--</div>-->
                    <!--</form>-->
                <!--</div>-->
                <!--评论设置-->
                <div class="layui-tab-item">
                    <form class="layui-form" style="width: 90%;padding-top: 20px;">
                        <div class="layui-form-item">
                            <label class="layui-form-label">评论审核：</label>
                            <div class="layui-input-block">
                                <?php if($data['censor'] == 'on'): ?>
                                <input type="checkbox" name="censor" lay-skin="primary" title="开启" checked="">
                                <?php else: ?>
                                <input type="checkbox" name="censor" lay-skin="primary" title="开启" >
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">评论间隔：</label>
                            <div class="layui-input-inline">
                                <input type="text" name="review_interval" placeholder="请输入评论时间间隔" autocomplete="off" class="layui-input" value="<?php echo htmlentities($data['review_interval']); ?>">
                            </div>
                            <div class="layui-form-mid layui-word-aux">秒</div>
                        </div>
                        <div class="layui-form-item">
                            <div class="layui-input-block">
                                <button class="layui-btn layui-btn-normal" lay-submit lay-filter="commentInfo">立即提交</button>
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

<script src="/static/admin/lib/echarts/echarts.js"></script>

<!--页面JS脚本-->

        <script>
            //Demo
            layui.use(['form', 'element','layer','jquery'], function() {
                var form = layui.form;
                var element = layui.element;
                let layer = layui.layer;
                let $ = layui.jquery;
                // form.render();
                //监听所有checkbox radio返回值,非on 时赋值off
                // form.on('radio',function(data){
                //     console.log(data.elem);
                //     console.log(data.value);
                // });
                form.on('checkbox(switchTest)',function(data){
                    if(data.value !== true){
                        // data.value = "off";
                        console.log($("input[name='switchTest']").val());
                    console.log(data.elem);
                    console.log(data.elem.checked);
                    console.log(data.value);
                    console.log(data.othis);}
                });

                //监听信息提交
                form.on('submit(siteInfo)', function(data) {
                    layer.msg(JSON.stringify(data.field),{time:10000});
                    $.ajax({
                        type: "POST",
                        url: "<?php echo url('/admin/index/system'); ?>",
                        dataType: "json",
                        data: data.field,
                        async: false,
                        // success: function (result) {
                        //     console.log(result);
                        //     if (result.status === "success") {
                        //         layer.msg(result.info, {icon: 1, time: 1500}, function () {
                        //             // location.href = '<?php echo url("/admin/index/system"); ?>';
                        //             form.render();
                        //         });
                        //     } else {
                        //         layer.msg(result.info, {icon: 2, time: 3700}, function () {
                        //             // location.href = '<?php echo url("/admin/index/system"); ?>';
                        //             form.render();
                        //         });
                        //     }
                        // },
                        error: function () {
                            alert('请联系网站管理员');
                            // console.log(data);
                        }
                    });
                    return false;
                });
                //监听seo提交
                form.on('submit(seoInfo)', function(data) {
                    layer.msg(JSON.stringify(data.field));
                    return false;
                });
                //监听seo提交
                form.on('submit(emailInfo)', function(data) {
                    layer.msg(JSON.stringify(data.field));
                    return false;
                });
                //监听评论提交
                form.on('submit(commentInfo)', function(data) {
                    layer.msg(JSON.stringify(data.field));
                    return false;
                });
            });
        </script>

</body>
</html>