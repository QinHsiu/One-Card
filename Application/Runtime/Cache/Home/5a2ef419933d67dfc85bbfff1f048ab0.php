<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>服务中心</title>
    <link rel="stylesheet" href="/Card-system/Public/Home/css/bootstrap.css"/>
    <link rel="stylesheet" href="/Card-system/Public/Home/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="/Card-system/Public/Home/css/Style.css"/>
    <style type="text/css">
        .name {
            width: 118px;
            padding-left: 17px;
        }

        .content {
            width: 118px;
            padding-left: 17px;
        }

        .addtime {
            width: 160px;
            padding-left: 13px;
        }
    </style>
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

<!--主体-->
<section id="1">
    <div style="position: relative;">
        <hr style="margin: 80px 0 0 0; height: 1px; width: auto;background: #46b8da;"/>
        <p id="p1" style="color:red; display: block; position: absolute; text-align:center; margin-left: 25%; margin-top: 100px; font-size: 20px">
            一&nbsp;&nbsp;&nbsp;&nbsp;卡&nbsp;&nbsp;&nbsp;&nbsp;通&nbsp;&nbsp;&nbsp;&nbsp;服&nbsp;&nbsp;&nbsp;&nbsp;务&nbsp;&nbsp;&nbsp;&nbsp;
            中&nbsp;&nbsp;&nbsp;&nbsp;心&nbsp;&nbsp;&nbsp;&nbsp;欢&nbsp;&nbsp;&nbsp;&nbsp;迎&nbsp;&nbsp;&nbsp;&nbsp;您！</p>
        <img id="img1" class="image" style="height: 400px;" src="/Card-system/Public/Home/images/intro/1.jpg" alt="1"/>
        <p id="p2" style="color:blue; display: none; position: absolute; text-align:center; margin-left: 25%; margin-top: 100px; font-size: 20px">
        一&nbsp;&nbsp;&nbsp;&nbsp;卡&nbsp;&nbsp;&nbsp;&nbsp;通&nbsp;&nbsp;&nbsp;&nbsp;服&nbsp;&nbsp;&nbsp;&nbsp;务&nbsp;&nbsp;&nbsp;&nbsp;
            中&nbsp;&nbsp;&nbsp;&nbsp;心&nbsp;&nbsp;&nbsp;&nbsp;欢&nbsp;&nbsp;&nbsp;&nbsp;迎&nbsp;&nbsp;&nbsp;&nbsp;您！</p>
        <img id="img2"  style="display: none; width: 100%; height: 400px; margin: 0;padding: 0;" src="/Card-system/Public/Home/images/intro/2.jpg"alt="2"/>
        <p id="p3" style="color:green; display: none; position: absolute; text-align:center; margin-left: 25%; margin-top: 100px; font-size: 20px">
            一&nbsp;&nbsp;&nbsp;&nbsp;卡&nbsp;&nbsp;&nbsp;&nbsp;通&nbsp;&nbsp;&nbsp;&nbsp;服&nbsp;&nbsp;&nbsp;&nbsp;务&nbsp;&nbsp;&nbsp;&nbsp;
            中&nbsp;&nbsp;&nbsp;&nbsp;心&nbsp;&nbsp;&nbsp;&nbsp;欢&nbsp;&nbsp;&nbsp;&nbsp;迎&nbsp;&nbsp;&nbsp;&nbsp;您！</p>
        <img id="img3" style="display:none; width: 100%; height: 400px;" src="/Card-system/Public/Home/images/intro/3.jpg" alt="3"/>
    </div>
</section>

<!--服务菜单-->
<section id="2" style="background-color:white;">
    <hr style="margin: 0 0 0 0; height: 1px; width: auto;background: #46b8da;"/>
    <div class="container" style="margin-top: 10px;">
        <div class="raw">
            <div class="col-md-4">
                <img src="/Card-system/Public/Home/images/service/index/1.png" class="img"/>
                <a href="#3" style="font-size: 20px; color: #46b8da; text-decoration: none;">消息通知</a>
            </div>
            <div class="col-md-4">
                <img src="/Card-system/Public/Home/images/service/index/2.png" class="img"/>
                <a href="#4" style="font-size: 20px; text-decoration: none;">主体服务</a>
            </div>
            <div class="col-md-4">
                <img src="/Card-system/Public/Home/images/service/index/3.png" class="img"/>
                <a href="#5" style="font-size: 20px; text-decoration: none;">二级服务</a>
            </div>
        </div>
    </div>
</section>

<!--消息通知-->
<section id="3">
    <hr style="margin: 0 0 0 0; height: 1px; width: auto;background: #46b8da;"/>
        <div style="margin-left: 45%; margin-top: 10px;">
            <a href="#3" style="font-size: 20px; text-decoration: none;">①消息通知</a>
        </div>
    <div class="container">
        <div class="raw">
            <div class="col-md-12">
                <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><p>
                        <font class="name" style="color: #46b8da;">标题：<?php echo ($vol["title"]); ?></font>
                        <font class="name" style="color: #46b8da;">发布者：<?php echo ($vol["author"]); ?></font>
                        <font class="addtime"  style="color: black; margin-left: 15%;">发布日期：<?php echo ($vol["addtime"]); ?></font>
                        <br/>
                        <font class="content"  style="color:green;">内容：<?php echo ($vol["content"]); ?></font>
                    </p>
                    <?php if($vol["hasfile"] == 1): ?><font class="file" style="margin-left: 18px;">文件(点击下载)：
                            <?php if(!empty($vol["filename"])): ?><a href='/Card-system/Home/View/download/id/<?php echo ($vol["id"]); ?>'>
                                <?php echo ($vol["filename"]); ?>
                            </a><?php endif; ?></font>
                        <?php else: endif; ?>
                    <hr style="margin: 20px 0 0 0; height: 1px; width: auto;background: white"/><?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
        </div>
    </div>
</section>

<!--主体服务-->
<section id="4" >
    <hr style="margin: 0 0 0 0; height: 1px; width: auto;background: #46b8da;"/>
    <div style="margin-left: 45%">
        <a href="#4" style="font-size: 20px; text-decoration: none;">②主体服务</a>
    </div>
    <div class="container">
        <div class="raw">
            <div class="col-md-4">
                <a href="<?php echo U('Card/cost');?>" style="text-decoration: none;">
                <img src="/Card-system/Public/Home/images/service/light/yw01.png" class="img"/>
                <font style="color: #46b8da; font-size: 15px;">缴纳电费</font>
                </a>
            </div>
            <div class="col-md-4">
                <a href="#" style="text-decoration: none;">
                <img src="/Card-system/Public/Home/images/service/light/yw02.png" class="img"/>
                    <font style="color: #46b8da; font-size: 15px;">缴纳水费</font>
                </a>
            </div>
            <div class="col-md-4">
                <a href="#" style="text-decoration: none;">
                <img src="/Card-system/Public/Home/images/service/light/yw04.png" class="img"/>
                <font style="color: #46b8da; font-size: 15px;">缴纳气费</font>
                </a>
            </div>
        </div>
    </div>
    <div class="container" style="margin-top: 20px;">
        <div class="raw">
            <div class="col-md-4">
                <a href="<?php echo U('Card/ad');?>" style="text-decoration: none;">
                    <img src="/Card-system/Public/Home/images/service/service/2.gif" class="img"/>
                    <font style="color: #46b8da; font-size: 15px;">微信充值</font>
                </a>
            </div>
            <div class="col-md-4">
                <a href="#" style="text-decoration: none;">
                    <img src="/Card-system/Public/Home/images/service/service/5.gif" class="img"/>
                    <font style="color: #46b8da; font-size: 15px;">支付宝充值</font>
                </a>
            </div>
            <div class="col-md-4">
                <a href="#" style="text-decoration: none;">
                    <img src="/Card-system/Public/Home/images/service/service/4.gif" class="img"/>
                    <font style="color: #46b8da; font-size: 15px;">信用卡充值</font>
                </a>
            </div>
        </div>
    </div>
</section>

<!--二级服务-->
<section id="5">
    <hr style="margin: 0 0 0 0; height: 1px; width: auto;background: #46b8da;"/>
    <div style="margin-left: 45%;">
        <a href="#5" style="font-size: 20px; text-decoration: none;">③二级服务</a>
    </div>
    <form action="/Card-system/Home/View/service" method="post">
    <div class="container">
        <div class="raw">
            <div class="col-md-6">
                <p style="color: #46b8da; font-size: 20px; margin-left: 30%;">意见反馈</p>
                    <textarea name="content" placeholder="" style="margin-top: 5px; width:80%;height: 200px;"></textarea>
                    <br/>
                    <button style="margin-top: 10px; margin-left: 30%" id="btnSubmit">提交</button>
                    <button style="margin-left: 30px;" id="btnReset">重置</button>
            </div>
            <div class="col-md-6">
            </div>
        </div>
    </div>
    </form>
</section>

<footer class="footer">
    <hr style="margin: 5px 0 0 0; height: 1px; width: auto;background: #46b8da;"/>
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
                <p style="line-height: 20px;"><a href="<?php echo U('View/index');?>" style="text-decoration: none;">校园文化</a>
                    <a style="margin-left: 20px;text-decoration: none;" href="<?php echo U('View/service');?>" >服务中心</a></p>
                <p></p>
                <p><a href="<?php echo U('Back/index');?>" style="text-decoration: none;">个人信息</a>
                    <a style="margin-left: 20px;text-decoration: none;" href="<?php echo U('Borrow/index');?>">图书借阅</a></p>
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



    var index=0;
    function Slider() {
        index++;
        var obj1=document.getElementById("img1");
        var obj2=document.getElementById("img2");
        var obj3=document.getElementById("img3");
        var obj4=document.getElementById("p1");
        var obj5=document.getElementById("p2");
        var obj6=document.getElementById("p3");
        var m=index%3;
        if(m==0){
            //alert(obj1.getAttribute(src));
            //obj1.setAttribute(src,"/Card-system/Public/Home/images/oc_bg.png");
            //obj1.font="Welcome";
            obj6.style.display="none";
            obj5.style.display="none";
            obj1.style.display="block";
            obj2.style.display="none";
            obj3.style.display="none";
            obj4.style.display="block";
        }
        if(m==1){
            //alert("h")
            obj4.style.display="none";
            obj2.style.display="block";
            obj1.style.display="none";
            obj3.style.display="none";
            obj5.style.display="block";
            obj6.style.display="none"
            //obj1.setAttribute(src,"/Card-system/Public/Home/images/oc_bg1.png");
        }
        if(m==2){
            obj4.style.display="none";
            obj5.style.display="none";
            obj6.style.display="block";
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