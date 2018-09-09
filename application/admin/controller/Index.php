<?php
/**
 * Created by PhpStorm.
 * User: fling
 * Date: 8/11/18
 * Time: 6:33 PM
 */

namespace app\admin\controller;
use think\Controller;


class Index extends Controller{
    public function index()
    {

        $title = "后台管理";
        $this->assign('title', $title);
        return $this->fetch();
    }

    public function welcome()
    {

        return $this->fetch();
    }

}