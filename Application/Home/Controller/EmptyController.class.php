<?php
/**
 * Created by PhpStorm.
 * User: QinHsiu
 * Date: 2020/5/3
 * Time: 16:09
 */
namespace Home\Controller;
//引入父类控制器
use Think\Controller;
//声明类并且继承父类
class EmptyController extends Controller{

    public function _empty(){
        $this -> display('Empty/error');
    }
}