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
<!--个人信息-->
<section id="1" style="width: auto;margin-top: 80px;">
    <hr style="margin: 0 0 0 0; height: 1px; width: auto;background: #46b8da;"/>
    <div style="margin-left: 45%">
        <a href="" style="font-size: 20px; text-decoration: none;">个人信息</a>
    </div>
    <form action="/Card-system/Home/Back/index" method="post" >
    <div class="container">
        <div class="raw">
            <div class="col-md-4">
                <label style="color: #46b8da">真实姓名：</label>
                <input type="text" style="color: #46b8da"  value=<?php echo (session('truename')); ?> placeholder="" />
                <br/>
                <label style="color: #46b8da">出生日期：</label>
                <input type="text" style="color: #46b8da" value=<?php echo (session('birthday')); ?> placeholder="" />
                <br/>
                <label style="color: #46b8da">信用状态：</label>
                <input type="text" style="color: #46b8da"  value=<?php echo (session('credit')); ?> placeholder="" />
            </div>
            <div class="col-md-4">
                <label style="color: #46b8da">卡号：</label>
                <input type="text" style="color: #46b8da" value=<?php echo (session('card_id')); ?> placeholder="" />
                <br/>
                <label style="color: #46b8da">性别：</label>
                <input type="text" style="color: #46b8da" value=<?php echo (session('sex')); ?> placeholder="" />
                <br/>
                <label style="color: #46b8da">邮箱：</label>
                <input type="text" style="color: #46b8da" value=<?php echo (session('email')); ?> placeholder="" />
                <br/>
                <label style="color: #46b8da">密码：</label>
                <input type="password" style="color: #46b8da" value=<?php echo (session('password')); ?> placeholder="" />
            </div>
            <div class="col-md-4">
                <label style="color: #46b8da">账户：</label>
                <input type="text" style="color: #46b8da" value=<?php echo (session('username')); ?> placeholder="" />
                <br/>
                <label style="color: #46b8da">电话：</label>
                <input type="text" style="color: #46b8da" value=<?php echo (session('tel')); ?> placeholder="" />
                <br/>
                <label style="color: #46b8da">专业：</label>
                <input type="text" style="color: #46b8da" value=<?php echo (session('college_id')); ?> placeholder="" />
                <br/>
                <button style="color: #46b8da;width:100px;height: 25px;margin-left: 20%;" id="btnSubmit">确认修改</button>
            </div>
        </div>
    </div>
    </form>
</section>
<!--关于卡的余额与使用消费情况-->
<section id="2">
    <hr style="margin: 0 0 0 0; height: 1px; width: auto;background: #46b8da;"/>
    <div style="margin-left: 45%">
        <a href="" style="font-size: 20px; text-decoration: none;">一卡通信息</a>
    </div>
</section>
<!--意见反馈情况-->
<section id="3">
    <hr style="margin: 0 0 0 0; height: 1px; width: auto;background: #46b8da;"/>
    <div style="margin-left: 45%;">
        <a href="/Card-system/Home/Back/sendEmail" style="font-size: 20px; text-decoration: none;">邮件查看(点击发送邮件)</a>
    </div>
        <div class="container">
            <div class="raw">
                <div class="col-md-12">
                    <div style="text-align: center;color: #46b8da">收件箱</div>
                    <div class="table-box" style="margin-top: 10px;" >
                        <table style="width: 100%;margin-top: 10px;position: absolute;" cellspacing="20px;">
                            <thead>
                            <tr>
                                <th class="id">序号</th>
                                <th class="name">发件人</th>
                                <th class="name">标题</th>
                                <th class="file">附件(点击下载)</th>
                                <th class="content">内容</th>
                                <th class="addtime">发送时间</th>
                                <th class="status">状态</th>
                                <th class="operate">操作</th>
                            </tr>
                            </thead>
                            <tbody style="margin-top: 10px;width: 100%;">
                            <?php if(is_array($data2)): $i = 0; $__LIST__ = $data2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol2): $mod = ($i % 2 );++$i;?><tr style="margin-top: 20px;" >
                                    <td class="id" style="color: #46b8da;"><?php echo ($vol2["id"]); ?></td>
                                    <td class="name"  style="color: #46b8da;"><?php echo ($vol2["truename"]); ?></td>
                                    <td class="name"  style="color: #46b8da;"><?php echo ($vol2["title"]); ?></td>
                                    <td class="file"  style="color: #46b8da;">
                                        <?php if($vol["hasfile"] == 1): ?><a href='/Card-system/Home/Back/download/id/<?php echo ($vol2["id"]); ?>'><?php echo ($vol2["filename"]); ?></a><?php endif; ?></td>
                                    <td class="content"  style="color: #46b8da;"><?php echo ($vol2["content"]); ?></td>
                                    <td class="addtime"  style="color: #46b8da;"><?php echo ($vol2["addtime"]); ?></td>
                                    <td class="status"  style="color: #46b8da;">
                                        <?php if($vol2["isread"] == 0): ?><span style="color: blue;">未读</span>
                                            <?php else: ?><span style="color: violet;">已读</span><?php endif; ?>
                                    </td>
                                    <td class="operate">
                                        <a href="javascript:;"  class="show2" style="color: #46b8da;margin-top: 1px;position: absolute;text-decoration: none;" content="<?php echo ($vol2["content"]); ?>" data="<?php echo ($vol2["id"]); ?>" data-title="<?php echo ($vol2["title"]); ?>" isread="<?php echo ($vol2["isread"]); ?>">
                                            查看</a><font style="margin-left: 30px;position: absolute;">|</font>
                                        <a href='javascript:;' class="del2"  style="color: #46b8da;position: inherit;margin-top: 2px; margin-left: 35px;text-decoration: none;" data="<?php echo ($vol2["id"]); ?>" data-title="<?php echo ($vol2["title"]); ?>" isread="<?php echo ($vol2["isread"]); ?>">删除</a>
                                    </td>
                                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="pagination ue-clear">
                        <div class="pagin-list">
                            <?php echo ($show2); ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    <div class="container" style="margin-top: 20px;">
        <div class="raw">
            <div class="col-md-12">
                <div style="text-align: center;color: #46b8da">发件箱</div>
                <div class="table-box" style="margin-top: 10px;">
                    <table style="width: 100%;margin-top: 10px;position: absolute;" cellspacing="20px;">
                        <thead>
                        <tr>
                            <th class="id">序号</th>
                            <th class="name">收件人</th>
                            <th class="name">标题</th>
                            <th class="file">附件(点击下载)</th>
                            <th class="content">内容</th>
                            <th class="addtime">发送时间</th>
                            <th class="status">状态</th>
                            <th class="operate">操作</th>
                        </tr>
                        </thead>
                        <tbody style="margin-top: 10px;width: 100%;">
                        <?php if(is_array($data1)): $i = 0; $__LIST__ = $data1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol1): $mod = ($i % 2 );++$i;?><tr style="margin-top: 20px;" >
                                <td class="id" style="color: #46b8da;"><?php echo ($vol1["id"]); ?></td>
                                <td class="name"  style="color: #46b8da;"><?php echo ($vol1["truename"]); ?></td>
                                <td class="name"  style="color: #46b8da;"><?php echo ($vol1["title"]); ?></td>
                                <td class="file"  style="color: #46b8da;">
                                    <?php if($vol1["hasfile"] == 1): ?><a href='/Card-system/Home/Back/download/id/<?php echo ($vol["id"]); ?>'>
                                        <?php echo ($vol1["filename"]); ?></a><?php endif; ?></td>
                                <td class="content"  style="color: #46b8da;"><?php echo ($vol1["content"]); ?></td>
                                <td class="addtime"  style="color: #46b8da;"><?php echo ($vol1["addtime"]); ?></td>
                                <td class="status"  style="color: #46b8da;">
                                    <?php if($vol1["isread"] == 0): ?><span style="color: blue;">未读</span>
                                        <?php else: ?><span style="color: violet;">已读</span><?php endif; ?>
                                </td>
                                <td class="operate">
                                    <a href="javascript:;" class="show1" style="color: #46b8da;margin-top: 1px;position: absolute;text-decoration: none;" content="<?php echo ($vol1["content"]); ?>" data="<?php echo ($vol1["id"]); ?>" data-title="<?php echo ($vol1["title"]); ?>" isread="<?php echo ($vol1["isread"]); ?>">
                                        查看</a><font style="margin-left: 30px;position: absolute;">|</font>
                                    <a href='javascript:;' class="del1"  style="color: #46b8da;position: inherit;margin-top: 2px; margin-left: 35px;text-decoration: none;" data="<?php echo ($vol1["id"]); ?>" data-title="<?php echo ($vol1["title"]); ?>" isread="<?php echo ($vol1["isread"]); ?>">删除</a>
                                </td>
                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                        </tbody>
                    </table>
                </div>
                <div class="pagination ue-clear">
                    <div class="pagin-list">
                        <?php echo ($show1); ?>
                    </div>
                    <!--div class="pxofy">共 <?php echo ($count); ?> 条记录</div-->
                </div>


            </div>
        </div>
    </div>
</section>
<!--偏好设置-->
<section id="4">
    <hr style="margin: 20px 0 0 0; height: 1px; width: auto;background: #46b8da;"/>
    <div style="margin-left: 45%">
        <a href="" style="font-size: 20px; text-decoration: none;">偏好设置</a>
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
<script src="https://cdn.staticfile.org/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.staticfile.org/popper.js/1.15.0/umd/popper.min.js"></script>
<script src="https://cdn.staticfile.org/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script type="text/javascript">
    $(function(){
        $('#btnSubmit').on('click',function(){
            $('form').submit();
        });
    });

    $(function() {
            //给查看按钮绑定点击事件
            $('.show1').on('click', function() {
                //事件处理程序
                var id = $(this).attr('data');
                var title = $(this).attr('data-title');
                var isread = $(this).attr('isread');
                var content=$(this).attr('content');
                alert("标题："+title+"\n"+"内容："+content);
                layer.open({
                    type: 2,
                    title: '',
                    time:2000,
                    shadeClose: true,
                    shade: false,
                    maxmin: true, //开启最大化最小化按钮
                    area: ['0px', '0px'],
                    content: '/Card-system/Home/Back/getContent/id/' + id,
                    end: function(){
                        //处理关闭的操作
                        if(isread == 0){
                            window.location.href =location.href;
                        }
                        else {
                            window.location.href =location.href;
                        }
                    }
                });
                //layer.close(index);
            });
        });

    //jQuery代码
    $(function(){
        //给删除按钮绑定点击事件
        $('.del1').on('click',function(){
            var id = $(this).attr('data');
            //带着参数跳转到del方法
            window.location.href = '/Card-system/Home/Back/del/id/' + id;
        });
    });

    $(function(){
        //给删除按钮绑定点击事件
        $('.del2').on('click',function(){
            var id = $(this).attr('data');
            //带着参数跳转到del方法
            window.location.href = '/Card-system/Home/Back/del/id/' + id;
        });
    });

    $(function() {
        //给查看按钮绑定点击事件
        $('.show2').on('click', function() {
            //事件处理程序
            var id = $(this).attr('data');
            var title = $(this).attr('data-title');
            var isread = $(this).attr('isread');
            var content=$(this).attr('content');
            alert("标题："+title+"\n"+"内容："+content);
            layer.open({
                type: 2,
                title: '',
                time:2000,
                shadeClose: true,
                shade: false,
                maxmin: true, //开启最大化最小化按钮
                area: ['0px', '0px'],
                content: '/Card-system/Home/Back/getContent/id/' + id,
                end: function(){
                    //处理关闭的操作
                    if(isread == 0){
                        window.location.href =location.href;
                    }
                    else {
                        window.location.href =location.href;
                    }
                }
            });
            //layer.close(index);
        });
    });


</script>