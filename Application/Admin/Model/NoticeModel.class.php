<?php
/**
 * Created by PhpStorm.
 * User: QinHsiu
 * Date: 2020/5/7
 * Time: 20:44
 */
namespace Admin\Model;
use Think\Model;
class NoticeModel extends Model{
    public function saveData($post,$file){
        if(!$file['error']){
            //定义配置
            $cfg = array(
                //配置上传路径
                'rootPath'	=>	WORKING_PATH . UPLOAD_ROOT_PATH
            );
            //处理上传
            $upload = new \Think\Upload($cfg);
            //开始上传
            $info = $upload -> uploadOne($file);
            //dump($upload -> getError());die;
            //dump($info);die;
            //判断是否上传成功
            if($info){
                //补全剩余的三个字段
                $post['filepath'] = UPLOAD_ROOT_PATH . $info['savepath'] . $info['savename'];
                $post['filename'] = $info['name'];//文件的原始名
                $post['hasfile'] = 1;
            }else{
                //A方法实例化控制器
                A('Doc') -> error($upload -> getError());exit;
            }
        }
        $post['author']=session('username');
        $post['addtime'] =date('Y-m-d');
        //添加操作
        return $this -> add($post);
    }

    //更新数据保存
    public function updateData($post,$file){
        //如果有文件则处理文件
        if($file['error'] == '0'){
            //有文件
            //配置数组
            $cfg = array('rootPath' => WORKING_PATH . UPLOAD_ROOT_PATH);
            //实例化上传类
            $upload = new \Think\Upload($cfg);
            //上传
            $info = $upload -> uploadOne($file);
            //dump($info);die;
            //判断上传结果
            if($info){
                //成功
                $post['filepath'] = UPLOAD_ROOT_PATH . $info['savepath'] . $info['savename'];
                $post['filename'] = $info['name'];
                $post['hasfile'] = 1;
            }
        }
        //dump($post);die;
        //写入数据
        return $this -> save($post);
    }
}