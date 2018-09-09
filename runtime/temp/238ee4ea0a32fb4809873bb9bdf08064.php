<?php /*a:4:{s:59:"/home/wwwroot/layblog.blog/./template/home/index/index.html";i:1536338483;s:59:"/home/wwwroot/layblog.blog/./template/home/common/base.html";i:1536226655;s:61:"/home/wwwroot/layblog.blog/./template/home/common/header.html";i:1536228081;s:61:"/home/wwwroot/layblog.blog/./template/home/common/footer.html";i:1535642945;}*/ ?>
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
    <div class="container">
        <div class="contar-wrap">
                <h4 class="item-title">
                    <p><i class="layui-icon layui-icon-speaker"></i>公告：<span>欢迎来到我的轻博客</span></p>
                </h4>
            <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$article): $mod = ($i % 2 );++$i;?>
                <div class="item">
                    <div class="item-box  layer-photos-demo1 layer-photos-demo">
                        <h3><a href="<?php echo url('home/article/detail',['id' => $article['id']]); ?>"><?php echo htmlentities($article['title']); ?></a></h3>
                        <h5>发布于：<span><?php echo htmlentities($article['create_time']); ?></span></h5>
                        <p><?php echo htmlentities($article['preview']); ?></p>
                        <img src="/static/images/item.png" alt="">
                    </div>
                    <div class="comment count">
                            <a href="<?php echo url('home/article/detail', ['id' => $article['id']]); ?>">
                                <i class="layui-icon layui-icon-praise"><?php echo htmlentities($article['likes']); ?></i>
                            </a>
                            <a href="<?php echo url('home/article/detail#comment', ['id' => $article['id']]); ?>">
                                <i class="layui-icon layui-icon-dialogue"><?php echo htmlentities($article['comment']); ?></i>
                            </a>
                    </div>
                </div>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
        <div class="pagination">
            <!--<button class="layui-btn layui-btn-normal"></button>-->
                <?php echo $list; ?>
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

<script>
    layui.use(['jquery', 'layer'], function(){
        var $ = layui.$
            ,layer = layui.layer;
        let first = $('#first');
        first.addClass('layui-this');
    });
</script>

</body>
</html>