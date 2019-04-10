<?php



// 定义 PATH
define('BASE_PATH', __DIR__);
define('APP_PATH', BASE_PATH . '/App/');



//自动加载
require_once 'vendor/autoload.php';
//加载路由
require_once 'App/Routes.php';

//错误提示
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();



// cache
if (!is_dir(BASE_PATH.'/Cache/')) {
    mkdir(BASE_PATH.'/Cache/', 0700);
}







//use App\Home\Controllers\HomeController;
//$home = new HomeController();
//$home->index();

