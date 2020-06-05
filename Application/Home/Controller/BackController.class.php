<?php
/**
 * Created by PhpStorm.
 * User: QinHsiu
 * Date: 2020/3/29
 * Time: 19:40
 * Content:regulate the information about come back to bedroom
 */
namespace Home\Controller;
use Admin\Controller\CommonController;
use Think\Controller;
class BackController extends CommonController{
    public function index(){
        if(IS_POST){
            $model = M('Student');
            $username=session("username");
            if($_REQUEST["tel"]!=NULL && $_REQUEST["email"]!=NULL &&$_REQUEST["password"]!=NULL) {
                $data['tel'] = $_REQUEST["tel"];
                $data['email']=$_REQUEST["email"];
                $data['password']=$_REQUEST["password"];
                ///保存操作
                $result = $model->create($data);
            //$result = $model -> save($post);
            //判断结果成功与否
            if($result !== false) {
                $Model = $model->where(array("username" => $username))->save($data);
                //修改成功
                $this->success('修改成功', U('index'), 3);
            } else{
                //修改失败
                $this -> error('修改失败');
            }
            }
        }else{

            //发件箱信息传递
            //查询当前用户已经发送的邮件
            //select t1.*,t2.truename as truename from sp_email as t1 left join sp_user as t2 on t1.to_id = t2.id where t1.from_id = 当前用户的id;
            $count1=M('Email')->count();
            $page1 = new \Think\Page($count1,10);	//每页显示1个
            //分页第三步：可选步骤，定义提示文字
            $page1 -> rollPage = 5;
            $page1 -> lastSuffix = false;
            $page1 -> setConfig('prev','上一页');
            $page1 -> setConfig('next','下一页');
            $page1 -> setConfig('last','末页');
            $page1 -> setConfig('first','首页');
            //分页第四步：使用show方法生成url
            $show1 = $page1 -> show();
            $data1 = M("Email") -> field('t1.*,t2.truename as truename') -> alias('t1') -> join('left join oc_admin as t2 on t1.to_id = t2.id') -> where('t1.from_id = ' . session('id')) -> select();
            //将数据传递给模版
            $this -> assign('data1',$data1);
            $this->assign('show1',$show1);
            $this->assign('count1',$count1);

            //收件箱信息传递
            $count2=M('Email')->count();
            $page2 = new \Think\Page($count2,30);	//每页显示1个
            //分页第三步：可选步骤，定义提示文字
            $page2 -> rollPage = 5;
            $page2 -> lastSuffix = false;
            $page2 -> setConfig('prev','上一页');
            $page2 -> setConfig('next','下一页');
            $page2 -> setConfig('last','末页');
            $page2 -> setConfig('first','首页');
            //分页第四步：使用show方法生成url
            $show2 = $page2 -> show();
            //获取数据
            $data2 = M('Email') -> field('t1.*,t2.truename as truename') -> alias('t1') -> join('left join oc_student as t2 on t1.from_id = t2.id') -> where('t1.to_id = ' . session('id')) -> select();
            //传递数据给模版
            $this -> assign('data2',$data2);
            $this->assign('count2',$count2);
            $this->assign('show2',$show2);


            $id = session('id');
            $data = M('Student')->find($id);
            if ($data) {
                session('username', $data['username']);
                session('truename', $data['truename']);
                session('card_id', $data['card_id']);
                session('credit', $data['credit']);
                session('password', $data['password']);
                session('college_id', $data['college_id']);
                session('sex', $data['sex']);
                session('email', $data['email']);
                session('birthday', $data['birthday']);
                session('tel', $data['tel']);
                $this->display();
            }
            else{
                $this->error('查询失败！');
            }
        }
    }




    public function sendEmail(){
        //判断请求类型
        if(IS_POST){
            //处理数据
            //接收数据
            $post = I('post.');
            //实例化自定义模型
            $model = D('Email');
            //调用具体类中方法实现数据的保存
            $result = $model -> addData($post,$_FILES['file']);
            //判断结果
            if($result){
                //成功
                $this -> success('邮件发送成功！',U('index'),3);
            }else{
                //失败
                $this -> error('邮件发送失败！');
            }
        }else{
            //展示模版
            //查询收件人信息
            $data = M('Admin') -> field('id,truename')->where("id != " . session('id')) ->select();
            //传递数据给模版文件
            $this -> assign('data',$data);
            //展示模版
            $this -> display();
        }
    }

    //download
    public function download(){
        //接收id
        $id = I('get.id');
        //查询信息
        $data = M('Email') -> find($id);
        //下载代码
        $file = WORKING_PATH . $data['file'];
        header("Content-type: application/octet-stream");
        header('Content-Disposition: attachment; filename="' . basename($file) . '"');
        header("Content-Length: ". filesize($file));
        readfile($file);
    }

    //空操作方法
    public function _empty(){
        //输出
        $this -> display('Empty/error');
    }

    //收件箱信息
    public function getContent(){
        //获取id
        $id = I('get.id');
        //查询数据
        $data = M('Email') -> where("id = $id and to_id = " . session('id')) -> find();
        //如果data为真则修改邮件的状态
        if($data['isread'] == '0'){
            //修改状态
            M('Email') -> save(array('id' => $id,'isread' => 1));
        }
        //echo $data['content'];
    }

    //发件箱信息
    public function getCount(){
        if(IS_AJAX){
            //实例化模型
            $model = M('Email');
            //查询当前用户未读邮件的数量
            $count = $model -> where("isread = 0 and to_id = " . session('id')) -> count();
            //输出数字
            echo $count;
        }
    }


    public function del(){
        //接收参数
        $id = I('get.id');
        //模型实例化
        $model = M('Email');
        //删除
        $result = $model -> delete($id);
        //判断结果
        if($result){
            //删除成功
            $this -> success('删除成功！');
        }else{
            //删除失败
            $this -> error('删除失败！');
        }
    }


    public function edit(){
        $this->display();
    }
}