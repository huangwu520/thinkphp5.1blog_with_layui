<?php
/**
 * Created by PhpStorm.
 * User: JustThinkIt
 * Date: 2018/9/6
 * Time: 18:03
 */

namespace app\home\controller;
use think\Controller;
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
            ->field('u.id, u.name, r.id, r.uid, r.pid, r.content, r.likes, r.create_time')
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
        $data['id'] = $id;
        $data = PostModel::where('id',$id)
            ->find();
        // $comment = ReplyModel::alias('r')
        //     ->join('user u','r.uid = u.id')
        //     ->where('r.pid', $id)
        //     ->field('u.id, u.name, r.id, r.uid, r.pid, r.content, r.likes, r.create_time')
        //     ->order('r.create_time desc')
        //     ->select();
        // halt($comment);
        $title= '评论';
        $this->assign('title',$title);
        $this->assign('data',$data);
        // $this->assign('reply',$comment);
        // $this->assign('top',$top);
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