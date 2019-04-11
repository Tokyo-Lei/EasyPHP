<?php


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
        if (!is_dir(ROOT.'/Cache/')) {
            mkdir(ROOT.'/Cache/', 0700);
        }

    }

};

//use App\Home\Controllers\HomeController;
//$home = new HomeController();
//$home->index();

