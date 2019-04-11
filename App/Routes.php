<?php

namespace App;
use NoahBuscher\Macaw\Macaw;

Macaw::get('/', function() {
    echo '
    
    <style type="text/css">.num{font-size:14px;padding: 0px;position: absolute;bottom: 20px;}  
    *{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: \"微软雅黑\"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px } a,a:hover{color:blue;}
    </style>
    
    <div style="padding: 24px 48px;"> <h1>:)</h1><p>你好世界！ <b>EasyPHP2.0</b></p>
    
    ';
});




//控制器
Macaw::get('/demo', 'App\Home\Controllers\HomeController@index');
Macaw::get('/content', 'App\Home\Controllers\HomeController@content');

//404
Macaw::error(function() {
    echo '<h1>404!</h1>';
});


Macaw::dispatch();