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
                                <ul class="nav navbar-nav navbar-right" style="margin-top: 20px;">
                                    <li class="ti"><a href="<?php echo U('Index/index1');?>">首页</a></li><!--li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li-->
                                    <li class="ti"><a href="<?php echo U('View/index');?>">校园文化</a></li>
                                    <li class="ti"><a href="<?php echo U('View/service');?>">服务中心</a></li>
                                    <li class="ti"> <a href="<?php echo U('Borrow/index');?>">图书借阅</a></li>
                                    <li class="ti"><a href="<?php echo U('Back/index');?>">个人信息</a></li>
                                    <li class="ti"><a href="<?php echo U('Public/logout');?>">退出登录</a></li>
                                </ul>
                            </div>
                        </div>
                        <font style="margin-top: 5px;position: absolute; ">欢迎您！<?php echo (session('username')); ?></font>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>

<section id="1">
    <hr style="margin: 80px 0 0 0; height: 1px; width: auto;background: #46b8da;"/>
    <div style="margin-left: 45%; margin-top: 10px;">
        <a href="<?php echo U('Borrow/borrow');?>" style="font-size: 20px; text-decoration: none;">借阅书籍(点击添加书籍)</a>
    </div>
    <div class="container">
        <div class="raw">
            <div class="col-md-12">
                <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i; if($vol["username"] == $username): ?><p>
                        <font class="name" style="color: #46b8da;">书名：<?php echo ($vol["bookname"]); ?></font>
                        <font class="name" style="color: #46b8da;">书号：<?php echo ($vol["book_id"]); ?></font>
                        <font class="addtime"  style="color: black; margin-left: 15%;">借阅日期：<?php echo ($vol["addtime"]); ?></font>
                        <br/>
                        <font class="content"  style="color:green;">借阅剩余时长：<?php echo ($vol["addtime"]); ?></font>
                    </p>
                        <?php else: ?>
                        <font class="content"  style="color:green;">没有借阅记录！</font><?php endif; ?>
                    <hr style="margin: 20px 0 0 0; height: 1px; width: auto;background: white"/><?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
        </div>
    </div>
</section>

<footer class="footer">
    <hr style="margin: 10% 0 0 0; height: 1px; width: auto;background: #46b8da;"/>
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

</html>