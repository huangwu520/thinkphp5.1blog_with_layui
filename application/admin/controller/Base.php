<?php
/**
 * Created by PhpStorm.
 * User: JustThinkIt
 * Date: 2018/9/17
 * Time: 10:19
 */
namespace app\admin\controller;
use think\Controller;
use think\facade\Session;

class Base extends Controller
{
    protected function initialize()
    {
        if(!Session::get('loginUsername') || !Session::get('loginUserId'))
        {
            return $this->redirect('@admin/login'); //此处url不能使用路由定义地址
        }
    }
}