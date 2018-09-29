<?php
/**
 * Created by PhpStorm.
 * User: JustThinkIt
 * Date: 2018/9/26
 * Time: 21:25
 */
namespace app\admin\controller;
use think\Controller;
use think\facade\Session;
use app\common\model\User as UserModel;

class User extends Controller
{
    public function login()
    {
        if($this->request->isPost())
        {
            // 获取POST提交过来的全部数据，并trim过滤
            $data = input('post.','trim');
            $result = $this->Validate($data,'User.login');
            if($result !== true)   //验证失败返回json
            {
                $res = [
                    "status" => "fail",
                    "info" => $result
                ];
                return json($res);
            }
            //验证通过对比帐号密码
            $login = new UserModel();
            $res = $login->checkLogin($data['username'], $data['password']);

            if($res['status'] == 'success')
            {
                Session::set('loginUsername', $data['username']);
                Session::set('loginUserId' , $res['id']);

            }
            return json($res);
        }
        //未登录使用登录页面
        return $this->fetch();
    }

    public function logout()
    {
        Session::clear();
        $data = ['code'=> '0',
                'message'=> '退出成功',
                'data'=>null];
        return json($data);
    }

    public function reg()
    {
        if($this->request->isPost())
        {
            // 获取POST提交过来的全部数据，并trim过滤
            $data = input('post.','trim');
            $result = $this->Validate($data,'User.reg');
            if($result !== true)   //验证失败返回json
            {
                $res = [
                    "status" => "fail",
                    "info" => $result
                ];
                return json($res);
            }
            //验证通过对比帐号密码
            $user = new UserModel();
            $data['password'] = password_hash($data['password'], PASSWORD_BCRYPT);
            $data['nickname'] = $data['username'];
            $res = $user->allowField(true)->save($data);
            if($res === true)
            {
                Session::set('loginUsername', $data['username']);
                Session::set('loginUserId' , $user->id);
            }
            $result = ['status' => "success", 'info'=>"注册成功,请稍后"];
            return json($result);
        }
        //未POST时使用注册页面
        return $this->fetch();
    }

    public function forget()
    {
        if($this->request->isPost())
        {
            // 获取POST提交过来的全部数据，并trim过滤
            $data = input('post.','trim');
            // halt($data);
            $result = $this->Validate($data,'User.forget');
            // halt($data);
            if($result !== true)   //验证失败返回json
            {
                $res = [
                    "status" => "fail",
                    "info" => $result
                ];
                return json($res);
            }
            //验证通过对比帐号密码
            $login = new UserModel();
            $res = $login->checkLogin($data['username'], $data['password']);

            if($res['status'] == 'success')
            {
                Session::set('loginUser', $data['username']);
                Session::set('loginUserId' , $res['id']);
            }
            return json($res);
        }
        $data = 'forget';
        $this->assign('status', $data);
        return $this->fetch();
    }
}