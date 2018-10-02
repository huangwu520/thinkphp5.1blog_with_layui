<?php
/**
 * Created by PhpStorm.
 * User: JustThinkIt
 * Date: 2018/9/29
 * Time: 17:55
 */
namespace app\admin\controller;
use app\common\model\User as UserModel;
use app\common\model\System as SystemModel;
use think\facade\Session;

class Set extends Base
{
    public function info()
    {
        $id = Session::get('loginUserId');
        if($this->request->isPost())
        {
            // 获取POST提交过来的全部数据，并trim过滤
            $data = input('post.','trim');
            $result = $this->Validate($data,'User.info');
            if($result !== true)   //验证失败返回json
            {
                $res = [
                    "status" => "fail",
                    "info" => $result
                ];
                return json($res);
            }
            //验证通过存储数据
            $user = UserModel::get($id);
            $user->nickname = $data['nickname'];
            $user->email = $data['email'];
            $user->about = $data['about'];
            $user->save();  //更新数据
            $res = ['status' => "success", "info" => "更新数据成功"];
            return json($res);
        }

        //未提交时渲染登录页面
        $user = UserModel::get($id);
        $data = $user->toArray();      //模型类转换为数组
        $this->assign('data', $data);
        return $this->fetch();
    }

    //TODO:赋值数据,页面数据完成,更改数据
    public function website()
    {
        $sys = new SystemModel();
        if($this->request->isPost())
        {
            // 获取POST提交过来的全部数据，并trim过滤
            $data = input('post.','trim');
            $result = $this->Validate($data,'User.info');
            if($result !== true)   //验证失败返回json
            {
                $res = [
                    "status" => "fail",
                    "info" => $result
                ];
                return json($res);
            }
            //验证通过存储数据
            $user = UserModel::get();
            $user->nickname = $data['nickname'];
            $user->email = $data['email'];
            $user->about = $data['about'];
            $user->save();  //更新数据
            $res = ['status' => "success", "info" => "更新数据成功"];
            return json($res);
        }

        //未提交时渲染登录页面
        $user = $sys::all();
        $data = $user->toArray();      //模型类转换为数组
        $this->assign('data', $data);
        return $this->fetch();
    }

    public function password()
    {
        $id = Session::get('loginUserId');
        if($this->request->isPost())
        {
            // 获取POST提交过来的全部数据，并trim过滤
            $data = input('post.','trim');
            $result = $this->Validate($data,'User.password');
            if($result !== true)   //验证失败返回json
            {
                $res = [
                    "status" => "fail",
                    "info" => $result
                ];
                return json($res);
            }
            //验证通过存储数据
            $user = UserModel::get($id);
            $passwd = password_hash($data['password'], PASSWORD_BCRYPT);
            $user->save([
                'password' => $passwd
            ]);  //更新数据
            $res = ['status' => "success", "info" => "变更密码成功"];
            return json($res);
        }

        //未提交时渲染登录页面
        return $this->fetch();
    }

    public function email()
    {
        return $this->fetch();
    }
}