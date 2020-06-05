<?php
/**
 * Created by PhpStorm.
 * User: QinHsiu
 * Date: 2020/3/29
 * Time: 19:33
 * Content: regulate the act students about the borrow
 */
namespace Admin\Controller;
//引入父类
use Think\Controller;
//图书借阅管理类
class BorrowController extends Controller{
    public function index(){
        $role_id=session('role_id');
        $this->assign('role_id',$role_id);
        $count=M('Borrow')->count();
        $page=new \Think\Page($count,30);
        $page -> rollPage = 5;
        $page -> lastSuffix = false;
        $page -> setConfig('prev','上一页');
        $page -> setConfig('next','下一页');
        $page -> setConfig('last','末页');
        $page -> setConfig('first','首页');
        //分页第四步：使用show方法生成url
        $show = $page -> show();
        //分页第五步：展示数据
        $data = M('Borrow') -> limit($page -> firstRow,$page -> listRows) -> select();
        //传递给模版
        $this->assign('username',$username);
        $this -> assign('data',$data);
        $this->assign('count',$count);
        $this->assign('show',$show);

        $this->display();
    }

    //添加黑名单
    public function add(){
        $role_id=session('role_id');
        $this->assign('role_id',$role_id);
        //修改信用属性
        $model=M('Student');
        $data['credit']=0;
        $result=$model->create($data);
        //判断结果
        if($result !=false){
            //修改成功
            $this -> success('添加黑名单成功！',U('index'),'3');
        }else{
            //修改失败
            $this -> error('添加失败！');
        }
    }

}