<?php
/**
 * Created by PhpStorm.
 * User: JustThinkIt
 * Date: 2018/8/15
 * Time: 23:01
 */

namespace app\home\controller;
use app\common\model\User as UserModel;
use app\common\model\Post as PostModel;
use think\Db;
use think\facade\Session;

/*
 * 前台用户
 * class User
 */
class User extends Common
{
    protected function initialize()
    {
        parent::initialize();
        $this->user_model = new UserModel();
        $this->post_model = new PostModel();
    }

    /**
     * 用户中心
     */
    public function index()
    {
        $id = Session::get('user_id');
        // halt($id);
        $post_model = $this->post_model;
        $user_post = $post_model
            ->where('uid', $id)
            ->field('uid,pid,title,update_time,click_count,reply_count')
            ->limit(20)->order('update_time desc')
            ->select();
        $this->assign('user_post', $user_post);
        $title = "用户中心";
        $this->assign('title',$title);
        $this->assign('action', 'index'); //sidebar验证
        return $this->fetch();
    }

    /**
     * 用户注册
     */
    public function register()
    {
        if ($this->request->isPost()) {
            $data            = $this->request->post();
            $validate_result = $this->validate($data, 'User.Register');

            if ($validate_result !== true) {
                $this->error($validate_result);
            } else {
                $data['password'] = password_hash($data['password'], PASSWORD_BCRYPT);

                if ($this->user_model->allowField(true)->save($data))
                {

                    $this->success('登录成功','index/index');
                } else {
                    $this->error('用户名或密码错误');
                }
            }
        } else {
            $this->assign('title', '新用户注册');
            return $this->fetch();
        }
    }

    /**
     * 用户登录
     * @return mixed
     * @throws \think\Exception
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     * @throws \think\exception\PDOException
     */
    public function login()
    {
        if ($this->request->isPost()) {
            $data            = $this->request->only(['username', 'password', 'verify']);

            $validate_result = $this->validate($data, 'User.login');

            if ($validate_result !== true) {
                $this->error($validate_result);
            } else {
                $where['username'] = $data['username'];
                $user = Db::name('user')->field('uid,level,username,password,avatar,status')->where($where)->find();
                if (password_verify($data['password'], $user['password'])) {
                    if ($user['status'] != 1) {
                        $this->error('当前用户已禁用');
                    } else {
                        Session::set('user_id', $user['uid']);
                        Session::set('level', $user['level']);
                        // Session::set('group_name',get_group_name($user['group_id']));
                        Session::set('user_name', $user['username']);
                        Session::set('avatar', $user['avatar'].'_small.png');
                        Db::name('user')->update(
                            [
                                'last_login_time' => time(),
                                'last_login_ip'   => $this->request->ip(1),
                                'uid'              => $user['uid']
                            ]
                        );
                        $this->success('登录成功','index/index');
                    }
                } else {
                    $this->error('用户名或密码错误');
                }
            }
        } else {
            $this->assign('title', '用户登录');
            return $this->fetch();
        }
    }

    /**
     * 用户退出
     */
    public function logout()
    {
        Session::delete('user_id');
        Session::delete('level');
        // Session::delete('group_name');
        Session::delete('user_name');
        Session::delete('avatar');
        $this->success('退出成功','user/login');
    }

    /**
     * 用户主页
     */
    public function home()
    {

    }

    /**
     * 用户信息修改
     */
    public function set()
    {

    }

    /**
     * 用户更新
     */
    public function update()
    {

    }

}