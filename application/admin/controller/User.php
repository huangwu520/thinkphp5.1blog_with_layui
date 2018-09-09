<?php
/**
 * Created by PhpStorm.
 * User: JustThinkIt
 * Date: 2018/8/30
 * Time: 10:26
 */
namespace app\admin\controller;

use app\common\model\User as UserModel;

class User
{
    public function add()
    {
        $user = new UserModel;
        $user->name = 'dro';
        $user->email = 'dro@email.com';
        $user->level = '2';
        if($user->save()){
            return '用户[' . $user->name . ':' . $user->id . "]添加用户成功";
        }else{
            return $user->getError();
        }
    }

    public function read($id='')
    {
        $user = UserModel::get($id);
        echo $user['name'] . '<br>';
        // echo date('Y/m/d',$user->create_time) . '<br>';  //如果使用模型 读取器,那么就无法使用正常的未读取方式
        echo $user['create_time'] . '<br>';

    }
}
