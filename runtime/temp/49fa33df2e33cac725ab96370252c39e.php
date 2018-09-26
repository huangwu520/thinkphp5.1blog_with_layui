<?php /*a:3:{s:62:"/home/wwwroot/layblog.blog/./template/admin/index/welcome.html";i:1537004540;s:61:"/home/wwwroot/layblog.blog/./template/admin/common/inner.html";i:1537345520;s:62:"/home/wwwroot/layblog.blog/./template/admin/common/footer.html";i:1537198855;}*/ ?>
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

<div class="wrap-container welcome-container">
    <div class="row">
        <div class="welcome-left-container col-lg-9">
            <div class="data-show">
                <ul class="clearfix">
                    <li class="col-sm-12 col-md-4 col-xs-12">
                        <a href="javascript:;" class="clearfix">
                            <div class="icon-bg bg-org f-l">
                                <span class="iconfont">&#xe606;</span>
                            </div>
                            <div class="right-text-con">
                                <p class="name">会员数</p>
                                <p><span class="color-org"><?php echo htmlentities($members); ?></span></p>
                            </div>
                        </a>
                    </li>
                    <li class="col-sm-12 col-md-4 col-xs-12">
                        <a href="javascript:;" class="clearfix">
                            <div class="icon-bg bg-blue f-l">
                                <span class="iconfont">&#xe602;</span>
                            </div>
                            <div class="right-text-con">
                                <p class="name">文章数</p>
                                <p><span class="color-blue"><?php echo htmlentities($posts); ?></span></p>
                            </div>
                        </a>
                    </li>
                    <li class="col-sm-12 col-md-4 col-xs-12">
                        <a href="javascript:;" class="clearfix">
                            <div class="icon-bg bg-green f-l">
                                <span class="iconfont">&#xe605;</span>
                            </div>
                            <div class="right-text-con">
                                <p class="name">评论数</p>
                                <p><span class="color-green"><?php echo htmlentities($commends); ?></span></p>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            <!--图表-->
            <div class="chart-panel panel panel-default">
                <div class="panel-body" id="chart" style="height: 376px;">
                </div>
            </div>
            <!--服务器信息-->
            <div class="server-panel panel panel-default">
                <div class="panel-header">服务器信息</div>
                <div class="panel-body clearfix">
                    <div class="col-md-2">
                        <p class="title">服务器环境</p>
                        <span class="info"><?php echo htmlentities($info['运行环境']); ?> thinkphp/<?php echo htmlentities($info['ThinkPHP版本']); ?></span>
                    </div>
                    <div class="col-md-2">
                        <p class="title">服务器IP地址</p>
                        <span class="info"><?php echo htmlentities($info['服务器IP']); ?>   </span>
                    </div>
                    <div class="col-md-2">
                        <p class="title">服务器域名</p>
                        <span class="info"><?php echo htmlentities($info['服务器域名']); ?> </span>
                    </div>
                    <div class="col-md-2">
                        <p class="title"> PHP版本</p>
                        <span class="info"><?php echo htmlentities($info['Php version']); ?></span>
                    </div>
                    <div class="col-md-2">
                        <p class="title">数据库信息</p>
                        <span class="info"><?php echo htmlentities($info['database']); ?></span>
                    </div>
                    <div class="col-md-2">
                        <p class="title">服务器当前时间</p>
                        <span class="info"><?php echo htmlentities($info['服务器时间']); ?></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="welcome-edge col-lg-3">
            <!--最新留言-->
            <div class="panel panel-default comment-panel">
                <div class="panel-header">最新留言</div>
                <div class="panel-body">
                    <div class="commentbox">
                        <ul class="commentList">
                            <?php if(is_array($recentPost) || $recentPost instanceof \think\Collection || $recentPost instanceof \think\Paginator): $i = 0; $__LIST__ = $recentPost;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                <li class="item cl"> <a href="#"><i class="avatar size-L radius"><img alt="" src=""></i></a>
                                    <div class="comment-main">
                                        <header class="comment-header">
                                            <div class="comment-meta"><a class="comment-author" href="#"><?php echo htmlentities($vo['username']); ?></a> 评论于
                                                <time title="2014年8月31日 下午3:20" datetime="<?php echo htmlentities($vo['create_time']); ?>"><?php echo htmlentities($vo['create_time']); ?></time>
                                            </div>
                                        </header>
                                        <div class="comment-body">
                                            <p><a href="#"></a> <?php echo htmlentities($vo['content']); ?></p>
                                        </div>
                                    </div>
                                </li>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </div>
                    <div id="pagesbox" style="text-align: center;padding-top: 5px;">

                    </div>
                </div>
            </div>
            <!--联系-->
            <!--<div class="panel panel-default contact-panel">-->
                <!--<div class="panel-header">联系我们</div>-->
                <!--<div class="panel-body">-->
                    <!--<p>QQ：888888</p>-->
                    <!--<p>E-mail:888888@qq.com</p>-->
                <!--</div>-->
            <!--</div>-->
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

<script type="text/javascript">
    layui.use(['layer','jquery'], function(){
        var layer 	= layui.layer;
        var $=layui.jquery;
        //图表
        var myChart;
        require.config({
            paths: {
                echarts: '/static/admin/lib/echarts'
            }
        });
        require(
            [
                'echarts',
                'echarts/chart/bar',
                'echarts/chart/line',
                'echarts/chart/map'
            ],
            function (ec) {
                //--- 折柱 ---
                myChart = ec.init(document.getElementById('chart'));
                myChart.setOption(
                    {
                        title: {
                            text: "数据统计",
                            textStyle: {
                                color: "rgb(85, 85, 85)",
                                fontSize: 18,
                                fontStyle: "normal",
                                fontWeight: "normal"
                            }
                        },
                        tooltip: {
                            trigger: "axis"
                        },
                        legend: {
                            data: ["会员", "文章", "评论"],
                            selectedMode: false,
                        },
                        toolbox: {
                            show: true,
                            feature: {
                                dataView: {
                                    show: false,
                                    readOnly: true
                                },
                                magicType: {
                                    show: false,
                                    type: ["line", "bar", "stack", "tiled"]
                                },
                                restore: {
                                    show: true
                                },
                                saveAsImage: {
                                    show: true
                                },
                                mark: {
                                    show: false
                                }
                            }
                        },
                        calculable: false,
                        xAxis: [
                            {
                                type: "category",
                                boundaryGap: false,
                                data: ["周一", "周二", "周三", "周四", "周五", "周六", "周日"]
                            }
                        ],
                        yAxis: [
                            {
                                type: "value"
                            }
                        ],
                        grid: {
                            x2: 30,
                            x: 50
                        },
                        series: [
                            {
                                name: "会员",
                                type: "line",
                                smooth: true,
                                itemStyle: {
                                    normal: {
                                        areaStyle: {
                                            type: "default"
                                        }
                                    }
                                },
                                data: [10, 12, 21, 54, 260, 830, 710]
                            },
                            {
                                name: "文章",
                                type: "line",
                                smooth: true,
                                itemStyle: {
                                    normal: {
                                        areaStyle: {
                                            type: "default"
                                        }
                                    }
                                },
                                data: [30, 182, 434, 791, 390, 30, 10]
                            },
                            {
                                name: "评论",
                                type: "line",
                                smooth: true,
                                itemStyle: {
                                    normal: {
                                        areaStyle: {
                                            type: "default"
                                        },
                                        color: "rgb(110, 211, 199)"
                                    }
                                },
                                data: [1320, 1132, 601, 234, 120, 90, 20]
                            }
                        ]
                    }
                );
            }
        );
        $(window).resize(function(){
            myChart.resize();
        })
    });
</script>

</body>
</html>