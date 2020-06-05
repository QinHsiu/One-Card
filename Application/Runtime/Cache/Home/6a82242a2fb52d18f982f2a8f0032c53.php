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
<!--发送邮件-->
<hr style="margin: 80px 0 0 0; height: 1px; width: auto;background: #46b8da;"/>
<!--发送邮件-->
<section id="1" style="margin-left: 35%;width: 400px;background-color:#9B410E;height: 400px;border-radius: 15%;margin-top: 50px;">
    <div style="color: #46b8da;text-align: center;font-weight: 800;font-size: 20px;">Send-Email</div>
    <div class="container">
        <div class="raw">
            <div class="col-md-12">
                <form action="/Card-system/Home/Back/sendEmail" method="post" enctype="multipart/form-data" style="margin-top: 40px;">
                    <p class="short-input ue-clear">
                        <label style="color: #46b8da;font-size: 20px;font-weight: 400;">收件人：</label>
                        <select name="to_id" style="width: 180px; color: #46b8da;">
                            <option value="0" style="color: #46b8da;font-size: 20px;font-weight: 400;">请选择收件人</option>
                            <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vol["id"]); ?>" style="color: #46b8da;"><?php echo ($vol["truename"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                        </select>
                    </p>
                    <p class="short-input ue-clear">
                        <label style="color: #46b8da;font-size: 20px;font-weight: 400;margin-top: 10px;">标&nbsp;&nbsp;&nbsp;&nbsp;题：</label>
                        <input name="title" type="text" style="width: 180px;color: #46b8da;" placeholder="标题..." />
                    </p>
                    <p class="short-input">
                        <label style="color: #46b8da;font-size: 20px;font-weight: 400;position: absolute;">附&nbsp;&nbsp;&nbsp;&nbsp;件：</label>
                        <input name="file" style="margin-top: 30px; margin-left: 90px; width: 180px;position: inherit;" type="file"/>
                    </p>
                    <p class="short-input ue-clear">
                        <label style="color: #46b8da;font-size: 20px;font-weight: 400;margin-top: 20px;">内&nbsp;&nbsp;&nbsp;&nbsp;容：</label>
                        <textarea name="content" style="font-family:Microsoft YaHei !important; font-size:14px; color: #46b8da; width: 180px;margin-top: 20px;height: 50px;" placeholder="请输入内容..." ></textarea>
                    </p>
                    <div class="btn ue-clear" style="margin-left: 15%;">
                        <a href="javascript:;" class="confirm" id='btnSubmit' style="text-decoration: none;">确定发送</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
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
                    <a style="margin-left: 20px;" href="<?php echo U('Borrow/index');?>">图书借阅</a></p>
            </div>
        </div>
    </div>
</footer>
<script src="https://cdn.staticfile.org/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.staticfile.org/popper.js/1.15.0/umd/popper.min.js"></script>
<script src="https://cdn.staticfile.org/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script type="text/javascript">
    $(function(){
        $('#btnSubmit').on('click',function(){
            $('form').submit();
        });
    });
</script>