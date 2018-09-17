<?php
/**
 * Created by PhpStorm.
 * User: JustThinkIt
 * Date: 2018/9/13
 * Time: 10:11
 */
namespace app\admin\controller;
use think\Controller;
use think\facade\Session;
use app\common\model\User as UserModel;

class Login extends Controller
{
    public function index()
    {
        // 已登录用户使用session登录
        if(Session::get('loginUser') && Session::get('loginUserId'))
        {
            return $this->redirect('admin/index/index');
        }

        if($this->request->isPost())
        {
            // 获取POST提交过来的全部数据，并trim过滤
            $data = input('post.','trim');
            // halt($data);
            $result = $this->Validate($data,'Login');
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
            // halt($res);
            // return json_encode($res);
            return json($res);
        }
        //未登录使用登录页面
        return $this->fetch();
    }
}