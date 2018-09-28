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
use app\common\model\System as SystemModel;
use think\facade\Env;

class Index extends Base
{
    public function index()
    {//router admin/home

        return $this->fetch();
    }

    public function console()
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
        if($this->request->isPost())
        {
            // 获取POST提交过来的全部数据，并trim过滤
            $data = input('post.','trim');
            if(!empty($data['email']))
            {
                $result = $this->Validate($data,'AdminInfo');
                if($result !== true)   //验证失败返回json
                {
                    $res = [
                        "status" => "fail",
                        "info" => $result
                    ];
                    return json($res);
                }
                //验证成功,保存数据
                $user = UserModel::get(Session::get('loginUserId'));
                $user-> email = $data['email'];
                $user-> about = $data['about'];
                $res = $user->save();

                if($res == true)
                {
                    $res = [
                        "status" => "success",
                        "info" => "更新完成"
                    ];
                    return json($res);
                }
            }else{
                $result = $this->Validate($data,'User.ChangePw');
                if($result == false){
                    $res = [
                        "status" => "fail",
                        "info" => $result
                    ];
                    return json($res);
                }
                $user_id = Session::get('loginUserId');
                $user = UserModel::get($user_id);
                $user-> password = password_hash($data['password'], PASSWORD_BCRYPT);
                $res = $user->save();
                if($res == true)
                {
                    $res = [
                        "status" => "success",
                        "info" => "更新完成"
                    ];
                    return json($res);
                }
            }

        }
        $data = UserModel::where('id',Session::get('loginUserId'))->find();
        $this->assign('data', $data);
        return $this->fetch();
    }

    public function menu1()
    {
        return $this->fetch();
    }

    public function menuAdd()
    {
        return $this->fetch();
    }

    public function menu2()
    {
        return $this->fetch();
    }

    public function menuAdd2()
    {
        return $this->fetch();
    }

    public function articleList()
    {
        return $this->fetch();
    }

    public function articleAdd()
    {
        return $this->fetch();
    }

    public function articleDetail()
    {
        return $this->fetch();
    }

    public function articleInfo()
    {
        return $this->fetch();
    }

    public function danyeList()
    {
        return $this->fetch();
    }

    public function danyeDetail()
    {
        return $this->fetch();
    }

    public function columnDanyeDetail()
    {
        return $this->fetch();
    }

    public function system()
    {
        if($this->request->isPost())
        // if(true)
        {
            // 获取POST提交过来的全部数据，并trim过滤
            // $datao = (array)json_decode('{"webname":"科技有限公司","domain":"layblog.blog","email":"521@qq.com","static":"0","ICP":"","copyright":"保温公司 copyRight © 2016","statistic":""}');
            // halt($datao);
            $data = input('post.','trim');
            // halt($data);
            if(!empty($data))
            {
                $result = $this->Validate($data,'System.Edit');
                if($result !== true)   //验证失败返回json
                {
                    $res = [
                        "status" => "fail",
                        "info" => $result
                    ];
                    return json($res);
                }
                //验证成功,保存数据
                $sys_info = SystemModel::all();
                foreach($sys_info as $k=>$v){
                    foreach($data as $ks=>$vs){
                        // $sys_id = $k;
                        if($v['name'] == $ks){
                            if(!empty($vs)){
                                // $list = [['id'=>$k+1],['name'=>$v['content']],['content'=>$vs]];  //本人不会批量保存数据
                                $sys = SystemModel::get($k+1);
                                $sys->content = $vs;
                                $sys->save();
                            }
                        }
                        // else{
                        //     $list = [['id'=>$k+1],['name'=>$v['content']],['content'=>$vs]];
                        // }
                    }
                }
                // $sys = new SystemModel();
                // $res = $sys->saveAll($list);

                // if($res == true)
                // {
                    $res = [
                        "status" => "success",
                        "info" => "更新完成"
                    ];
                    return json($res);
                // }
            }else{
                $result = $this->Validate($data,'User.ChangePw');
                if($result == false){
                    $res = [
                        "status" => "fail",
                        "info" => $result
                    ];
                    return json($res);
                }
                $sys_info_id = Session::get('loginUserId');
                $sys_info = UserModel::get($sys_info_id);
                $sys_info-> password = password_hash($data['password'], PASSWORD_BCRYPT);
                $res = $sys_info->save();
                if($res == true)
                {
                    $res = [
                        "status" => "success",
                        "info" => "更新完成"
                    ];
                    return json($res);
                }
            }

        }
        $datas = SystemModel::all();
        // dump($datas);
        foreach($datas as $k=>$v){
            $data[$v['name']] = $v['content'];
        }
        // halt($data);
        $this->assign('data', $data);
        return $this->fetch();
    }

}