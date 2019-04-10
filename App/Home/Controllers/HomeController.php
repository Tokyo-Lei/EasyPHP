<?php

namespace  App\Home\Controllers;

use App\Home\Models\Content;
use Core\Config;
use App\Home\Models;
use Illuminate\Database\Capsule\Manager as DB;

class HomeController extends ShareControllers
{

    public function index(){
        $data = Content::first();
        echo $this->view('demo.html', ['data' => $data]);
    }

    public function content(){
        echo $this->view('content.html', ['name' => 'hi']);
    }

}