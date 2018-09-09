<?php
/**
 * Created by PhpStorm.
 * User: fling
 * Date: 8/11/18
 * Time: 6:32 PM
 */

namespace app\home\controller;
use think\Controller;
use app\common\model\Post as PostModel;

class Index extends Controller
{

    public function index()
    {
        $list = PostModel::where('status',1)    //1 帖子显示 2 草稿 3.回收站
            ->field('id,title,author,likes,preview,create_time,comment,status')
            ->paginate(3);
        // halt($list);
        $title= '首页';
        $this->assign('title',$title);
        $this->assign('list',$list);
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