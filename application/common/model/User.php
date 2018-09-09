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
}