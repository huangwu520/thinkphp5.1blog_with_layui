<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
use think\facade\Route;

Route::get('think', function () {
    return 'hello,ThinkPHP5!';
});

Route::get('hello/:name', 'index/hello');

//自定义路由
// Route::rule('/','home/index/index');   //首页路由
// Route::rule('/:page','home/index/index');
//前台路由
// Route::rule('post/:id','home/post/detail');

//后台路由
Route::rule('admin/home','admin/index/index');
Route::rule('admin/login','admin/user/login');
Route::rule('admin/logout','admin/user/logout');
// Route::rule('tips/notfound', 'admin/user.template.tips/notfound');
// Route::rule('tips/error', 'admin/user.template.tips/error');
Route::rule('app/message', 'admin/app.message/index');

//base作为子类定义后,无法正确识别router地址,待查资料后更正
// Route::rule('message/api', 'admin/app.message/api');
// Route::rule('message/detail/:id', 'admin/app.message/detail');
// Route::rule('user/userlist', 'admin/user.user/userlist');
// Route::rule('administrators/adminlist', 'admin/user.administrators/adminlist');


return [

];

