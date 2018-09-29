<?php
/**
 * Created by PhpStorm.
 * User: JustThinkIt
 * Date: 2018/9/19
 * Time: 16:53
 */
namespace app\admin\validate;
use think\facade\Session;
use think\Validate;
use think\Db;

class User extends Validate
{
    protected $rule = [
        'username'                  => 'require|unique:user',
        'old_password'              => 'check_password',
        'password'                  => 'require|length:6,20',
        'password_confirm'          => 'confirm:password',  //也可以写作confirm
        'mobile'                    => 'number|length:11',
        'email'                     => 'email',
        'status'                    => 'require',
        'verify'                    => 'require|captcha',
        'nickname'                  => 'chsDash'
    ];

    protected $message = [
        'username.require'          => '请输入用户名',
        'username.unique'           => '用户名已存在',
        'old_password'              => '原密码输入错误',
        'password.require'          => '请输入密码',
        'password.length'           => '密码长度6-20位',
        // 'password.confirm'         => '两次输入密码不一致',
        'confirm_password.confirm'  => '两次输入密码不一致',
        'mobile.number'             => '手机号格式错误',
        'mobile.length'             => '手机号长度错误',
        'email.email'               => '邮箱格式错误',
        'status.require'            => '请选择状态',
        'verify.require'            => '请输入验证码',
        'verify.captcha'            => '验证码不正确',
        'nickname.chsDash'          => '只能是汉字、字母、数字和下划线_及破折号-'
    ];

    protected function check_password($value)
    {
        $user_id = Session::get('loginUserId');
        $password = Db::name('user')->where('id', $user_id)->value('password');
        if (password_verify($value, $password)) {
            return true;
        } else {
            return false;
        }
    }

    public function sceneLogin()
    {
        return $this->only(['username','password','verify'])
            ->remove('username', 'unique')
            ->remove('password', 'length');
    }

    public function sceneReg()
    {
        return $this->only(['username','password','password_confirm', 'email', 'verify']);
    }

    public function sceneInfo()
    {
        return $this->only(['email','nickname']);
    }

    public function scenePassword()
    {
        return $this->only(['old_password','password','password_confirm']);
    }

    public function sceneResetPassword()
    {
        return $this->only(['old_password','password','password_confirm']);
    }
}