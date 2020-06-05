<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>首页</title>
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
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
        </button></div>
        <div class="col-md-8">
        <div class="collapse navbar-collapse" id="example-navbar-collapse">
            <ul class="nav navbar-nav navbar-right" style="margin-top: 20px;">
                <li class="ti"><a href="<?php echo U('Index/index');?>">首页</a></li><!--li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li-->
                <li class="ti"><a href="<?php echo U('Index/news');?>">新闻动态</a></li>
                <li class="ti"><a href="<?php echo U('Index/service');?>">服务中心</a></li>
                <li class="ti"><a href="<?php echo U('Index/recruit');?>">招贤纳士</a></li>
                <li class="ti"><a href="<?php echo U('Index/aboutUs');?>">关于我们</a></li>
                <li class="ti"><a href="<?php echo U('Home/Public/login');?>" id="student">学生登录</a></li>
                <li class="ti"><a href="<?php echo U('Admin/Public/login');?>" id="admin">管理员登录</a></li>
            </ul>
        </div>
        </div>
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
    <div style="text-align: center;">
            <p style="margin: 10px; font-size: 30px; color:#46b8da;">关于一卡通</p>
            <p style="color: #46b8da;">About Card</p>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-xs-4" >
                <p style="color:#46b8da; font-size: 20px;">Interpretation1:</p>
                <p style="color: #46b8da;">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;“校园一卡通”是“数字化校园”中的重要组成部分，它应主要具有综合消费类、身份识别类、金融服务类、公共信息服务类等功能。
                    整个系统应与银行系统、学校原有的系统和学校管理信息系统有良好的衔接，并为学校潜在管理信息系统预留合适的接口，在项目完成后随时为学校增加其它管理系统接口提供必要的协助。
                </p>
                <br/><br/>
                <p style="color: #46b8da; font-size: 20px; ">Interpretation2:</p>
                <p style="color:#46b8da;">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;校园一卡通是基于智能卡物联网技术和计算机网络的数字化理念融合于校园管理进行的统一身份认证、人事、学工等MIS应用系统的应用解决方案。
                    通过共同的身份认证机制，实现数据管理的集成与共享，使校园一卡通系统成为校园信息化建设有机的组成部分。
                    通过这样的有机结合，可以避免重复投入，加快建设进度，为系统间的资源共享打下基础。
                </p>
            </div>

            <div class="col-md-4 col-xs-4">
                <br/><br/><br/><br/><br/><br/><br/><br/>
                <img class="about-img" src="/Card-system/Public/Home/images/one_card2.jpg"/>
            </div>

            <div class="col-md-4 col-xs-4">
                <p style="color: #46b8da; font-size: 20px; ">Function1:</p>
                <p style="color: #46b8da;">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;一卡通有校内消费结算和身份识别两方面的用途，将逐步取代餐饮卡、借书证/卡、上机证、考试证等校内证件。
                    学校赋予校园卡以校园内的电子钱包消费结算手段，也是校园内信息管理系统中电子身份识别的介质。
                    校园卡具有在食堂、超市、书店、图书馆、复印中心、体育中心、复印、水控、电控等各类收费应用等场所的脱机消费功能。
                </p>
                <br/><br/>
                <p style="color: #46b8da; font-size: 20px; ">Function2:</p>
                <p style="color: #46b8da;">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    身份识别功能，又称身份管理功能，是指校园卡内储存了持卡人的基本信息，学校各部门的信息系统可以通过校园卡进行身份识别和相关管理。
                    校园卡内记录了持卡人个人身份资料、图书借阅资料、门禁控制信息、计算机房管理信息等内容，可实现如考勤、个人身份认证、图书借阅、语音教室使用、计算机上机操作等各项校内管理功能。
                </p>
            </div>
        </div>
</section>

<section id="3">
    <hr style="margin: 0 0 0 0; height: 1px; width: auto;background: #46b8da;"/>
    <div style="text-align: center;">
        <p style="margin: 10px; font-size:30px; color: #46b8da;">新闻动态</p>
        <p style="color: #46b8da;">News</p>
    </div>
    <div class="container">
        <div class="raw">
            <div class="col-md-3 col-xs-3">
                <img class="new-img" src="/Card-system/Public/Home/images/news.png"/>
            </div>
            <div class="col-md-3 col-xs-3" style="margin-left: 0;">
                <span style="color: #46b8da; font-size: 20px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;About Python</span>
                <br/><br/>
                <p style="color: #46b8da;">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Python是一种跨平台的计算机程序设计语言。
                    它是一个高层次的结合了解释性、编译性、互动性和面向对象的脚本语言。
                    最初被设计用于编写自动化脚本(shell)，随着版本的不断更新和语言新功能的添加，越多被用于独立的、大型项目的开发。</p>
            </div>
            <div class="col-md-3 col-xs-3" >
                <img class="new-img" src="/Card-system/Public/Home/images/news1.png"/>
            </div>
            <div class="col-md-3 col-xs-3" style="margin-left: 0;">
                <span style="color: #46b8da; font-size: 20px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;About PHP</span>
                <br/><br/>
                <p style="color: #46b8da;">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PHP即“超文本预处理器”，是一种通用开源脚本语言。
                    PHP是在服务器端执行的脚本语言，与C语言类似，是常用的网站编程语言。
                    PHP独特的语法混合了C、Java、Perl以及 PHP 自创的语法。利于学习，使用广泛，主要适用于Web开发领域。
                </p>
            </div>
        </div>
    </div>
    <br/>
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
                <p><a href="<?php echo U('Index/news');?>">新闻动态</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="<?php echo U('Index/service');?>">服务中心</a></p>
                <p><a href="<?php echo U('Index/recruit');?>">招贤纳士</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="<?php echo U('Index/aboutUs');?>">关于我们</a> </p>
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