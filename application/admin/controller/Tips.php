<?php
/**
 * Created by PhpStorm.
 * User: JustThinkIt
 * Date: 2018/10/1
 * Time: 9:38
 */
namespace app\admin\controller;

class Tips extends Base
{
    public function notFound()
    {
        return $this->fetch();
        // throw new \think\exception\HttpException(404, "页面不存在");
        // abort(404,'你来到了世界的尽头,返回首页看看吧');
    }

    public function errors()
    {
        return $this->fetch();
    }
}

