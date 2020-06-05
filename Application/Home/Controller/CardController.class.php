<?php
/**
 * Created by PhpStorm.
 * User: QinHsiu
 * Date: 2020/3/29
 * Time: 19:37
 * Content: regulate the information about card
 */
namespace Home\Controller;
use Org\Util\String;
use Think\Controller;
class CardController extends Controller{
    public function index(){
        $this->display();
    }

    public function cost(){
        if(IS_POST) {
            $model = D('Card');
            $data = $model->create();
            $id=$data['card_id'];
           //$sql='select* from TABLE oc_card WHERE card_id=='+'20';
            if ($data['card_id']!=NULL) {
                $data['addtime']=date('Y-m-d');
                $result = $model->add($data);
                //判断结果
                if ($result) {
                    //成功
                    //$this->success($model->query($sql), U('showAdd'), 3);
                    $this->success("缴纳成功", U('showAdd'), 3);

                } else {
                    //失败
                    $this->error('缴纳失败！', U('ad'), 3);
                }
            }
        } else {
            //展示模版
            $this->display();
        }

    }

    public function ad(){
        if(IS_POST) {
            $model = D('Card');
            $data = $model->create();
            if ($data['card_id'] != NULL) {
                //$data['addtime']='2017-09-06';
                $data['addtime']=date('Y-m-d');
                $result = $model->add($data);
                //判断结果
                if ($result) {
                    //成功
                    $this->success('充值成功', U('showAdd'), 3);
                } else {
                    //失败
                    $this->error('充值失败！', U('ad'), 3);
                }
            }
        } else {
                //展示模版
                $this->display();
            }

    }

    public function showCost(){

    }
    public function showAdd(){

    }

}