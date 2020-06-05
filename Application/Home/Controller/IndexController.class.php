<?php
/**
 * Created by PhpStorm.
 * User: QinHsiu
 * Date: 2020/3/29
 * Time: 19:36
 * Content: controller the view about index
 */
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->display();
    }
    public function service(){
        $this->display();
    }
    public function news(){
        $this->display();
    }
    public function aboutUs(){
        $this->display();
    }
    public function recruit(){
        $this->display();
    }

    //登录成功之后的视图
    public function index1(){
        $this->display();
    }

}