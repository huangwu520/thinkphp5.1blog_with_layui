<?php
/**
 * Created by PhpStorm.
 * User: JustThinkIt
 * Date: 2018/9/19
 * Time: 15:32
 */
namespace app\admin\validate;
use think\Validate ;

class AdminInfo extends Validate
{
    protected $rule = [
        'email' => 'email',
        'about' => 'chsDash|max:16333'
    ];

    protected $message = [
        'email.email'              => '邮箱格式错误',
        'about.chsDash' => '只能是汉字、字母、数字和下划线_及破折号-',
        'about.max' => '最长只能16333字符哦'
    ];
}