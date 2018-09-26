<?php /*a:5:{s:60:"/home/wwwroot/layblog.blog/./template/admin/index/index.html";i:1536725555;s:60:"/home/wwwroot/layblog.blog/./template/admin/common/base.html";i:1537061275;s:64:"/home/wwwroot/layblog.blog/./template/admin/common/leftside.html";i:1536737177;s:62:"/home/wwwroot/layblog.blog/./template/admin/common/header.html";i:1537199298;s:62:"/home/wwwroot/layblog.blog/./template/admin/common/footer.html";i:1537198855;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <title>后台管理 - Powered by Php!</title>
    <meta name="keywords" content="fly,layui,前端社区">
    <meta name="description" content="Fly社区是模块化前端UI框架Layui的官网社区，致力于为web开发提供强劲动力">
    <link rel="stylesheet" href="/static/admin/layui/css/layui.css">
    <link rel="stylesheet" href="/static/admin/css/admin.css"/>
    
</head>
<body>
<div class="main-layout" id='main-layout'>
    <!--侧边栏-->
    <div class="main-layout-side">
    <div class="m-logo">
    </div>
    <ul class="layui-nav layui-nav-tree" lay-filter="leftNav">
        <li class="layui-nav-item layui-nav-itemed">
            <a href="javascript:;"><i class="iconfont">&#xe607;</i>菜单管理</a>
            <dl class="layui-nav-child">
                <dd><a href="javascript:;" data-url="menu1.html" data-id='1' data-text="后台菜单"><span class="l-line"></span>后台菜单</a></dd>
                <dd><a href="javascript:;" data-url="menu2.html" data-id='2' data-text="前台菜单"><span class="l-line"></span>前台菜单</a></dd>
            </dl>
        </li>
        <li class="layui-nav-item">
            <a href="javascript:;"><i class="iconfont">&#xe608;</i>内容管理</a>
            <dl class="layui-nav-child">
                <dd><a href="javascript:;" data-url="articlelist.html" data-id='3' data-text="文章管理"><span class="l-line"></span>文章管理</a></dd>
                <dd><a href="javascript:;" data-url="danyelist.html" data-id='9' data-text="单页管理"><span class="l-line"></span>单页管理</a></dd>
            </dl>
        </li>
        <!--<li class="layui-nav-item">-->
            <!--<a href="javascript:;"><i class="iconfont">&#xe604;</i>推荐位管理</a>-->
        <!--</li>-->
        <!--<li class="layui-nav-item">-->
            <!--<a href="javascript:;"><i class="iconfont">&#xe60c;</i>友情链接</a>-->
        <!--</li>-->
        <!--<li class="layui-nav-item">-->
            <!--<a href="javascript:;"><i class="iconfont">&#xe60a;</i>RBAC</a>-->
        <!--</li>-->
        <!--<li class="layui-nav-item">-->
            <!--<a href="javascript:;" data-url="email.html" data-id='4' data-text="邮件系统"><i class="iconfont">&#xe603;</i>邮件系统</a>-->
        <!--</li>-->
        <!--<li class="layui-nav-item">-->
            <!--<a href="javascript:;"><i class="iconfont">&#xe60d;</i>生成静态</a>-->
        <!--</li>-->
        <!--<li class="layui-nav-item">-->
            <!--<a href="javascript:;"><i class="iconfont">&#xe600;</i>备份管理</a>-->
        <!--</li>-->
        <li class="layui-nav-item">
            <a href="javascript:;" data-url="admininfo.html" data-id='5' data-text="个人信息"><i class="iconfont">&#xe606;</i>个人信息</a>
        </li>
        <li class="layui-nav-item">
            <a href="javascript:;" data-url="system.html" data-id='6' data-text="系统设置"><i class="iconfont">&#xe60b;</i>系统设置</a>
        </li>
    </ul>
</div>
    <!--右侧内容-->
    <div class="main-layout-container">
        <!--头部-->
                <div class="main-layout-header">
            <div class="menu-btn" id="hideBtn">
                <a href="javascript:;">
                    <span class="iconfont">&#xe60e;</span>
                </a>
            </div>
            <ul class="layui-nav" lay-filter="rightNav">
                <!--<li class="layui-nav-item"><a href="javascript:;" data-url="email.html" data-id='4' data-text="邮件系统"><i class="iconfont">&#xe603;</i></a></li>-->
                <li class="layui-nav-item">
                    <a href="javascript:;" data-url="admininfo.html" data-id='5' data-text="个人信息">超级管理员</a>
                </li>
                <li class="layui-nav-item"><a id="logout"  href="<?php echo url('admin/index/logout'); ?>">退出</a></li>
            </ul>
        </div>
        <!--主体内容-->
        <div class="main-layout-body">
            <!--tab 切换-->
            
            <div class="layui-tab layui-tab-brief main-layout-tab" lay-filter="tab" lay-allowClose="true">
                <ul class="layui-tab-title">
                    <li class="layui-this welcome">后台主页</li>
                </ul>
                <div class="layui-tab-content">
                    <div class="layui-tab-item layui-show" style="background: #f5f5f5;">
                        <!--1-->
                        <iframe src="welcome.html" width="100%" height="100%" name="iframe" scrolling="auto" class="iframe" framborder="0"></iframe>
                        <!--1end-->
                    </div>
                </div>
            </div>


        </div>
    </div>
    <!--遮罩-->
    <div class="main-mask">

    </div>
</div>
<!--JS引用-->
<!--<script src="/static/js/jquery.min.js"></script>-->
<!--<script src="/static/admin/layui/layui.all.js"></script>-->
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

<!--页面JS脚本-->

<script type="text/javascript">
    var scope={
        link:'./welcome.html'
    }
</script>

</body>
</html>