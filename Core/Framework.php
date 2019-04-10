<?php

/**
 * 框架核心文件
 */

namespace Core;



class Framework{


    private static $app;
    private static $database;

    public static function basic($key = null) {
        if (self::$app == null) {
            self::$app = require_once APP_PATH . 'Config/Basic.php';
        }

        if (!is_null($key)) {
            return array_key_exists($key, self::$app) ? self::$app[$key] : null;
        }

        return self::$app;
    }


    public static function database($key = null) {
        if (self::$database == null) {
            self::$database = include APP_PATH . 'Config/Database.php';
        }

        if (!is_null($key)) {
            return array_key_exists($key, self::$database) ? self::$database[$key] : null;
        }

        return self::$database;
    }


}