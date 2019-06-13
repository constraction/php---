<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// [ 应用入口文件 ]

//绑定到table模块
define('BIND_MODULE','tb');

//开启调试模式
define('APP_DEBUG','true');

//开/关多模块设计
define('APP_MULTI_MODULE',true);

// 定义应用目录
define('APP_PATH', __DIR__ . '/apps/');

// 加载框架引导文件
require  './thinkphp/start.php';
