<?php
/**
 * Created by PhpStorm.
 * User: fling
 * Date: 8/11/18
 * Time: 6:33 PM
 */

namespace app\admin\controller;
use think\facade\Session;
use app\common\model\User as UserModel;
use app\common\model\Post as PostModel;
use app\common\model\Reply as ReplyModel;
use think\facade\Env;

class Index extends Base
{
    public function index()
    {
        return $this->fetch();
    }

    public function logout()
    {
        // if($this->request->isPost())
        // {
        //     $data = input('post.');
        //     // halt($data);
        //     if($data.['logout'] === 'true'){
        //         Session::clear();
        //         $res = [
        //             'status' => 'success',
        //             'info' => '正在退出登录'
        //         ];
        //         return json($res);
        //     }
        // }
        Session::clear();
        return $this->redirect('admin/login/index');
    }

    public function welcome()
    {
        $members = UserModel::count('id');
        $posts = PostModel::count('id');
        $commends = ReplyModel::count('id');
        $recent_post = ReplyModel::alias('r')->join('user u','r.uid=u.id')
            ->field('u.id,u.username,r.id,r.uid,r.pid,r.content,r.create_time')
            ->order('create_time desc')
            ->limit(5)
            ->select();
        $info = array(
            '操作系统'=>PHP_OS,
            '运行环境'=>$_SERVER["SERVER_SOFTWARE"],
            '主机名'=>$_SERVER['SERVER_NAME'],
            'WEB服务端口'=>$_SERVER['SERVER_PORT'],
            '网站文档目录'=>$_SERVER["DOCUMENT_ROOT"],
            '浏览器信息'=>substr($_SERVER['HTTP_USER_AGENT'], 0, 40),
            '通信协议'=>$_SERVER['SERVER_PROTOCOL'],
            '请求方法'=>$_SERVER['REQUEST_METHOD'],
            'ThinkPHP版本'=>'5.1.19',
            'Php version' =>'7.1',
            'database'=>'Mysql 5.5',
            '上传附件限制'=>ini_get('upload_max_filesize'),
            '执行时间限制'=>ini_get('max_execution_time').'秒',
            '服务器时间'=>date("Y年n月j日 H:i:s"),
            '北京时间'=>gmdate("Y年n月j日 H:i:s",time()+8*3600),
            '服务器域名'=>$_SERVER['SERVER_NAME'],
            '服务器IP'=>' [ '.gethostbyname($_SERVER['SERVER_NAME']).' ]',
            '用户的IP地址'=>$_SERVER['REMOTE_ADDR'],
            '剩余空间'=>round((disk_free_space(".")/(1024*1024)),2).'M',
        );
        // halt($recent_post);
        $this->assign('members', $members);
        $this->assign('posts', $posts);
        $this->assign('commends', $commends);
        $this->assign('info', $info);
        $this->assign('recentPost', $recent_post);
        return $this->fetch();
    }

    public function adminInfo()
    {
        $data = UserModel::where('id',1)->find();

        $this->assign('data', $data);
        return $this->fetch();
    }

    public function menu1()
    {
        return $this->fetch();
    }

    public function menu2()
    {
        return $this->fetch();
    }

    public function articleList()
    {
        return $this->fetch();
    }

    public function danyeList()
    {
        return $this->fetch();
    }

    public function system()
    {
        return $this->fetch();
    }

}