<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2014 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: QinHsiu <2278552853@qq.com>
// +----------------------------------------------------------------------

// 应用入口文件

//给入口文件添加一个header头声明字符集
header('Content-Type:text/html;charset=utf8');

// 检测PHP环境
if(version_compare(PHP_VERSION,'5.5.3','<'))  die('require PHP > 5.5.3 !');

// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG',True);

// 定义应用目录
define('APP_PATH','./Application/');

//定义工作路径
define('WORKING_PATH', str_replace('\\','/',__DIR__));

//定义上传根目录
define('UPLOAD_ROOT_PATH', '/Public/Upload/');

//echo WORKING_PATH . UPLOAD_ROOT_PATH;die;
// 引入ThinkPHP入口文件
require './ThinkPHP/ThinkPHP.php';
