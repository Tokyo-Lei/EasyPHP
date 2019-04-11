# EasyPHP Framework

![](/Public/logo.jpg)

[![](https://img.shields.io/badge/version-2.0-green.svg)](https://img.shields.io/badge/version-2.0-green.svg)
[![](https://img.shields.io/badge/php-7.2+-brightgreen.svg)](https://img.shields.io/badge/php-7.2+-brightgreen.svg)
[![](https://img.shields.io/badge/Mysql-Sqlite-orange.svg)](https://img.shields.io/badge/Mysql-Sqlite-orange.svg)
[![](https://img.shields.io/badge/license-MIT-blue.svg)](https://img.shields.io/badge/license-MIT-blue.svg)

## 基于Composer的PHP框架！

是一款轻量级的基于composer框架，PSR-4规则！


## 更新日志

- 2019年4月11日 完成框架主体
- 2019年4月10日 开发框架


## 框架使用

- 本代码开源遵循MIT协议。
- 支持PHP7.2以上版本，建议Win平台Apache+php+mysql组合环境使用。
- 支持Windows和Liunx平台。



## 目录架构
```php
App		前后台PHP文件目录
   |-	Home	前台目录
   |-	Admin	后台目录
   |-	Config 配置目录
Public		放置CSS、JS、IMG等目录
   |-	Home	前台静态资源目录
   |-	Admin	后台静态资源目录
   |- index.php前台框架入口文件
Core  核心目录
   |-	Library 辅助类文件目录
   |-	Framework.php 框架核心文件
Storage  日志缓存目录
vendor  composer依赖文件目录
Bootstrap.php 启动文件
.htaccess		伪静态、去掉index.php配置文件
```

## 模板引擎
- Twig是一款灵活、快速、安全的PHP模板引擎。
- 快速：Twig将模板编译为纯粹的，最优化的PHP代码。它的开销与常规的PHP代码相比，已经降到了极低。
- 安全：Twig拥有沙盒模式，用于评估未受信任的模板代码。这使得Twig可以用于允许用户自行修改模板设计的应用程序中。

## Aaache伪静态规则
```php
RewriteEngine On
RewriteBase /

# Allow any files or directories that exist to be displayed directly
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d

RewriteRule ^(.*)$ index.php?$1 [QSA,L]        
```

## 依赖第三方
```php
"filp/whoops": "*",
"noahbuscher/macaw": "dev-master",
"twig/twig": "^2.0",
"illuminate/database": "^5.8.9",
"monolog/monolog": "^1.24"    
```


## 感谢

- 罗火（深圳） 解决前端技术

