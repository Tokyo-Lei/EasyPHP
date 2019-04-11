<?php

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class Bootstrap {
    //定义一个run方法
    public static function Run(){
        self::init();
    }


    private static function init(){

        // 定义PATH
        define('ROOT', __DIR__);
        define('APP_PATH', ROOT . '/App/');

        //自动加载
        require_once 'vendor/autoload.php';
        //加载路由
        require_once 'App/Routes.php';


        //错误提示
        $whoops = new \Whoops\Run;
        $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
        $whoops->register();


        // cache
        if (!is_dir(ROOT.'/Storage/Cache/')) {
            mkdir(ROOT.'/Storage/Cache/', 0700);
        }


        /**
         * 初始化日志系统
         */
        $log = new Logger('name');
        $log->pushHandler(new StreamHandler(ROOT.'/Storage/Logs/', Logger::WARNING));

    }

};

//use App\Home\Controllers\HomeController;
//$home = new HomeController();
//$home->index();

