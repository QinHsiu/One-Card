<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>首页</title>
    <link rel="stylesheet" href="/Card-system/Public/Home/css/bootstrap.css"/>
    <link rel="stylesheet" href="/Card-system/Public/Home/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="/Card-system/Public/Home/css/Style.css"/>
</head>
<body>

<header class="header">
    <nav class="navbar navbar-default" role="navigation" style="background: white;height: 80px;">
        <div class="container-fluid">
            <div class="navbar-header">
                <div class="container">
                    <div class="raw">
                        <div class="col-md-4 col-sm-4">
                            <img class="logo" src="/Card-system/Public/Home/images/one_card2.jpg">
                            <font class="word" color="#46b8da">校园一卡通</font>
                            <button type="button" style="margin-top:20px; " class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-collapse">
                                <span class="sr-only">切换导航</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="col-md-8 col-sm-8">
                            <div class="collapse navbar-collapse" id="example-navbar-collapse">
                                <ul class="nav navbar-nav navbar-right" style="margin-top: 20px;">
                                    <li class="ti"><a href="<?php echo U('Index/index');?>">首页</a></li><!--li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li-->
                                    <li class="ti"><a href="<?php echo U('View/service1');?>">管理中心</a></li>
                                    <li class="ti"><a href="<?php echo U('Back/index');?>">个人信息</a></li>
                                    <li class="ti"><a href="<?php echo U('Public/logout');?>">退出登录</a></li>
                                </ul>
                            </div>
                        </div>
                        <font style="margin-top: 5px;position: absolute; ">欢迎您超级管理员！<?php echo (session('username')); ?></font>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
<!--职员管理-->
<section id="1">
    <hr style="margin: 0 0 0 0; height: 1px; width: auto;background: #46b8da;"/>
    <div style="margin-top: 80px;"><h3 style="color: #46b8da;margin-left: 40%">职员信息管理</h3></div>
    <div class="container">
        <div class="raw">
            <div class="col-md-12">
                <a href="<?php echo U('User/addA');?>" class="add" style="color: #46b8da;margin-left: 15%;">添加</a>
                <button  class="edit" style="color: #46b8da; margin-left: 15%;">编辑</button>
                <button class="del" style="color:#46b8da; margin-left: 15%;">删除</button>
                <button  class="chart" style="color:#46b8da; margin-left: 15%;">统计</button>
            </div>
        </div>
    </div>
    <table>
        <thead>
        <tr>
            <th class="id">序号</th>
            <th class="username">用户名</th>
            <th class="truename">真实姓名</th>
            <th class="sex">性别</th>
            <th class="birthday">生日</th>
            <th class="tel">电话</th>
            <th class="email">邮箱</th>
            <th class="addtime">添加时间</th>
            <th class="role_id">职称</th>
            <th class="operate">操作</th>
        </tr>
        </thead>
        <tbody>
            <tr id="vol">
                <td class="id"><?php echo ($vol["id"]); ?></td>
                <td class="username"><?php echo ($vol["username"]); ?></td>
                <td class="truename"><?php echo ($vol["truename"]); ?></td>
                <td class="sex"><?php echo ($vol["sex"]); ?></td>
                <td class="birthday"><?php echo ($vol["birthday"]); ?></td>
                <td class="tel"><?php echo ($vol["tel"]); ?></td>
                <td class="email"><?php echo ($vol["email"]); ?></td>
                <td class="addtime"><?php echo ($vol["addtime"]); ?></td>
                <td class="role_id"><?php echo ($vol["role_id"]); ?></td>
                <td class="operate">
                    <input type="checkbox" value="<?php echo ($vol["id"]); ?>" placeholder=""/>
                    <a href="<?php echo U('User/showA');?>" class="show" data-title="<?php echo ($vol["username"]); ?>">查看</a>
                </td>
            </tr>
        </tbody>
    </table>
</section>

<!--系统管理-->
<section id="2">
    <hr style="margin: 0 0 0 0; height: 1px; width: auto;background: #46b8da;"/>
    <div></div>
</section>

<footer class="footer">
    <hr style="margin: 0 0 0 0; height: 1px; width: auto;background: #46b8da;"/>
    <div class="container">
        <div class="raw">
            <br/><br/>
            <div class="col-md-5 col-xs-5" style="height: auto;">
                <div><font style="font-size:20px; color: white;">Content Us</font></div>
                <p></p>
                <p>地址:重庆市沙坪坝区大学城</p>
                <p>电话:123456789</p>
                <p>传真:(123)456-789</p>
                <p>邮箱:QinHsiu@qq.com</p>
            </div>
            <div class="col-md-2 col-xs-2"></div>
            <div class="col-md-5 col-xs-5">
                <div ><font style="font-size:20px; color: white;">Other Links</font></div>
                <p></p>
                <p style="line-height: 20px;"><a href="<?php echo U('Index/index');?>">首页</a>
                    <a style="margin-left: 20px;" href="<?php echo U('View/service1');?>">管理中心</a></p>
                <p></p>
                <p><a href="<?php echo U('Back/index');?>">个人信息</a>
                    <a style="margin-left: 20px;"  href="<?php echo U('Public/logout');?>">退出登录</a></p>
            </div>
        </div>
    </div>
</footer>
</body>
<script src="https://cdn.staticfile.org/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.staticfile.org/popper.js/1.15.0/umd/popper.min.js"></script>
<script src="https://cdn.staticfile.org/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script type="text/javascript">
    $(function(){
        //给删除按钮绑定点击事件
        $('.del').on('click',function(){
            //事件处理程序
            var idObj = $(':checkbox:checked');	//获取全部已经被选中的checkbox
            var id = '';	//接收处理后的部门id值，组成id1,id2,id3...
            //循环遍历idObj对象，获取其中的每一个值
            for (var i = 0; i < idObj.length; i++) {
                id += idObj[i].value + ',';
                //alert(idObj[i].value('role_id'));
            }
            //去掉最后逗号
            id = id.substring(0,id.length - 1);
            //判断id
            if(id==''){
                return false;
            }
            //带着参数跳转到del方法
            window.location.href = '/Card-system/Admin/View/del/id/' + id;
        });
    });
    $(function(){
        //给查看按钮绑定点击事件
        $('.show').on('click',function(){
            //获取id
            var id = $(this).attr('data');
            //获取公文标题
            var title = $(this).attr('data-title');
            layer.open({
                type: 2,
                title: title,
                shadeClose: true,
                shade: 0,   //背景透明
                area: ['560px', '90%'],
                content: '/Card-system/Admin/View/showContent/id/' + id //iframe的url
            });
        });
    });
</script>
</html>