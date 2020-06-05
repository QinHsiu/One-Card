<?php
/**
 * Created by PhpStorm.
 * User: QinHsiu
 * Date: 2020/3/29
 * Time: 19:40
 * Content: regulate the act students about the borrow
 */
namespace Home\Controller;
use Think\Controller;
class BorrowController extends Controller{
    public function index(){
        $username=session('username');
        $count=M('Borrow')->count;
        //$date=M('Borrow')->find($username);
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
        $data = M('Borrow')->limit($page->firstRow, $page->listRows)->select();
        $this->assign('data', $data);
        $this->assign('count', $count);
        $this->assign('show', $show);
        //$this->assign('book_id',$data['book_id']);
        $this->assign('username',$username);
        //$this->assign('addtime',$data['addtime']);
        //$surtime=$date['booktime']-($data['addtime']-date('Y-m-d'));
        //$this->assign('surtime',$surtime);
        $this->display();
    }

    public function borrow(){
        if(IS_POST) {
            $id=session('id');
            $user=M('Student')->find($id);
            $credit=$user['credit'];
            if($credit<1){
                $this->error('你有不诚信记录，不能借阅，请联系管理员修正！');
            }else{
                $model=M('Borrow');
                $username=session('username');
                $data=$model->create();
                $data['username']=$username;
                $data['addtime']=date('Y-m-d');
                if($data['card_id']!=NULL && $data['book_id']!=null){
                    $result=$model->add($data);
                    if($result){
                        $this->success("借阅成功",U('index'),3);
                    }else{
                        $this->error("借阅失败！");
                    }
                }
            }
        }else{
            $this->display();
        }
    }

}