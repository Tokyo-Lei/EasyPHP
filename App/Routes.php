<?php

namespace App;
use NoahBuscher\Macaw\Macaw;

Macaw::get('/', function() {
    echo "成功！";
});




//控制器
Macaw::get('/demo', 'App\Home\Controllers\HomeController@index');
Macaw::get('/content', 'App\Home\Controllers\HomeController@content');



Macaw::dispatch();