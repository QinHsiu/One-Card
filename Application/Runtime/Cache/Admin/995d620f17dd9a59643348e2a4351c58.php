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
                        <div class="col-md-4">
                            <img class="logo" src="/Card-system/Public/Home/images/one_card2.jpg">
                            <font class="word" color="#46b8da">校园一卡通</font>
                            <button type="button" style="margin-top:20px; " class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-collapse">
                                <span class="sr-only">切换导航</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="col-md-8">
                            <div class="collapse navbar-collapse" id="example-navbar-collapse">
                                <?php if($role_id != 1): ?><ul class="nav navbar-nav navbar-right" style="margin-top: 20px;">
                                        <li class="ti"><a href="<?php echo U('Index/index');?>">首页</a></li><!--li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li-->
                                        <li class="ti"><a href="<?php echo U('View/index');?>">校园文化</a></li>
                                        <li class="ti"><a href="<?php echo U('View/service');?>">服务中心</a></li>
                                        <li class="ti"> <a href="<?php echo U('Borrow/index');?>">图书借阅</a></li>
                                        <li class="ti"><a href="<?php echo U('Back/index');?>">个人信息</a></li>
                                        <li class="ti"><a href="<?php echo U('User/addS');?>">添加学生</a></li>
                                        <li class="ti"><a href="<?php echo U('Public/logout');?>">退出登录</a></li>
                                    </ul>
                                    <?php else: ?>
                                    <ul class="nav navbar-nav navbar-right" style="margin-top: 20px;">
                                        <li class="ti"><a href="<?php echo U('Index/index');?>">首页</a></li><!--li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li-->
                                        <li class="ti"><a href="<?php echo U('View/service');?>">管理中心</a></li>
                                        <li class="ti"><a href="<?php echo U('Back/index');?>">个人信息</a></li>
                                        <li class="ti"><a href="<?php echo U('Public/logout');?>">退出登录</a></li>
                                    </ul><?php endif; ?>
                            </div>
                        </div>
                        <?php if($role_id != 1): ?><font style="margin-top: 5px;position: absolute; ">欢迎您！<?php echo (session('username')); ?></font>
                            <?php else: ?>
                            <font style="margin-top: 5px;position: absolute; ">Welcome！<?php echo (session('username')); ?></font><?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
<section id="1">
    <div style="position: relative;">
        <hr style="margin: 80px 0 0 0; height: 1px; width: auto;background: #46b8da;"/>
        <img id="img1" class="image" style="height: 400px;" src="/Card-system/Public/Home/images/oc_bg.png" alt="1"/>
        <p id="p1" style="color:white; display: none; position: absolute; text-align:center; margin-left: 25%; margin-top: 100px; font-size: 20px">
            一&nbsp;&nbsp;卡&nbsp;&nbsp;通&nbsp;&nbsp;掌&nbsp;&nbsp;握&nbsp;&nbsp;未&nbsp;&nbsp;来&nbsp;&nbsp;科&nbsp;&nbsp;技
            ，&nbsp;&nbsp;期&nbsp;&nbsp;待&nbsp;&nbsp;你&nbsp;&nbsp;的&nbsp;&nbsp;到&nbsp;&nbsp;来&nbsp;&nbsp;!</p>
        <img id="img2"  style="display: none; width: 100%; height: 400px; margin: 0;padding: 0;" src="/Card-system/Public/Home/images/oc_bg1.png"alt="2"/>
        <img id="img3" style="display:none; width: 100%; height: 400px;" src="/Card-system/Public/Home/images/oc_bg2.png" alt="3"/>
    </div>
</section>

<!--个人信息-->
<section id="2" style="color: #46b8da;background-color: #46b8da;">
    <hr style="margin: 0 0 0 0; height: 1px; width: auto;background: #46b8da;"/>
    <?php if($role_id == 0): ?><!--系统管理员-->
        <div class="container" style="margin-top: 20px;">
            <div class="raw">
                <div class="col-md-6">
                    <label style="color: white;margin-left: 5%;">账户：</label>
                    <font style="color: white"><?php echo (session('username')); ?></font>
                    <label style="color: white;margin-left: 150px;">性别：</label>
                    <font style="color: white"><?php echo (session('sex')); ?></font>
                    <br/>
                    <label style="color: white;margin-left: 5%;margin-top:20px;">生日：</label>
                    <font style="color: white"><?php echo (session('birthday')); ?></font>
                    <label style="color: white;margin-left: 100px;">入职：</label>
                    <font style="color: white"><?php echo (session('addtime')); ?></font>
                </div>
                <div class="col-md-6">
                    <label style="color: white;margin-left: 5%;">姓名：</label>
                    <font style="color: white"><?php echo (session('truename')); ?></font>
                    <label style="color: white;margin-left: 150px;">昵称：</label>
                    <?php if($_SESSION['nickname']!= null): ?><font style="color: white"><?php echo (session('nickname')); ?></font>
                    <?php else: ?><font style="color: white">NULL</font><?php endif; ?>
                    <br/>
                    <label style="color: white;margin-left: 5%;">邮箱：</label>
                    <font style="color: white"><?php echo (session('email')); ?></font>
                    <label style="color: white;margin-left: 60px;">电话：</label>
                    <font style="color: white"><?php echo (session('tel')); ?></font>
                    <a href="<?php echo U('Back/edit');?>" style=" margin-left:5%; color: white;font-weight: 800;font-size: 20px;text-decoration: none;">Edit</a>
                </div>
            </div>
        </div>
        <?php else: ?>
        <!--普通管理员-->
        <hr style="margin: 0 0 0 0; height: 1px; width: auto;background: #46b8da;"/>
        <div class="container" style="background-color: white;margin-top: 20px;">
            <div class="raw">
                <div class="col-md-12">
                    <label style="color: #46b8da;margin-left: 25%;">账户：</label>
                    <font style="color: #46b8da;"><?php echo (session('username')); ?></font>
                    <label style="color: #46b8da;margin-left: 5%;">性别：</label>
                    <font style="color: #46b8da;"><?php echo (session('sex')); ?></font>
                    <label style="color: #46b8da; margin-left: 5%;">生日：</label>
                    <font style="color: #46b8da;"><?php echo (session('birthday')); ?></font>
                    <label style="color: #46b8da; margin-left: 5%;">入职：</label>
                    <font style="color: #46b8da;"><?php echo (session('addtime')); ?></font>
                    <br/>
                    <label style="color: #46b8da; margin-left: 25%;">姓名：</label>
                    <font style="color: #46b8da;"><?php echo (session('truename')); ?></font>
                    <label style="color: #46b8da;margin-left: 5%;">昵称：</label>
                    <font style="color: #46b8da;"><?php echo (session('nickname')); ?></font>
                    <label style="color: #46b8da;margin-left: 5%;">邮箱：</label>
                    <font style="color: #46b8da;"><?php echo (session('email')); ?></font>
                    <label style="color: #46b8da;margin-left: 5%;">电话：</label>
                    <font style="color: #46b8da;"><?php echo (session('tel')); ?></font>
                    <a href="<?php echo U('Back/edit');?>" style=" margin-left:5%; color:#46b8da;font-weight: 800;font-size: 20px;text-decoration: none;">Edit</a>
                </div>
            </div>
        </div><?php endif; ?>
    <hr style="margin: 20px 0 0 0; height: 1px; width: auto;background: #46b8da;"/>

</section>
<section id="3">
    <!--邮件管理-->
    <hr style="margin: 20px 0 0 0; height: 1px; width: auto;background: white;"/>
    <a style="text-decoration: none;margin-left: 40%;margin-top: 20px;">
        <img src="/Card-system/Public/Admin/images/email/ico06.png" class="images" style="width: 40px;height:30px; "/>
        <font style="font-weight: 800;color: #46b8da;font-size: 20px;">邮件管理</font>
    </a>
    <div class="container" style="margin-top: 20px;">
        <div class="raw">
            <div class="col-md-4">
                <a href="<?php echo U('Email/send');?>" style="text-decoration: none;margin-left: 20%;">
                    <img src="/Card-system/Public/Admin/images/email/icon01.png" class="images" style="width: 40px;height:30px; "/>
                    <font style="color: #46b8da;font-weight: 400;font-size: 15px;">发送邮件</font>
                </a>
            </div>
            <div class="col-md-4">
                <a href="<?php echo U('Email/sendBox');?>" style="text-decoration: none;margin-left: 20%;">
                    <img src="/Card-system/Public/Admin/images/email/rmail.png" class="images"  style="width: 40px;height:30px; "/>
                    <font style="color: #46b8da;font-weight: 400;font-size: 15px;">发件箱</font>
                </a>
            </div>
            <div class="col-md-4">
                <a href="<?php echo U('Email/recBox');?>" style="text-decoration: none;margin-left: 20%;">
                    <img src="/Card-system/Public/Admin/images/email/rmail1.png" class="images"  style="width: 40px;height:30px; "/>
                    <font style="color: #46b8da;font-weight: 400;font-size: 15px;">收件箱</font>
                </a>
            </div>
        </div>
    </div>
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
                <p style="line-height: 20px;"><a href="<?php echo U('View/index');?>">校园文化</a>
                    <a style="margin-left: 20px;" href="<?php echo U('View/service');?>">服务中心</a></p>
                <p></p>
                <p><a href="<?php echo U('Back/index');?>">个人信息</a>
                    <a style="margin-left: 20px;" href="<?php echo U('Borrow/index');?>">图书借阅</a></p>
            </div>
        </div>
    </div>
</footer>
</body>
<script src="https://cdn.staticfile.org/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.staticfile.org/popper.js/1.15.0/umd/popper.min.js"></script>
<script src="https://cdn.staticfile.org/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script type="text/javascript">
    var index=0;
    function Slider() {
        index++;
        var obj1=document.getElementById("img1");
        var obj2=document.getElementById("img2");
        var obj3=document.getElementById("img3");
        var obj4=document.getElementById("p1");
        var m=index%3;
        if(m==0){
            //alert(obj1.getAttribute(src));
            //obj1.setAttribute(src,"/Card-system/Public/Home/images/oc_bg.png");
            //obj1.font="Welcome";
            obj1.style.display="block";
            obj2.style.display="none";
            obj3.style.display="none";
        }
        if(m==1){
            //alert("h")
            obj4.style.display="block";
            obj2.style.display="block";
            obj1.style.display="none";
            obj3.style.display="none";
            //obj1.setAttribute(src,"/Card-system/Public/Home/images/oc_bg1.png");
        }
        if(m==2){
            obj4.style.display="none";
            obj3.style.display="block";
            obj2.style.display="none";
            obj1.style.display="none";
            //alert("3")
            //obj1.setAttribute(src,"/Card-system/Public/Home/images/oc_bg2.png");
        }
        //alert("Message");
    }
    setInterval(Slider,5000);
</script>
</html>