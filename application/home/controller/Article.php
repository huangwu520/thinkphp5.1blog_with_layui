<?php
/**
 * Created by PhpStorm.
 * User: JustThinkIt
 * Date: 2018/9/6
 * Time: 18:03
 */

namespace app\home\controller;
use think\Controller;
use think\facade\Session;
use app\common\model\Post as PostModel;
use app\common\model\Reply as ReplyModel;

class Article extends Controller
{
    public function detail($id=233)
    {
        $data['id'] = $id;
        $data = PostModel::where('id',$id)
            ->find();
        $comment = ReplyModel::alias('r')
            ->join('user u','r.uid = u.id')
            ->where('r.pid', $id)
            ->field('u.id, u.username, r.id, r.uid, r.pid, r.content, r.likes, r.create_time')
            ->order('r.create_time desc')
            ->select();
        // halt($comment);
        $title= '文章';
        $this->assign('title',$title);
        $this->assign('data',$data);
        $this->assign('reply',$comment);
        // $this->assign('top',$top);
        return $this->fetch();
    }

    public function comment($id=233)
    {
        $uid = Session::get('loginUserId');
        $uid = isset($uid)? $uid: 6;
        if($this->request->isPost())
        {
            // 获取POST提交过来的全部数据，并trim过滤
            $data = input('post.','trim');
            // halt($data);
            if(empty($data))   //验证失败返回json
            {
                $res = [
                    "status" => "fail",
                    "info" => "请输入内容~"
                ];
                return json($res);
            }
            //验证通过对比帐号密码
            $reply = new ReplyModel;
            $reply->save([
                'uid' => $uid,
                'pid' => $data['pid'],
                'content' => $data['content']
            ]);
            if(empty($reply->id))
            {
                $res = [
                    "status" => "fail",
                    "info" => "plz input your reply~"
                ];
                return json($res);
            }
            $res = [
                'status'=>'success',
                'info' => "提交成功!",
                'pid' => $data['pid']
            ];
            return json($res);
        }
        $data['id'] = $id;
        $data = PostModel::where('id',$id)
            ->find();
        $title= '评论';
        $this->assign('title',$title);
        $this->assign('data',$data);
        return $this->fetch();
    }

    public function about()
    {
        $list = PostModel::Where('id',3)->select();
        // halt($list);
        $title= '关于';
        $this->assign('title',$title);
        $this->assign('list',$list);
        // $this->assign('top',$top);
        return $this->fetch();
    }




}