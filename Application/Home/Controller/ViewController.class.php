<?php
/**
 * Created by PhpStorm.
 * User: QinHsiu
 * Date: 2020/3/29
 * Time: 19:39
 * Content: the information about remark
 */
namespace Home\Controller;
use Think\Controller;
class ViewController extends Controller
{
    public function index()
    {
        $this->display();
    }

    public function service()
    {
        if (IS_POST) {
            //实例化自定义模型
            $model = M('View');
            //数据保存方法
            $username = session("username");
            $data = $model->create();
            $data['addtime'] = date('Y-m-d');
            $data['author'] = $username;
            $data['title'] = "意见反馈";
            //判断结果
            if ($data['content']!=NULL) {
                //成功
                $result = $model->add($data);
                if($result){
                $this->success('发布成功！', U('index'), 3);
            } else {
                //失败
                $this->error('发布失败！');
            }
        }
        } else {
        $count = M('Notice')->count();
        $page = new \Think\Page($count, 30);
        $page->rollPage = 5;
        $page->lastSuffix = false;
        $page->setConfig('prev', '上一页');
        $page->setConfig('next', '下一页');
        $page->setConfig('last', '末页');
        $page->setConfig('first', '首页');
        //分页第四步：使用show方法生成url
        $show = $page->show();
        //分页第五步：展示数据
        $data = M('Notice')->limit($page->firstRow, $page->listRows)->select();
        //传递给模版
        //$this->assign('role_id',$role_id);
        //$this->assign('username',$username);
        $this->assign('data', $data);
        $this->assign('count', $count);
        $this->assign('show', $show);
        //展示模版
        $this->display();
    }
    }

    public function view()
    {
        if (IS_POST) {
            //实例化自定义模型
            $model = D('View');
            //数据保存方法
            $username = session("username");
            $result = $model->create();
            $result['addtime'] = date('Y-m-d');
            $result['author'] = $username;
            $result['title'] = "意见反馈";
            //判断结果
            if ($result) {
                //成功
                $this->success('发布成功！', U('index'), 3);
            } else {
                //失败
                $this->error('发布失败！');
            }
        } else {
            //展示模版
            $this->display();
        }
    }
}