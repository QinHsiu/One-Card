<?php
/**
 * Created by PhpStorm.
 * User: QinHsiu
 * Date: 2020/3/29
 * Time: 19:34
 * Content:regulate the information about come back to bedroom
 */
namespace Admin\Controller;
//引入父类
use Think\Controller;
//个人信息管理类

class BackController extends Controller{
    public function index(){
        $id = session('id');
        $data = M('Admin')->find($id);
        $role_id = session('role_id');
        if ($data) {
            session('username', $data['username']);
            session('truename', $data['truename']);
            session('password', $data['password']);
            session('nickname', $data['nickname']);
            session('sex', $data['sex']);
            session('email', $data['email']);
            session('birthday', $data['birthday']);
            session('tel', $data['tel']);
            session('addtime', $data['addtime']);
            $this->assign('role_id',$role_id);
            $this->display();
        }
        else{
            $role_id=session('role_id');
            $this->assign('role_id',$role_id);
            $this->error('查询失败！');
        }
    }

    public function edit(){
        if(IS_POST){
            $model = M('Admin');
            $username=session("username");
            $data['password']=$_REQUEST["password"];
            $data['email']=$_REQUEST["email"];
            $data['tel']=$_REQUEST["tel"];
            ///保存操作
            $result=$model->create($data);
            //$result = $model -> save($post);
            //判断结果成功与否
            if($result !== false){
                $Model = $model->where(array("username"=>$username))->save($data);
                //修改成功
                $this -> success('修改成功',U('Index/index'),3);
            }else{
                //修改失败
                $this -> error('修改失败');
            }
        }else{
            $id = I('get.id');
            $role_id=session('role_id');
            $this->assign('role_id',$role_id);
            //实例化模型
            $model = M('Admin');
            $data = $model -> find($id);
            //变量分配
            $this -> assign('data',$data);

            $this->display();
        }
    }
}

