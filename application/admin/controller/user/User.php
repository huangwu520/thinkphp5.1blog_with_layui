<?php
/**
 * Created by PhpStorm.
 * User: JustThinkIt
 * Date: 2018/9/24
 * Time: 0:20
 */
namespace app\admin\controller\user;
// use think\Controller;
use app\admin\controller\Base;

class User extends Base
{
    public function userList()
    {
        return $this->fetch();
    }


}