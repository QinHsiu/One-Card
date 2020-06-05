<?php
/**
 * Created by PhpStorm.
 * User: QinHsiu
 * Date: 2020/4/30
 * Time: 20:53
 */
namespace Admin\Controller;
//引入父类
use Think\Controller;
//用户控制类
class UserController extends CommonController
{

    //添加学生账户
    public function addS()
    {
        if (IS_POST) {
            //处理表单提交
            $model = M('Student');
            //创建数据对象
            $data = $model->create();
            //添加时间字段
            $data['addtime'] = date('Y-m-d');
            //保存数据表
            //判断是否保存成功
            //成功
            if ($data['username'] != NULL && $data['password'] != NULL && $data['sex'] != NULL && $data['birthday']
                    != NULL && $data['tel'] != NULL && $data['email'] != NULL && $data['card_id'] != NULL&& $data['credit'] != NULL)
                {
                    $result = $model->add($data);
                    if ($result){
                    $this->success('添加成功！', U('Index/index'), 3);
            } else {
                //失败
                $this->error('添加失败！');
            }}else{
                    $this->error('信息不完整！添加失败！',U('addS'),3);
                }

            }
        else {
            $role_id=session('role_id');
            $this->assign('role_id',$role_id);
            $this->display();
        }
    }
    //查看学生列表
    public function showS(){
        $role_id=session('role_id');
        $this->assign('role_id',$role_id);
        $model=M('Student');
        $count=$model->count();
        $page = new \Think\Page($count,9);	//每页显示1个
        //分页第三步：可选步骤，定义提示文字
        $page -> rollPage = 5;
        $page -> lastSuffix = false;
        $page -> setConfig('prev','上一页');
        $page -> setConfig('next','下一页');
        $page -> setConfig('last','末页');
        $page -> setConfig('first','首页');
        //分页第四步：使用show方法生成url
        $show = $page -> show();
        //分页第五步：展示数据
        $data = $model -> limit($page -> firstRow,$page -> listRows) -> select();
        //分页第六步：传递给模版
        $this->assign('page',$page);
        $this -> assign('data',$data);
        $this -> assign('show',$show);
        $this -> assign('count',$count);
        //分页第七步：展示模版
        $this -> display();
    }


    //查看管理员列表
    public function showA(){
        $role_id=session('role_id');
        $this->assign('role_id',$role_id);
        $model=M('Admin');
        $count=$model->count();
        $page = new \Think\Page($count,9);	//每页显示1个
        //分页第三步：可选步骤，定义提示文字
        $page -> rollPage = 5;
        $page -> lastSuffix = false;
        $page -> setConfig('prev','上一页');
        $page -> setConfig('next','下一页');
        $page -> setConfig('last','末页');
        $page -> setConfig('first','首页');
        //分页第四步：使用show方法生成url
        $show = $page -> show();
        //分页第五步：展示数据
        $data = $model -> limit($page -> firstRow,$page -> listRows) -> select();
        //分页第六步：传递给模版
        $this->assign('page',$page);
        $this -> assign('data',$data);
        $this -> assign('show',$show);
        $this -> assign('count',$count);
        //分页第七步：展示模版
        $this -> display();
    }

    //添加管理员
    public function addA()
    {
        if (IS_POST) {
            //处理表单提交
            $model = M('Admin');
            //创建数据对象
            $data = $model->create();
            //添加时间字段
            $data['addtime'] = date('Y-m-d');
            //保存数据表

            if ($data['username'] != NULL && $data['password'] != NULL && $data['sex'] != NULL && $data['birthday'] != NULL && $data['tel'] != NULL && $data['email'] != NULL) {
                $result = $model->add($data);
                //判断是否保存成功
            if ($result) {
                    //成功
                    $this->success('添加成功！', U('Index/index'), 3);
                } else {
                    //失败
                    $this->error('添加失败！');
                }

            }else {
                //失败
                $this->error('信息不完整！添加失败！');
            }
        }else {
            $role_id=session('role_id');
            $this->assign('role_id',$role_id);
                //查询部门信息
                // $data = M('Dept') -> field('id,name') -> select();
                //分配到模版
                //$this -> assign('data',$data);
                //展示模版
                $this->display();
            }
    }
}