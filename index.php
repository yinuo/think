<?php
/**
 * Common应用公共目录
 * Common应用公共函数目录
 * Conf应用公共配置目录
 *
 * Home默认生成的Home模块
 * Conf模块配置的文件目录
 * Common模块函数公共目录
 * Controller模块控制器目录
 * Model模块模型目录
 * View模块视图文件目录
 *
 * Runtime运行时目录
 * Cache模版缓存目录
 * Data数据目录
 * Logs日志目录
 * Temp缓存目录
 */

/*
 *
1.加载thinkphp.php
require_one('./ThinkPHP/ThinkPHP.php');

2.加载核心文件。

3.加载项目文件，分析URL 调用相关控制器
m module 模块 控制器
a action 方法 action=页面

 *
 */
/*
$module = isset($_GET['m']) ? $_GET['m']:'Index';
$action = isset($_GET['a']) ? $_GET['a']:'Index';

$mooc = new $module;
$mooc->$action();
class Index{
    function __construct(){
        echo '调用了index控制器';
    }

    function index(){
        echo '我是index控制器的方法';
    }
}*/

define('APP_DEBUG', 'true');
define('APP_NAME', 'App');
define('APP_PATH', './App/');
require_once ('./ThinkPHP/ThinkPHP.php');