<?php
/**
 * Created by PhpStorm.
 * User: JustThinkIt
 * Date: 2018/9/25
 * Time: 0:27
 */
namespace app\admin\controller\user;
use think\Controller;

class Administrators extends Controller
{
    public function adminList()
    {
        return $this->fetch();
    }

    public function role()
    {
        return $this->fetch();
    }
}