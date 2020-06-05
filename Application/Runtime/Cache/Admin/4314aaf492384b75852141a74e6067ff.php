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
                                    <li class="ti"><a href="<?php echo U('Index/index');?>">首页</a></li><!--li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li-->
                                    <li class="ti"><a href="<?php echo U('View/service');?>">管理中心</a></li>
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
<section id="2">
    <hr style="margin: 0 0 0 0; height: 1px; width: auto;background: #46b8da;"/>
    <div class="" style="text-align: center;color:#46b8da;font-size: 30px; background-color: white">美文鉴赏</div>
    <div class="container">
        <div class="raw">
            <div class="col-md-3 col-xs-3">
                <img src="/Card-system/Public/Home/images/index/3.png" height="auto;" class="image"/>
                <p style="font-size: 15px; color: #46b8da; line-height: 25px;">
                    &nbsp;&nbsp;&nbsp;Rember what should be rembered, and forget what should be forgotten .<br/>
                    &nbsp;&nbsp;&nbsp;Alter what is changeable, and accept what is mutable.
                </p>
            </div>
            <div class="col-md-3 col-xs-3">
                <img src="/Card-system/Public/Home/images/index/3.png" height="auto;" class="image"/>
                <p style="font-size: 15px; color: #46b8da; line-height: 25px;">
                    &nbsp;&nbsp;&nbsp;Everyone has his inherent ability(power or capacity?).<br/>
                    &nbsp;&nbsp;&nbsp;Which is easily concealed by habits, blurred by time,<br/>
                    and eroded by laziness(or inertia?).
                </p>
            </div>
            <div class="col-md-3 col-xs-3">
                <img src="/Card-system/Public/Home/images/index/3.png" height="auto;" class="image"/>
                <p style="font-size: 15px; color: #46b8da; line-height: 25px;">
                    &nbsp;&nbsp;&nbsp;Be sure that you have never had any regrets in your life<br/>
                    &nbsp;&nbsp;&nbsp;Which only lasts for a few decades. Laugh or cry as you like,
                    and it's meaningless to oppose yourself.
                </p>
            </div>
            <div class="col-md-3 col-xs-3">
                <img src="/Card-system/Public/Home/images/index/3.png" height="auto;" class="image"/>
                <p style="font-size: 15px; color: #46b8da; line-height: 25px;">
                    &nbsp;&nbsp;&nbsp;A true love is what doesn't strive for business, for extravagance,
                    for luxury, and moreover for hokum.
                </p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="raw">
            <div class="col-md-3 col-xs-3">
                <img src="/Card-system/Public/Home/images/index/1.png" height="auto;" class="image"/>
                <p style="font-size: 15px; color: #46b8da; line-height: 25px;">
                    &nbsp;&nbsp;&nbsp;Rember what should be rembered, and forget what should be forgotten .<br/>
                    &nbsp;&nbsp;&nbsp;Alter what is changeable, and accept what is mutable.
                </p>
            </div>
            <div class="col-md-3 col-xs-3">
                <img src="/Card-system/Public/Home/images/index/1.png" height="auto;" class="image"/>
                <p style="font-size: 15px; color: #46b8da; line-height: 25px;">
                    &nbsp;&nbsp;&nbsp;Everyone has his inherent ability(power or capacity?).<br/>
                    &nbsp;&nbsp;&nbsp;Which is easily concealed by habits, blurred by time,<br/>
                    and eroded by laziness(or inertia?).
                </p>
            </div>
            <div class="col-md-3 col-xs-3">
                <img src="/Card-system/Public/Home/images/index/1.png" height="auto;" class="image"/>
                <p style="font-size: 15px; color: #46b8da; line-height: 25px;">
                    &nbsp;&nbsp;&nbsp;Be sure that you have never had any regrets in your life<br/>
                    &nbsp;&nbsp;&nbsp;Which only lasts for a few decades. Laugh or cry as you like,
                    and it's meaningless to oppose yourself.
                </p>
            </div>
            <div class="col-md-3 col-xs-3">
                <img src="/Card-system/Public/Home/images/index/1.png" height="auto;" class="image"/>
                <p style="font-size: 15px; color: #46b8da; line-height: 25px;">
                    &nbsp;&nbsp;&nbsp;A true love is what doesn't strive for business, for extravagance,
                    for luxury, and moreover for hokum.
                </p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="raw">
            <div class="col-md-3 col-xs-3">
                <img src="/Card-system/Public/Home/images/index/6.jpg" height="auto;" class="image"/>
                <p style="font-size: 15px; color: #46b8da; line-height: 25px;">
                    &nbsp;&nbsp;&nbsp;When you were born, you were crying but lookers-on were smiling.<br/>
                    &nbsp;&nbsp;&nbsp;When you are passing away ,you are smiling but lookers-on are crying.
                </p>
            </div>
            <div class="col-md-3 col-xs-3">
                <img src="/Card-system/Public/Home/images/index/6.jpg" height="auto;" class="image"/>
                <p style="font-size: 15px; color: #46b8da; line-height: 25px;">
                    &nbsp;&nbsp;&nbsp;"You couldn't see my tears cause I am in the water." Fish said to water.<br/>
                    &nbsp;&nbsp;&nbsp;"But I could feel your tears cause you are in me." Answered water.
                </p>
            </div>
            <div class="col-md-3 col-xs-3">
                <img src="/Card-system/Public/Home/images/index/6.jpg" height="auto;" class="image"/>
                <p style="font-size: 15px; color: #46b8da; line-height: 25px;">
                    &nbsp;&nbsp;&nbsp;Complaints are the greatest offerings that Gad obtains from human beings,
                    as well as the most faithful prayers human beings might utter to God.
                </p>
            </div>
            <div class="col-md-3 col-xs-3">
                <img src="/Card-system/Public/Home/images/index/6.jpg" height="auto;" class="image"/>
                <p style="font-size: 15px; color: #46b8da; line-height: 25px;">
                    &nbsp;&nbsp;&nbsp;Apart from tears, only could wear everything away.<br/>
                    &nbsp;&nbsp;&nbsp;While feelings is being processed by time, conflicts would be reconciled as time goes by,
                    just like a cup of tea that is being continuously diluted.
                </p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="raw">
            <div class="col-md-3 col-xs-3">
                <img src="/Card-system/Public/Home/images/index/4.jpg" height="auto;" class="image"/>
                <p style="font-size: 15px; color: #46b8da; line-height: 25px;">
                    &nbsp;&nbsp;&nbsp;Rember what should be rembered, and forget what should be forgotten .<br/>
                    &nbsp;&nbsp;&nbsp;Alter what is changeable, and accept what is mutable.
                </p>
            </div>
            <div class="col-md-3 col-xs-3">
                <img src="/Card-system/Public/Home/images/index/4.jpg" height="auto;" class="image"/>
                <p style="font-size: 15px; color: #46b8da; line-height: 25px;">
                    &nbsp;&nbsp;&nbsp;Everyone has his inherent ability(power or capacity?).<br/>
                    &nbsp;&nbsp;&nbsp;Which is easily concealed by habits, blurred by time,<br/>
                    and eroded by laziness(or inertia?).
                </p>
            </div>
            <div class="col-md-3 col-xs-3">
                <img src="/Card-system/Public/Home/images/index/4.jpg" height="auto;" class="image"/>
                <p style="font-size: 15px; color: #46b8da; line-height: 25px;">
                    &nbsp;&nbsp;&nbsp;Be sure that you have never had any regrets in your life<br/>
                    &nbsp;&nbsp;&nbsp;Which only lasts for a few decades. Laugh or cry as you like,
                    and it's meaningless to oppose yourself.
                </p>
            </div>
            <div class="col-md-3 col-xs-3">
                <img src="/Card-system/Public/Home/images/index/4.jpg" height="auto;" class="image"/>
                <p style="font-size: 15px; color: #46b8da; line-height: 25px;">
                    &nbsp;&nbsp;&nbsp;A true love is what doesn't strive for business, for extravagance,
                    for luxury, and moreover for hokum.
                </p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="raw">
            <div class="col-md-3 col-xs-3">
                <img src="/Card-system/Public/Home/images/index/5.jpg" height="auto;" class="image"/>
                <p style="font-size: 15px; color: #46b8da; line-height: 25px;">
                    &nbsp;&nbsp;&nbsp;Rember what should be rembered, and forget what should be forgotten .<br/>
                    &nbsp;&nbsp;&nbsp;Alter what is changeable, and accept what is mutable.
                </p>
            </div>
            <div class="col-md-3 col-xs-3">
                <img src="/Card-system/Public/Home/images/index/5.jpg" height="auto;" class="image"/>
                <p style="font-size: 15px; color: #46b8da; line-height: 25px;">
                    &nbsp;&nbsp;&nbsp;Everyone has his inherent ability(power or capacity?).<br/>
                    &nbsp;&nbsp;&nbsp;Which is easily concealed by habits, blurred by time,<br/>
                    and eroded by laziness(or inertia?).
                </p>
            </div>
            <div class="col-md-3 col-xs-3">
                <img src="/Card-system/Public/Home/images/index/5.jpg" height="auto;" class="image"/>
                <p style="font-size: 15px; color: #46b8da; line-height: 25px;">
                    &nbsp;&nbsp;&nbsp;Be sure that you have never had any regrets in your life<br/>
                    &nbsp;&nbsp;&nbsp;Which only lasts for a few decades. Laugh or cry as you like,
                    and it's meaningless to oppose yourself.
                </p>
            </div>
            <div class="col-md-3 col-xs-3">
                <img src="/Card-system/Public/Home/images/index/5.jpg" height="auto;" class="image"/>
                <p style="font-size: 15px; color: #46b8da; line-height: 25px;">
                    &nbsp;&nbsp;&nbsp;A true love is what doesn't strive for business, for extravagance,
                    for luxury, and moreover for hokum.
                </p>
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