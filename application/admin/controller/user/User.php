<?php
/**
 * Created by PhpStorm.
 * User: JustThinkIt
 * Date: 2018/9/24
 * Time: 0:20
 */
namespace app\admin\controller\user;
use think\Controller;

class User extends Controller
{
    public function userList()
    {
        return $this->fetch();
    }
}