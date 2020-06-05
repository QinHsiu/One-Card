<?php
/**
 * Created by PhpStorm.
 * User: QinHsiu
 * Date: 2020/3/29
 * Time: 19:28
 * Content: controller the view about index
 */
//声明命名空间
namespace Admin\Controller;
use Think\Controller;
class IndexController extends CommonController{
    //index方法
    public function index(){
        //session('role_id',session('role_id'));
        $role_id=session('role_id');
        $this->assign('role_id',$role_id);
        //展示模版
        $this -> display();
    }


}