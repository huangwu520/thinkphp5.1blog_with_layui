<?php /*a:3:{s:60:"/home/wwwroot/layblog.blog/./template/admin/index/menu2.html";i:1537200382;s:61:"/home/wwwroot/layblog.blog/./template/admin/common/inner.html";i:1537345520;s:62:"/home/wwwroot/layblog.blog/./template/admin/common/footer.html";i:1537198855;}*/ ?>
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

<div class="page-content-wrap">
    <form class="layui-form" action="">
        <div class="layui-form-item">
            <div class="layui-inline tool-btn">
                <button class="layui-btn layui-btn-small layui-btn-normal addBtn hidden-xs" data-url="menuadd2.html"><i class="layui-icon">&#xe654;</i></button>
                <button class="layui-btn layui-btn-small layui-btn-warm listOrderBtn hidden-xs" data-url="/admin/category/listorderall.html"><i class="iconfont">&#xe656;</i></button>
            </div>
            <div class="layui-inline">
                <input type="text" name="title" placeholder="请输入标题" autocomplete="off" class="layui-input">
            </div>
            <div class="layui-inline">
                <select name="category" lay-filter="status">
                    <option value="0">主导航</option>
                    <option value="010">关于我们</option>
                    <option value="021">产品中心</option>
                    <option value="021">新闻中心</option>
                    <option value="021">业务范围</option>
                    <option value="021">联系我们</option>
                    <option value="021">在线留言</option>
                </select>
            </div>
            <button class="layui-btn layui-btn-normal" lay-submit="search">搜索</button>
        </div>
    </form>
    <div class="layui-form" id="table-list">
        <table class="layui-table" lay-even lay-skin="nob">
            <colgroup>
                <col width="50">
                <col class="hidden-xs" width="50">
                <col class="hidden-xs" width="100">
                <col>
                <col width="80">
                <col width="150">
            </colgroup>
            <thead>
            <tr>
                <th><input type="checkbox" name="" lay-skin="primary" lay-filter="allChoose"></th>
                <th class="hidden-xs">ID</th>
                <th class="hidden-xs">排序</th>
                <th>菜单名称</th>
                <th>状态</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><input type="checkbox" name="" lay-skin="primary" data-id="1"></td>
                <td class="hidden-xs">1</td>
                <td class="hidden-xs"><input type="text" name="title" autocomplete="off" class="layui-input" value="0" data-id="1"></td>
                <td>首页</td>
                <td><button class="layui-btn layui-btn-mini layui-btn-normal table-list-status" data-status='1'>显示</button></td>
                <td>
                    <div class="layui-inline">
                        <button class="layui-btn layui-btn-mini layui-btn-normal  add-btn" data-id="1" data-url="menuadd2.html"><i class="layui-icon">&#xe654;</i></button>
                        <button class="layui-btn layui-btn-mini layui-btn-normal  edit-btn" data-id="1" data-url="menuadd2.html"><i class="layui-icon">&#xe642;</i></button>
                        <button class="layui-btn layui-btn-mini layui-btn-danger del-btn" data-id="1" data-url="del.html"><i class="layui-icon">&#xe640;</i></button>
                    </div>
                </td>
            </tr>
            <tr>
                <td><input type="checkbox" name="" lay-skin="primary" data-id="1"></td>
                <td class="hidden-xs">1</td>
                <td class="hidden-xs"><input type="text" name="title" autocomplete="off" class="layui-input" value="0" data-id="1"></td>
                <td>关于我们</td>
                <td><button class="layui-btn layui-btn-mini layui-btn-normal table-list-status" data-status='1'>显示</button></td>
                <td>
                    <div class="layui-inline">
                        <button class="layui-btn layui-btn-mini layui-btn-normal  add-btn" data-id="1" data-url="menuadd2.html"><i class="layui-icon">&#xe654;</i></button>
                        <button class="layui-btn layui-btn-mini layui-btn-normal  edit-btn" data-id="1" data-url="menuadd2.html"><i class="layui-icon">&#xe642;</i></button>
                        <button class="layui-btn layui-btn-mini layui-btn-danger del-btn" data-id="1" data-url="del.html"><i class="layui-icon">&#xe640;</i></button>
                    </div>
                </td>
            </tr>
            <tr>
                <td><input type="checkbox" name="" lay-skin="primary" data-id="1"></td>
                <td class="hidden-xs">1</td>
                <td class="hidden-xs"><input type="text" name="title" autocomplete="off" class="layui-input" value="0" data-id="1"></td>
                <td>产品中心</td>
                <td><button class="layui-btn layui-btn-mini layui-btn-normal table-list-status" data-status='1'>显示</button></td>
                <td>
                    <div class="layui-inline">
                        <button class="layui-btn layui-btn-mini layui-btn-normal  add-btn" data-id="1" data-url="menuadd2.html"><i class="layui-icon">&#xe654;</i></button>
                        <button class="layui-btn layui-btn-mini layui-btn-normal  edit-btn" data-id="1" data-url="menuadd2.html"><i class="layui-icon">&#xe642;</i></button>
                        <button class="layui-btn layui-btn-mini layui-btn-danger del-btn" data-id="1" data-url="del.html"><i class="layui-icon">&#xe640;</i></button>
                    </div>
                </td>
            </tr>
            <tr>
                <td><input type="checkbox" name="" lay-skin="primary" data-id="1"></td>
                <td class="hidden-xs">1</td>
                <td class="hidden-xs"><input type="text" name="title" autocomplete="off" class="layui-input" value="0" data-id="1"></td>
                <td>新闻中心</td>
                <td><button class="layui-btn layui-btn-mini layui-btn-normal table-list-status" data-status='1'>显示</button></td>
                <td>
                    <div class="layui-inline">
                        <button class="layui-btn layui-btn-mini layui-btn-normal  add-btn" data-id="1" data-url="menuadd2.html"><i class="layui-icon">&#xe654;</i></button>
                        <button class="layui-btn layui-btn-mini layui-btn-normal  edit-btn" data-id="1" data-url="menuadd2.html"><i class="layui-icon">&#xe642;</i></button>
                        <button class="layui-btn layui-btn-mini layui-btn-danger del-btn" data-id="1" data-url="del.html"><i class="layui-icon">&#xe640;</i></button>
                    </div>
                </td>
            </tr>
            <tr>
                <td><input type="checkbox" name="" lay-skin="primary" data-id="1"></td>
                <td class="hidden-xs">1</td>
                <td class="hidden-xs"><input type="text" name="title" autocomplete="off" class="layui-input" value="0" data-id="1"></td>
                <td>业务范围</td>
                <td><button class="layui-btn layui-btn-mini layui-btn-normal table-list-status" data-status='1'>显示</button></td>
                <td>
                    <div class="layui-inline">
                        <button class="layui-btn layui-btn-mini layui-btn-normal  add-btn" data-id="1" data-url="menuadd2.html"><i class="layui-icon">&#xe654;</i></button>
                        <button class="layui-btn layui-btn-mini layui-btn-normal  edit-btn" data-id="1" data-url="menuadd2.html"><i class="layui-icon">&#xe642;</i></button>
                        <button class="layui-btn layui-btn-mini layui-btn-danger del-btn" data-id="1" data-url="del.html"><i class="layui-icon">&#xe640;</i></button>
                    </div>
                </td>
            </tr>
            <tr>
                <td><input type="checkbox" name="" lay-skin="primary" data-id="1"></td>
                <td class="hidden-xs">1</td>
                <td class="hidden-xs"><input type="text" name="title" autocomplete="off" class="layui-input" value="0" data-id="1"></td>
                <td>联系我们</td>
                <td><button class="layui-btn layui-btn-mini layui-btn-normal table-list-status" data-status='1'>显示</button></td>
                <td>
                    <div class="layui-inline">
                        <button class="layui-btn layui-btn-mini layui-btn-normal  add-btn" data-id="1" data-url="menuadd2.html"><i class="layui-icon">&#xe654;</i></button>
                        <button class="layui-btn layui-btn-mini layui-btn-normal  edit-btn" data-id="1" data-url="menuadd2.html"><i class="layui-icon">&#xe642;</i></button>
                        <button class="layui-btn layui-btn-mini layui-btn-danger del-btn" data-id="1" data-url="del.html"><i class="layui-icon">&#xe640;</i></button>
                    </div>
                </td>
            </tr>
            <tr>
                <td><input type="checkbox" name="" lay-skin="primary" data-id="1"></td>
                <td class="hidden-xs">1</td>
                <td class="hidden-xs"><input type="text" name="title" autocomplete="off" class="layui-input" value="0" data-id="1"></td>
                <td>在线留言</td>
                <td><button class="layui-btn layui-btn-mini layui-btn-normal table-list-status" data-status='1'>显示</button></td>
                <td>
                    <div class="layui-inline">
                        <button class="layui-btn layui-btn-mini layui-btn-normal  add-btn" data-id="1" data-url="menuadd2.html"><i class="layui-icon">&#xe654;</i></button>
                        <button class="layui-btn layui-btn-mini layui-btn-normal  edit-btn" data-id="1" data-url="menuadd2.html"><i class="layui-icon">&#xe642;</i></button>
                        <button class="layui-btn layui-btn-mini layui-btn-danger del-btn" data-id="1" data-url="del.html"><i class="layui-icon">&#xe640;</i></button>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
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
            layui.use(['form', 'jquery', 'layer', 'dialog'], function() {
                var $ = layui.jquery;

                //修改状态
                $('#table-list').on('click', '.table-list-status', function() {
                    var That = $(this);
                    var status = That.attr('data-status');
                    var id = That.parent().attr('data-id');
                    if(status == 1) {
                        That.removeClass('layui-btn-normal').addClass('layui-btn-warm').html('隐藏').attr('data-status', 2);
                    } else if(status == 2) {
                        That.removeClass('layui-btn-warm').addClass('layui-btn-normal').html('显示').attr('data-status', 1);

                    }
                })

            });
        </script>

</body>
</html>