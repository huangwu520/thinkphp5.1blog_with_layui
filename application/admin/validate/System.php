<?php
/**
 * Created by PhpStorm.
 * User: JustThinkIt
 * Date: 2018/9/19
 * Time: 23:40
 */
namespace app\admin\validate;
use think\Validate;

class System extends Validate
{
    protected $rule = [
        'webname'           => 'chsAlphaNum',
        'domain'            => 'url',
        'email'             => 'email',
        'cached'            => 'alpha',
        'urlrewrite'        => 'num|in:0,1',
        // 'ICP'               => 'chsAlphaNum',
        'censor'            => 'alpha',
        'review_interval'   => 'num'
    ];

    protected $message = [
        'webname.chsAlphaNum'            => '只能是汉字、字母、数字和下划线_及破折号-',
        'domain.url'                     => 'url格式不正确',
        'email.email'                    => '邮箱格式错误',
        'cached.alpha'                   => '必须是ON 或 OFF',
        'urlrewrite.num'                 => '只能是数字',
        'urlrewrite.in'                  => '只能是0或1',
        // 'ICP.chsAlphaNum'             => '只能是汉字、字母、数字和下划线_及破折号-',
        'censor.alpha'                   => '必须是ON 或 OFF',
        'email.email'                    => '邮箱格式错误',
        'review_interval.num'            => '只能是数字'
    ];

    public function sceneEdit()
    {
        return $this->only(['email']);
    }

}