<?php /*a:4:{s:63:"/home/wwwroot/layblog.blog/./template/home/article/comment.html";i:1536422416;s:59:"/home/wwwroot/layblog.blog/./template/home/common/base.html";i:1536226655;s:61:"/home/wwwroot/layblog.blog/./template/home/common/header.html";i:1536228081;s:61:"/home/wwwroot/layblog.blog/./template/home/common/footer.html";i:1535642945;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php echo htmlentities($title); ?> - Powered by Php!</title>
    <meta name="keywords" content="fly,layui,前端社区">
    <meta name="description" content="Fly社区是模块化前端UI框架Layui的官网社区，致力于为web开发提供强劲动力">
    <link rel="stylesheet" href="/static/layui/css/layui.css">
    <link rel="stylesheet" href="/static/css/mian.css">
    
</head>
<body class="lay-blog">
<div class="header">
    <div class="header-wrap">
        <h1 class="logo pull-left">
            <a href="<?php echo url('home/index/index'); ?>">
                <img src="/static/images/logo.png" alt="" class="logo-img">
                <img src="/static/images/logo-text.png" alt="" class="logo-text">
            </a>
        </h1>
        <form class="layui-form blog-seach pull-left" action="">
            <div class="layui-form-item blog-sewrap">
                <div class="layui-input-block blog-sebox">
                    <i class="layui-icon layui-icon-search"></i>
                    <input type="text" name="title" lay-verify="title" autocomplete="off"  class="layui-input">
                </div>
            </div>
        </form>
        <div class="blog-nav pull-right">
            <ul class="layui-nav pull-left">
                <li class="layui-nav-item"><a href="<?php echo url('home/index/index'); ?>" id="first">首页</a></li>
                <li class="layui-nav-item"><a href="<?php echo url('home/tag/index'); ?>" id="tags">标签</a></li>
                <li class="layui-nav-item"><a href="<?php echo url('home/index/about'); ?>" id="about">关于</a></li>
            </ul>
            <a href="#" class="personal pull-left">
                <i class="layui-icon layui-icon-username"></i>
            </a>
        </div>
        <div class="mobile-nav pull-right" id="mobile-nav">
            <a href="javascript:;">
                <i class="layui-icon layui-icon-more"></i>
            </a>
        </div>
    </div>
    <ul class="pop-nav" id="pop-nav">
        <li><a href="index.html">首页</a></li>
        <li><a href="message.html">留言</a></li>
        <li><a href="about.html">关于</a></li>
    </ul>
</div>

<div class="container-wrap">
    <div class="container container-message container-details container-comment">
        <div class="contar-wrap">
            <div class="item">
                <div class="item-box  layer-photos-demo1 layer-photos-demo">
                    <h3><a href="<?php echo url('home/article/detail',['id' => $data['id']]); ?>"><?php echo htmlentities($data['title']); ?></a></h3>
                    <h5>发布于：<span><?php echo htmlentities($data['create_time']); ?></span></h5>
                    <p><?php echo htmlentities($data['content']); ?></p>
                    <img src="/static/images/item.png"
                         alt="帅哥">
                    <div class="count layui-clear">
                        <span class="pull-left">阅读 <em><?php echo htmlentities($data['view']); ?></em></span>
                        <span class="pull-right like"><i class="layui-icon layui-icon-praise"></i><em><?php echo htmlentities($data['likes']); ?></em></span>
                    </div>
                </div>
            </div>
            <form class="layui-form" action="">
                <div class="layui-form-item layui-form-text">
                    <textarea  class="layui-textarea"  style="resize:none" placeholder="写点什么啊"></textarea>
                </div>
                <div class="btnbox">
                    <a href="article.html"  id="sure">
                        确定
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="footer">
    <p>
        <span>&copy; 2018</span>
        <span><a href="http://www.layui.com" target="_blank">layui.com</a></span>
        <span>MIT license</span>
    </p>
    <p><span>人生就是一场修行</span></p>
</div>
<!--JS引用-->
<!--<script src="/static/js/jquery.min.js"></script>-->
<script src="/static/layui/layui.all.js"></script>
<script src="/static/js/blog.js"></script>
<!--<script src="/static/layui/layui.js"></script>-->
<script>
    layui.config({
        base: '/static/js/'
    }).use('blog');
</script>


<!--页面JS脚本-->

<script id="LAY-msg-tpl" type="text/html">
    <div class="info-box">
        <div class="info-item">
            <img class="info-img" src="{{ d.avatar }}" alt="">
            <div class="info-text">
                <p class="title">
                    <span class="name">{{ d.username }}</span>
                    <span class="info-img">
                        <i class="layui-icon layui-icon-praise"></i>
                        {{ d.praise }}
                        </span>
                </p>
                <p class="info-intr">
                    {{ d.content }}
                </p>
            </div>
        </div>
    </div>
</script>

</body>
</html>