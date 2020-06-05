<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>首页</title>
    <link rel="stylesheet" href="/Card-system/Public/Home/css/bootstrap.css"/>
    <link rel="stylesheet" href="/Card-system/Public/Home/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="/Card-system/Public/Home/css/Style.css"/>
    <style type="text/css">
        table tr .id{ width:63px; text-align: center;}
        table tr .username{ width:118px; padding-left:17px;}
        table tr .truename{ width:100px; padding-left:17px;}
        table tr .role_id{ width:80px; padding-left:13px;}
        table tr .sex{ width:63px; padding-left:13px;}
        table tr .birthday{ width:80px; padding-left:13px;}
        table tr .tel{ width:113px; padding-left:13px;}
        table tr .email{ width:160px; padding-left:13px;}
        table tr .addtime{ width:160px; padding-left:13px;}
        table tr .operate{ padding-left:13px;}
    </style>
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
<section id="0">
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

<section id="1" style="width: 100%;">
    <hr style="margin: 0 0 0 0; height: 1px; width: auto;background: #46b8da;"/>
    <!--服务中心-->
    <?php if($role_id != 1): ?><div class="container" style="margin-top: 10px;">
            <div class="raw">
                <div class="col-md-4">
                    <img src="/Card-system/Public/Home/images/service/index/1.png" class="img"/>
                    <a href="#3" style="font-size: 20px; color: #46b8da; text-decoration: none;">消息发布</a>
                </div>
                <div class="col-md-4">
                    <img src="/Card-system/Public/Home/images/service/index/2.png" class="img"/>
                    <a href="#4" style="font-size: 20px; text-decoration: none;">主体服务</a>
                </div>
                <div class="col-md-4">
                    <img src="/Card-system/Public/Home/images/service/index/3.png" class="img"/>
                    <a href="#5" style="font-size: 20px; text-decoration: none;">查看意见</a>
                </div>
            </div>
        </div>
</section>

<!--消息通知-->
<section id="3">
    <hr style="margin: 80px 0 0 0; height: 1px; width: auto;background: #46b8da;"/>
    <div style="margin-left: 45%; margin-top: 10px;">
        <a href="<?php echo U('Notice/deliver');?>" style="font-size: 20px; text-decoration: none;">①消息通知(点击发布通知)</a>
    </div>
    <div class="container">
        <div class="raw">
            <div class="col-md-12">
                <div class="col-md-12">
                    <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><p>
                            <font class="name" style="color: #46b8da;">标题：<?php echo ($vol["title"]); ?></font>
                            <font class="name" style="color: #46b8da;">发布者：<?php echo ($vol["author"]); ?></font>
                            <font class="addtime"  style="color: black; margin-left: 15%;">发布日期：<?php echo ($vol["addtime"]); ?></font>
                            <br/>
                            <font class="content"  style="color:green;">内容：<?php echo ($vol["content"]); ?></font>
                        </p>
                        <?php if($vol["hasfile"] == 1): ?><font class="file">文件(点击下载)：
                                <?php if(!empty($vol["filename"])): ?><a href='/Card-system/Admin/View/download/id/<?php echo ($vol["id"]); ?>'>
                                    <?php echo ($vol["filename"]); ?>
                                </a><?php endif; ?></font>
                            <?php else: endif; ?>
                        <?php if($vol["author"] == $username): ?><a href="javascript:;" class="del" data="<?php echo ($vol["id"]); ?>"  style="margin-left: 50%;font-size:15px;font-weight: 400;color: #46b8da;text-decoration: none;">删除该通知</a>
                            <?php else: endif; ?>
                        <hr style="margin: 20px 0 0 0; height: 1px; width: auto;background: white"/><?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
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
        <a href="#5" style="font-size: 20px; text-decoration: none;">③查看意见</a>
    </div>
    <form action="/Card-system/Admin/View/service" method="post">
        <div class="container">
            <div class="raw">
                <div class="col-md-12">
                    <?php if(is_array($data1)): $i = 0; $__LIST__ = $data1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol1): $mod = ($i % 2 );++$i;?><p>
                            <font class="name" style="color: #46b8da;">标题：<?php echo ($vol1["title"]); ?></font>
                            <font class="name" style="color: #46b8da;margin-left:20%; ">发布者：<?php echo ($vol1["author"]); ?></font>
                            <font class="addtime"  style="color: black; margin-left: 15%;">发布日期：<?php echo ($vol1["addtime"]); ?></font>
                            <br/>
                            <font class="content"  style="color:green;">内容：<?php echo ($vol1["content"]); ?></font>
                        </p>
                        <a href="javascript:;" class="del1" data="<?php echo ($vol1["id"]); ?>"  style="margin-left: 70%;font-size:15px;font-weight: 400;color: #46b8da;text-decoration: none;">删除该通知</a>
                        <hr style="margin: 20px 0 0 0; height: 1px; width: auto;background: white"/><?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
            </div>
        </div>
    </form>
</section>

    <?php else: ?>
<section>
    <!--职员管理-->
    <div style="margin-top: 80px;"><h3 style="color: #46b8da;margin-left: 40%"><a href="<?php echo U('User/addA');?>" style="text-decoration: none;">职员信息管理(点击添加职员)</a></h3></div>
    <div class="container" style="margin-top: 20px;width: 100%;">
        <div class="raw">
            <!--div class="col-md-12">
                <a href="<?php echo U('User/addA');?>" class="add" style="color: #46b8da;margin-left: 15%;">添加</a>
                <button  class="edit" style="color: #46b8da; margin-left: 15%;">编辑</button>
                <button class="del" style="color:#46b8da; margin-left: 15%;">删除</button>
                <button  class="chart" style="color:#46b8da; margin-left: 15%;">统计</button>
            </div-->
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
        <?php if(is_array($data2)): $i = 0; $__LIST__ = $data2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol2): $mod = ($i % 2 );++$i; if($vol2["username"] != $username): ?><tr>
                <td class="id"><?php echo ($vol2["id"]); ?></td>
                <td class="username"><?php echo ($vol2["username"]); ?></td>
                <td class="truename"><?php echo ($vol2["truename"]); ?></td>
                <td class="sex"><?php echo ($vol2["sex"]); ?></td>
                <td class="birthday"><?php echo ($vol2["birthday"]); ?></td>
                <td class="tel"><?php echo ($vol2["tel"]); ?></td>
                <td class="email"><?php echo ($vol2["email"]); ?></td>
                <td class="addtime"><?php echo ($vol2["addtime"]); ?></td>
                <td class="role_id"><?php echo ($vol2["role_id"]); ?></td>
                <td class="operate">
                    <!--input type="checkbox" style="width: 20px;margin-top: 10px;" value="<?php echo ($vol["id"]); ?>" placeholder=""/-->
                    <a href="javascript:;"  class="edit" style="margin-left: 0;text-decoration: none;"  data='<?php echo ($vol["id"]); ?>' data-title='<?php echo ($vol["username"]); ?>'>编辑</a>&nbsp;&nbsp;|
                    <a href="javascript:;"  class="look" style="margin-left: 0;text-decoration: none;"  data='<?php echo ($vol["id"]); ?>' data-title='<?php echo ($vol["username"]); ?>'>查看</a>
                </td>
            </tr><?php endif; endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table>
        </div>
    </div><?php endif; ?>
</section>

<!--系统管理-->
<!--section id="2">
    <hr style="margin: 20px 0 0 0; height: 1px; width: auto;background: #46b8da;"/>
    <div>设置系统颜色</div>

</section-->

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
<script src="/Card-system/Public/Home/js/bootstrap.min.js"></script>
<script src="/Card-system/Public/Home/js/jquery.js"></script>
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

    $(function(){
        //给删除按钮绑定点击事件
        $('.del').on('click',function(){
            var id = $(this).attr('data');
            //带着参数跳转到del方法
            window.location.href = '/Card-system/Admin/View/del/id/' + id;
        });
    });

    $(function(){
        //给删除按钮绑定点击事件
        $('.del1').on('click',function(){
            var id = $(this).attr('data1');
            //带着参数跳转到del方法
            window.location.href = '/Card-system/Admin/View/del/id/' + id;
        });
    });

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