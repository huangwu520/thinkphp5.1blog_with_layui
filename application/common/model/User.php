<?php
/**
 * Created by PhpStorm.
 * User: JustThinkIt
 * Date: 2018/9/2
 * Time: 10:12
 */
namespace app\common\model;

use think\Model;

class User extends Model
{
    protected $table = 'user';
    protected $pk = 'id';
    protected $autoWriteTimestamp = true;  //自动写入时间戳

    protected function getCreateTimeAttr($create_time)
    {
        return date('Y-m-d H:i:s', $create_time);
    }

    public function checkLogin($username,$password)
    {
        // 判断用户名是否正确，查出数据则进行下一步，NULL的话直接返回错误信息
        $user = $this->where('username', $username)->find();
        if (!$user) {
            $res = [
                "status" => "fail",
                "info" => "用户名或密码错误"
            ];
        } else {
            // 判断此用户的密码是否与输入的密码一致，一致则账号密码正确
            if (password_verify($password, $user['password'])) {
                //判断用户是否为锁定状态
                if ($user['status'] == 2) {
                    $res = [
                        "status" => "fail",
                        "info" => "用户为锁定状态，请联系管理员"
                    ];
                } else {
                    $user['last_login'] = time();
                    $user->save();
                    $res = [
                        "id" => $user['id'],
                        "status" => "success",
                        "info" => "登录成功"
                    ];
                }
            } else {
                $res = [
                    "status" => "fail",
                    "info" => "用户名或密码错误"
                ];
            }
        }
        return $res;
    }


}