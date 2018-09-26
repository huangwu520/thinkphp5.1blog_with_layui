<?php
/**
 * Created by PhpStorm.
 * User: JustThinkIt
 * Date: 2018/9/26
 * Time: 21:25
 */
namespace app\admin\controller;
use think\Controller;
use think\facade\Session;
use app\common\model\User as UserModel;

class User extends Controller
{
    public function login()
    {
        $data = UserModel::get(1);

        return $this->fetch();
    }
}