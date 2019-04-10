<?php

return [

    'fetch' => PDO::FETCH_CLASS,

    'default' => 'mysql',

    'connections' => [

        'sqlite' => [
            'driver' => 'sqlite',
            'database' => 'database.sqlite',
            'prefix' => '',
        ],

        'mysql' => [
            'driver' => 'mysql',
            'host' => 'localhost',
            'port' => '3306',
            'database' => 'tokyo',
            'username' => 'root',
            'password' => 'root',
            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix' => 'easy_',
            'strict' => false,
            'engine' => null,
        ],


    ],

];