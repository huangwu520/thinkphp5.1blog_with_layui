<?php
/**
 * Created by PhpStorm.
 * User: JustThinkIt
 * Date: 2018/10/2
 * Time: 0:57
 */
namespace app\admin\controller\app;
use app\admin\controller\Base;
use app\common\model\Reply as ReplyModel;

class Message extends Base
{
    public function index()
    {
        //TODO:在页面中正确传递回复内容,
        return $this->fetch();
    }

    public function api()
    {
        $reply = ReplyModel::where('status',0)->limit(10)->order('create_time','asc')->select();
        $data = $reply->toArray();
        $json_head = ['code'=>0,'message'=>"",'count'=>ReplyModel::where('status',0)->count('id'),'data'=>$data];
        return json($json_head);
    }

    public function detail()
    {
        //TODO:message.js填写正确url地址,填充内容.
        return $this->fetch();
    }
}