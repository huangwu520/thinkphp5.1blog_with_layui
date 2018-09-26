<?php /*a:3:{s:60:"/home/wwwroot/layblog.blog/./template/admin/index/menu1.html";i:1537200382;s:61:"/home/wwwroot/layblog.blog/./template/admin/common/inner.html";i:1537345520;s:62:"/home/wwwroot/layblog.blog/./template/admin/common/footer.html";i:1537198855;}*/ ?>
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
                <button class="layui-btn layui-btn-small layui-btn-normal addBtn hidden-xs" data-url="menuadd.html"><i class="layui-icon">&#xe654;</i></button>
                <button class="layui-btn layui-btn-small layui-btn-warm listOrderBtn hidden-xs" data-url="menuadd.html"><i class="iconfont">&#xe656;</i></button>
            </div>
            <div class="layui-inline">
                <input type="text" name="title" required lay-verify="required" placeholder="请输入标题" autocomplete="off" class="layui-input">
            </div>
            <div class="layui-inline">
                <select name="states" lay-filter="status">
                    <option value="">请选择一个状态</option>
                    <option value="010">显示</option>
                    <option value="021">隐藏</option>
                </select>
            </div>
            <button class="layui-btn layui-btn-normal" lay-submit="search">搜索</button>
        </div>
    </form>
    <div class="layui-form" id="table-list">
        <table class="layui-table" lay-skin="line">
            <colgroup>
                <col width="50">
                <col class="hidden-xs" width="50">
                <col class="hidden-xs" width="100">
                <col class="hidden-xs" width="100">
                <col>
                <col width="80">
                <col width="130">
            </colgroup>
            <thead>
            <tr>
                <th><input type="checkbox" name="" lay-skin="primary" lay-filter="allChoose"></th>
                <th class="hidden-xs">ID</th>
                <th class="hidden-xs">排序</th>
                <th class="hidden-xs">应用</th>
                <th>菜单名称</th>
                <th>状态</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody>
            <tr id='node-1' class="parent collapsed">
                <td><input type="checkbox" name="" lay-skin="primary" data-id="1"></td>
                <td class="hidden-xs">1</td>
                <td class="hidden-xs"><input type="text" name="title" autocomplete="off" class="layui-input" value="0" data-id="1"></td>
                <td class="hidden-xs">Admin</td>
                <td>菜单管理
                    <a class="layui-btn layui-btn-mini layui-btn-normal showSubBtn" data-id='1'>+</a>
                </td>
                <td><button class="layui-btn layui-btn-mini layui-btn-normal table-list-status">显示 </button></td>
                <td>
                    <div class="layui-inline">
                        <button class="layui-btn layui-btn-mini layui-btn-normal  add-btn" data-id="1" data-url="menuadd.html"><i class="layui-icon">&#xe654;</i></button>
                        <button class="layui-btn layui-btn-mini layui-btn-normal  edit-btn" data-id="1" data-url="menuadd.html"><i class="layui-icon">&#xe642;</i></button>
                        <button class="layui-btn layui-btn-mini layui-btn-danger del-btn" data-id="1" data-url="menuadd.html"><i class="layui-icon">&#xe640;</i></button>
                    </div>
                </td>
            </tr>
            <tr id='node-2' class="child-node-1 parent collapsed" style="display:none ;" parentid="1">
                <td><input type="checkbox" name="" lay-skin="primary" data-id="2"></td>
                <td class="hidden-xs">2</td>
                <td class="hidden-xs"><input type="text" name="title" autocomplete="off" class="layui-input" value="0" data-id="2"></td>
                <td class="hidden-xs">Admin</td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;├─后台菜单
                    <a class="layui-btn layui-btn-mini layui-btn-normal showSubBtn" data-id='2'>+</a>
                </td>
                <td><button class="layui-btn layui-btn-mini layui-btn-normal table-list-status">显示 </button></td>
                <td>
                    <div class="layui-inline">
                        <button class="layui-btn layui-btn-mini layui-btn-normal  add-btn" data-id="1" data-url="menuadd.html"><i class="layui-icon">&#xe654;</i></button>
                        <button class="layui-btn layui-btn-mini layui-btn-normal  edit-btn" data-id="2" data-url="menuadd.html"><i class="layui-icon">&#xe642;</i></button>
                        <button class="layui-btn layui-btn-mini layui-btn-danger del-btn" data-id="2" data-url="menuadd.html"><i class="layui-icon">&#xe640;</i></button>
                    </div>
                </td>
            </tr>
            <tr id='node-3' class="child-node-2 parent collapsed" style="display: none;" parentid="1">
                <td><input type="checkbox" name="" lay-skin="primary" data-id="3"></td>
                <td class="hidden-xs">3</td>
                <td class="hidden-xs"><input type="text" name="title" autocomplete="off" class="layui-input" value="0" data-id="3"></td>
                <td class="hidden-xs">Admin</td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;├─菜单列表</td>
                <td><button class="layui-btn layui-btn-mini layui-btn-normal table-list-status">显示 </button></td>
                <td>
                    <div class="layui-inline">
                        <button class="layui-btn layui-btn-mini layui-btn-normal  add-btn" data-id="1" data-url="menuadd.html"><i class="layui-icon">&#xe654;</i></button>
                        <button class="layui-btn layui-btn-mini layui-btn-normal  edit-btn" data-id="3" data-url="menuadd.html"><i class="layui-icon">&#xe642;</i></button>
                        <button class="layui-btn layui-btn-mini layui-btn-danger del-btn" data-id="3" data-url="menuadd.html"><i class="layui-icon">&#xe640;</i></button>
                    </div>
                </td>
            </tr>
            <tr id='node-4' class="child-node-2 parent collapsed" style="display: none;" parentid="1">
                <td><input type="checkbox" name="" lay-skin="primary" data-id="4"></td>
                <td class="hidden-xs">4</td>
                <td class="hidden-xs"><input type="text" name="title" autocomplete="off" class="layui-input" value="0" data-id="4"></td>
                <td class="hidden-xs">Admin</td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;├─添加菜单</td>
                <td><button class="layui-btn layui-btn-mini layui-btn-normal table-list-status">显示 </button></td>
                <td>
                    <div class="layui-inline">
                        <button class="layui-btn layui-btn-mini layui-btn-normal  add-btn" data-id="1" data-url="menuadd.html"><i class="layui-icon">&#xe654;</i></button>
                        <button class="layui-btn layui-btn-mini layui-btn-normal  edit-btn" data-id="4" data-url="menuadd.html"> <i class="layui-icon">&#xe642;</i></button>
                        <button class="layui-btn layui-btn-mini layui-btn-danger del-btn" data-id="4" data-url="menuadd.html"><i class="layui-icon">&#xe640;</i></button>
                    </div>
                </td>
            </tr>
            <tr id='node-4' class="child-node-2 parent collapsed" style="display: none;" parentid="1">
                <td><input type="checkbox" name="" lay-skin="primary" data-id="4"></td>
                <td class="hidden-xs">4</td>
                <td class="hidden-xs"><input type="text" name="title" autocomplete="off" class="layui-input" value="0" data-id="4"></td>
                <td class="hidden-xs">Admin</td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;├─添加菜单</td>
                <td><button class="layui-btn layui-btn-mini layui-btn-normal table-list-status">显示 </button></td>
                <td>
                    <div class="layui-inline">
                        <button class="layui-btn layui-btn-mini layui-btn-normal  add-btn" data-id="1" data-url="menuadd.html"><i class="layui-icon">&#xe654;</i></button>
                        <button class="layui-btn layui-btn-mini layui-btn-normal  edit-btn" data-id="4" data-url="menuadd.html"><i class="layui-icon">&#xe642;</i></button>
                        <button class="layui-btn layui-btn-mini layui-btn-danger del-btn" data-id="4" data-url="menuadd.html"><i class="layui-icon">&#xe640;</i></button>
                    </div>
                </td>
            </tr>
            <tr id='node-5' class="child-node-1 parent collapsed" style="display: none;" parentid="1">
                <td><input type="checkbox" name="" lay-skin="primary" data-id="5"></td>
                <td class="hidden-xs">5</td>
                <td class="hidden-xs"><input type="text" name="title" autocomplete="off" class="layui-input" value="0" data-id="5"></td>
                <td class="hidden-xs">Admin</td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;├─前台菜单
                    <a class="layui-btn layui-btn-mini layui-btn-normal showSubBtn" data-id='5'>+</a>
                </td>
                <td><button class="layui-btn layui-btn-mini layui-btn-warm table-list-status">隐藏</button></td>
                <td>
                    <div class="layui-inline">
                        <button class="layui-btn layui-btn-mini layui-btn-normal  add-btn" data-id="1" data-url="menuadd.html"><i class="layui-icon">&#xe654;</i></button>
                        <button class="layui-btn layui-btn-mini layui-btn-normal  edit-btn" data-id="5" data-url="menuadd.html"><i class="layui-icon">&#xe642;</i></button>
                        <button class="layui-btn layui-btn-mini layui-btn-danger del-btn" data-id="5" data-url="menuadd.html"><i class="layui-icon">&#xe640;</i></button>
                    </div>
                </td>
            </tr>
            <tr id='node-6' class="child-node-5 parent collapsed" style="display: none;" parentid="1">
                <td><input type="checkbox" name="" lay-skin="primary" data-id="3"></td>
                <td class="hidden-xs">6</td>
                <td class="hidden-xs"><input type="text" name="title" autocomplete="off" class="layui-input" value="0" data-id="6"></td>
                <td class="hidden-xs">Admin</td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;├─菜单列表</td>
                <td><button class="layui-btn layui-btn-mini layui-btn-normal table-list-status">显示 </button></td>
                <td>
                    <div class="layui-inline">
                        <button class="layui-btn layui-btn-mini layui-btn-normal  add-btn" data-id="1" data-url="menuadd.html"><i class="layui-icon">&#xe654;</i></button>
                        <button class="layui-btn layui-btn-mini layui-btn-normal  edit-btn" data-id="6" data-url="menuadd.html"><i class="layui-icon">&#xe642;</i></button>
                        <button class="layui-btn layui-btn-mini layui-btn-danger del-btn" data-id="6" data-url="menuadd.html"><i class="layui-icon">&#xe640;</i></button>
                    </div>
                </td>
            </tr>
            <tr id='node-7' class="child-node-5 parent collapsed" style="display: none;" parentid="1">
                <td><input type="checkbox" name="" lay-skin="primary" data-id="5"></td>
                <td class="hidden-xs">7</td>
                <td class="hidden-xs"><input type="text" name="title" autocomplete="off" class="layui-input" value="0" data-id="7"></td>
                <td class="hidden-xs">Admin</td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;├─添加菜单</td>
                <td><button class="layui-btn layui-btn-mini layui-btn-normal table-list-status">显示 </button></td>
                <td>
                    <div class="layui-inline">
                        <button class="layui-btn layui-btn-mini layui-btn-normal  add-btn" data-id="1" data-url="menuadd.html"><i class="layui-icon">&#xe654;</i></button>
                        <button class="layui-btn layui-btn-mini layui-btn-normal  edit-btn" data-id="7" data-url="menuadd.html"><i class="layui-icon">&#xe642;</i></button>
                        <button class="layui-btn layui-btn-mini layui-btn-danger del-btn" data-id="7" data-url="menuadd.html"><i class="layui-icon">&#xe640;</i></button>
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

<script src="/static/admin/lib/echarts/echarts.js"></script>

<!--页面JS脚本-->

<script>
    layui.use(['jquery'], function() {
        var $=layui.jquery;
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
        //栏目展示隐藏
        $('.showSubBtn').on('click', function() {
            var _this = $(this);
            var id = _this.attr('data-id');
            var parent = _this.parents('.parent');
            var child = $('.child-node-' + id);
            var childAll = $('tr[parentid=' + id + ']');
            if(parent.hasClass('collapsed')) {
                _this.html('-');
                parent.addClass('expanded').removeClass('collapsed');
                child.css('display', '');
            } else {
                _this.html('+');
                parent.addClass('collapsed').removeClass('expanded');
                child.css('display', 'none');
                childAll.addClass('collapsed').removeClass('expanded').css('display', 'none');
                childAll.find('.showSubBtn').html('+');
            }
        })
    });
</script>

</body>
</html>