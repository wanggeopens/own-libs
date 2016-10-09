<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2014 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用入口文件

// 检测PHP环境
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');

// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG', false);

// 采用CLI运行模式运行
define('MODE_NAME', 'cli');

//创建安全目录
define('BUILD_DIR_SECURE', false);

//默认模块
define('BIND_MODULE', 'Home');

//项目目录
define('ROOT_PATH', dirname(__DIR__));

// 定义应用目录
define('APP_PATH', ROOT_PATH . '/Application/');

// 引入ThinkPHP入口文件
require ROOT_PATH . '/ThinkPHP/ThinkPHP.php';
