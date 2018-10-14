<?php
/**
 * Created by PhpStorm.
 * User: JustThinkIt
 * Date: 2018/9/8
 * Time: 0:44
 */
namespace app\home\controller;
use think\Controller;
use app\common\model\Tag as TagModel ;
use app\common\model\TagPost as TagPostModel;
// use app\common\model\Post as PostModel;

class Tag extends Controller
{
    public function index()
    {
        $data = TagModel::alias('t')
            ->join('tag_post tp', 'tp.tid = t.id')
            ->field(['tp.tid', 'count(tp.tid)'=>'cnt','t.id', 't.name', 't.description', 't.create_time'=>'ctime'])
            ->group('tp.tid')
            ->select();
        $title= '文章';
        $this->assign('title',$title);
        $this->assign('data',$data);
        return $this->fetch();
    }

    public function lists($tid=1)
    {
        $list = TagPostModel::Where('tid',$tid)->alias('t')
            ->join('post p', 't.post_id = p.id')
            ->field('p.id, p.title, p.preview, p.author, p.likes, p.create_time, p.comment, p.status')
            ->where('p.status', 1)
            ->paginate(10);
        //
        $name = TagModel::where('tid',$tid)->field('name')->find();
        $title= '标签文章';
        $this->assign('title',$title);
        $this->assign('list',$list);
        $this->assign('name',$name);
        return $this->fetch();
    }
}