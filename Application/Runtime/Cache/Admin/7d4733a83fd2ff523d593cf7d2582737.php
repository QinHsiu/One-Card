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
<!--添加管理员-->
<section id="1">
    <hr style="margin: 0 0 0 0; height: 1px; width: auto;background: #46b8da;"/>
    <form action="/Card-system/Admin/User/addA" method="post" style="margin-top: 100px;">
        <div class="container">
            <div class="raw">
                <div class="col-md-4">
                    <label>账户：</label>
                    <input name="username" type="text" placeholder="account" id="us"/>
                    <br/><br/>
                    <label>密码：</label>
                    <input name="password" type="text" placeholder="password" id="ps"/>
                    <br/><br/>
                    <label>性别</label>
                    <input name="sex" type="radio" value="man" checked="checked"/>man
                    <input name="sex" type="radio" value="woman" />woman
                </div>
                <div class="col-md-4">
                    <label>真实姓名：</label>
                    <input name="truename" type="text" placeholder="truename" id="tn"/>
                    <br/><br/>
                    <label>联系电话：</label>
                    <input name="tel" type="text" placeholder="tel" id="tel"/>
                    <br/><br/>
                    <label>出生日期：</label>
                    <input name="birthday" type="text" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd'})" placeholder="birthday" id="bd"/>
                </div>
                <div class="col-md-4">
                    <label>i&nbsp;&nbsp;&nbsp;&nbsp;d：</label>
                    <input name="id" type="text" placeholder="id" id="id"/>
                    <br/><br/>
                    <label>邮箱：</label>
                    <input name="email" type="text" placeholder="email" id="em"/>
                    <br/><br/>
                    <label>职位：</label>
                    <input name="role_id" type="text" placeholder="role_id" id="role"/>
                </div>
            </div>
        </div>
        <div style="margin-left: 40%;margin-top: 20px;">
            <button style="text-decoration: none;" class="confirm" id="btnSubmit">确定添加</button>
            <!--button style="margin-left: 50px;" id="btnReset">清空</button-->
        </div>

    </form>
</section>
<footer class="footer">
    <hr style="margin: 20px 0 0 0; height: 1px; width: auto;background: #46b8da;"/>
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
        $('#btnSubmit').on('click',function(){
            $('form').submit();
        });

        $('#btnReset').on('click',function(){
            $('form')[0].reset();
        });
    });

    $(".select-title").on("click",function(){
        $(".select-list").toggle();
        return false;
    });
    $(".select-list").on("click","li",function(){
        var txt = $(this).text();
        $(".select-title").find("span").text(txt);
    });
    showRemind('input[type=text], textarea','placeholder');
</script>
</html>