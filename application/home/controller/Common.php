<?php
/**
 * Created by PhpStorm.
 * User: JustThinkIt
 * Date: 2018/8/15
 * Time: 17:08
 */
namespace app\home\controller;

use think\Controller;
use think\facade\Env;
// use Think\facade\Cache;
// use Request;

class Common extends Controller
{
    public function __construct()
    {
        parent::__construct();

        //1.网站信息获取
        $system = $this->loadSystem();
        $this->assign('_system',$system);  //单下划线分配给变量,以区分公共模板和单独页面分配的变量
        //2.文章导航分类获取,最多7个
        // $cateData = $this->loadCateData();
        // $this->assign('_cateList',$cateData);
        //3.获取全部栏目数组
        // $allCateData = $this->loadAllCate();
        // $this->assign('_allCate',$allCateData);
        //4.获取标签数据
        // $allTagData = $this->loadAllTag();
        // $this->assign('_allTag',$allTagData);
        //5.最新文章
        // $recentTopic = $this->loadRecentTopic();
        // // halt($recentTopic);exit;
        // $this->assign('_recentTopic',$recentTopic);
        //6.友情链接
        // $link = $this->loadLink();
        // $this->assign('_link',$link);
    }

    public function loadSystem(){
        return db('system')->column('value','name'); //column 第二参数指定索引值,也就是返回数组的键.
    }


    //导航栏分类获取
    public function loadCateData(){
        return db('cate')->where('cate_pid',1)->order('cate_sort desc')->limit(7)->select();
    }

    public function loadAllCate(){
        return db('cate')->order('cate_pid ')->select();
    }

    public function loadAllTag(){
        return db('tag')->order('tag_id desc')->select();
    }

    public function loadRecentPost(){
        return db('post')->field('id,title,create_time')->order('create_time desc')->limit(3)->select();
    }

    public function loadLink(){
        return db('link')->order('link_sort desc')->limit(7)->select();
    }
}