<?php


namespace  App\Home\Controllers;
use Core\Framework;

use Illuminate\Database\Capsule\Manager as Capsule;




class ShareControllers
{

//    protected $twig;


    protected $Twig;


    public function __construct() {

        $this->TemplateTwig();
        $this->Database();

    }

    /**
     * twig模板引擎
     */
    private function TemplateTwig() {

        $config = Framework::basic();

        $loader = new \Twig\Loader\FilesystemLoader($config['view_path']);
        $this->Twig = new \Twig\Environment($loader, [
            'cache' => $config['cache'],
            'debug' => $config['debug']
        ]);

    }
    /**
     * view 输出
     */
    protected function view($template, $data = []) {
        echo $this->Twig->render($template, $data);
    }


    /**
     *	初始化数据库
     */
    private function Database() {

        $capsule = new Capsule;
        $config = Framework::database();
        $capsule->addConnection($config['connections'][$config['default']]);
        $capsule->bootEloquent();
    }



}
