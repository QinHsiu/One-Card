<?php
/**
 * Created by PhpStorm.
 * User: QinHsiu
 * Date: 2020/3/29
 * Time: 19:32
 * Content: the information about remark
 */
namespace Admin\Controller;
//引入父类
use Think\Controller;
//服务类（评论回复，一般服务：充值，交费，查询业务，修改密码）
class ViewController extends Controller{
   public function index(){
       $role_id=session('role_id');
       $this->assign('role_id',$role_id);
       $this->display();
   }

   //管理员服务界面
   public function service()
   {
       $role_id = session('role_id');
       if ($role_id == 0) {
           $username = session('username');
           /*通知信息*/
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
           $this->assign('username', $username);
           $this->assign('data', $data);
           $this->assign('count', $count);
           $this->assign('show', $show);

           /*评论信息*/
           $count1 = M('View')->count();
           $page1 = new \Think\Page($count1, 30);
           $page1->rollPage = 5;
           $page1->lastSuffix = false;
           $page1->setConfig('prev', '上一页');
           $page1->setConfig('next', '下一页');
           $page1->setConfig('last', '末页');
           $page1->setConfig('first', '首页');
           //分页第四步：使用show方法生成url
           $show1 = $page1->show();
           //分页第五步：展示数据
           $data1 = M('View')->limit($page->firstRow, $page->listRows)->select();
           //传递给模版
           $this->assign('data1', $data1);
           $this->assign('count1', $count1);
           $this->assign('show1', $show1);

           $this->assign('role_id', $role_id);
           $this->display();

       } else {
           $this->assign('role_id', $role_id);
           /*系统管理员*/
           $username = session('username');
           $count2 = M('Admin')->count();
           $page2 = new \Think\Page($count2, 30);
           $page2->rollPage = 5;
           $page2->lastSuffix = false;
           $page2->setConfig('prev', '上一页');
           $page2->setConfig('next', '下一页');
           $page2->setConfig('last', '末页');
           $page2->setConfig('first', '首页');
           //分页第四步：使用show方法生成url
           $show2 = $page2->show();
           //分页第五步：展示数据
           $data2 = M('Admin')->limit($page2->firstRow, $page2->listRows)->select();
           //传递给模版
           $this->assign('username', $username);
           $this->assign('data2', $data2);
           $this->assign('count2', $count2);
           $this->assign('show2', $show2);

           $this->display();
       }
   }
    //删除账号
    public function del(){
        //接收参数
        $id = I('get.id');
        //模型实例化
        $model = M('Notice');
        //删除
        $result = $model -> delete($id);
        //判断结果
        if($result){
            //删除成功
            $this -> success('删除成功！',U('service'),'3');
        }else{
            //删除失败
            $this -> error('删除失败！');
        }
    }

    public function download(){
        //接收id
        $id = I('get.id');
        //查询数据
        $data = M('Notice') -> find($id);
        //下载代码
        $file = WORKING_PATH . $data['filepath'];
        //输出文件
        header("Content-type: application/octet-stream");
        header('Content-Disposition: attachment; filename="' . basename($file) . '"');
        header("Content-Length: ". filesize($file));
        //输出缓冲区
        readfile($file);
    }

}