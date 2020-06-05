use db_card;
/*创建管理人员数据库*/
create table oc_admin(
id int(11) not null auto_increment,  /*管理员入职id*/
username varchar(40) not null,        /*管理员账户名、密码、真名*/
password varchar(32) not null,
truename varchar(40) default null,
sex varchar(10) not null,            /*性别*/
birthday date not null,              /*生日*/
tel varchar(11) not null,            /*电话*/
email varchar(50) not null,          /*邮箱*/
addtime int(11) default null,        /*入职时间*/
role_id int(11) default 2,           /*区分管理员身份*/
primary key (id)                     /*主键为入职id*/
)engine=myisam default charset=utf8;

/*创建学生信息数据库*/
create table oc_student(
id int(11) not null auto_increment, /*学生序号*/
username varchar(40) not null,      /*账户名*/
truename varchar(40) default null,  /*用户姓名*/
password char(32) not null,         /*账户密码*/
card_id varchar(11) not null,       /*卡号*/
profession varchar(11) not null,    /*专业名字*/
sex varchar(10) not null,           /*性别*/
birthday date not null,             /*生日信息*/
tel varchar(11) not null,           /*电话*/
email varchar(50) not null,         /*邮箱*/
credit varchar(10) not null,        /*信用状态（用来表示用户信用状态）*/
addtime date default null,       /*入学时间（卡激活时间）*/
primary key (id)                    /*主键为学生入学是id*/
) engine=myisam default charset=utf8; 

/*创建借阅数据库*/
create table oc_borrow(
id int(11) not null auto_increment,   /*图书借阅表单id*/
username varchar(40) not null,        /*借阅人信息*/
card_id varchar(11) not null,         /*借阅人卡号*/
book_id varchar(11) not null,         /*借阅书籍id*/
bookname varchar(40) not null,        /*借阅书籍名称*/
primary key (id)
)engine=myisam default charset=utf8;

/*创建卡的数据库*/
create table oc_card(
id int(11) not null auto_increment, /*卡的id*/
card_id varchar(11) not null,         /*卡号*/
card_state varchar(10) not null,      /*卡的状态(挂失、未挂失)*/
card_cost int(11) default null,    /*消费账单*/
card_in int(11) not null,             /*充值账单*/
card_surplus int(11) default null, /*剩余余额*/
primary key (id)                  /*主键为卡号*/
)engine=myisam default charset=utf8; 

/*学院与专业信息数据库*/
create table oc_college(
id int not null auto_increment,      /*学院id*/
profession varchar(50) not null,     /*专业名称*/
college varchar(50) not null,        /*学院名称*/
primary key (id)                      /*主键为学院id*/
)engine=myisam default charset=utf8;

/*email邮件数据库*/
create table oc_email(
id int(11) not null auto_increment,  /*邮箱id*/
from_id int(11) not null comment '发送者ID',
to_id int(11) not null comment '接收者ID',
title varchar(50) not null comment '标题',
file varchar(255) default null comment '文件',
hasfile smallint(1) default '0' comment '是否有附件',
filename varchar(255) default null comment '文件原始名',
content text comment '内容',
addtime int(11) default null comment '添加时间',
isread smallint(1) default '0' comment '是否已读',
primary key (id)
)engine=myisam auto_increment=1 default charset=utf8;

/*用于存储学生建议*/
create table oc_view(
id int(11) not null auto_increment,
title varchar(50) not null comment '标题',
content text comment '内容',
author varchar(40) not null comment '作者',
addtime int(11) default null comment '添加时间',
primary key (id)
)engine=myisam auto_increment=1 default charset=utf8;

/*用于显示公开通知信息*/
create table sp_notice(
id int(11) not null auto_increment,
title varchar(50) not null comment '标题',
thumb varchar(255) default null comment '缩略图',
picture varchar(255) default null comment '图片',
description varchar(255) default null comment '描述',
content text comment '内容',
author varchar(40) not null comment '作者',
addtime int(11) default null comment '添加时间',
primary key (id)
)engine=myisam auto_increment=1 default charset=utf8;