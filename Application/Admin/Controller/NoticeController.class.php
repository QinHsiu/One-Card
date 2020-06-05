<?php
/**
 * Created by PhpStorm.
 * User: QinHsiu
 * Date: 2020/3/29
 * Time: 19:36
 * Content: the information about notice
 */
namespace Admin\Controller;
//引入父类
use Think\Controller;
//通知发布类
class NoticeController extends Controller{

    public function deliver(){
        //请求类型判断
        if(IS_POST){
            //数据保存方法
            $post = I('post.');
            //实例化模型
            $model = D('Notice');
            //数据保存
            if($post['content']==NULL){
                $this->error('内容不能为空！');
            }else{
            $result = $model -> saveData($post,$_FILES['file']);
            //判断结果
            if($result){
                //成功
                $this -> success('发布成功！',U('View/service'),3);
            }else{
                //失败
                $this -> error('发布失败！');
            }
        }}else{
            $role_id=session('role_id');
            $this->assign('role_id',$role_id);
            //展示模版
            $this -> display();
        }
    }



}