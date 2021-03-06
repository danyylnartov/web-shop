<?php

define("DEBUG", 1);
define("ROOT", dirname(__DIR__));
define("WWW", ROOT . '/public');
define("APP", ROOT . '/app');
define("CORE", ROOT . '/webShop/core/libs');
define("LIBS", ROOT . '/webShop/core/libs');
define("CACHE", ROOT . '/tmp/cache');
define("CONFIG", ROOT . '/config');
define("LAYOUT", 'watches');

// http://webshop/public/index.php
$app_path = "http://{$_SERVER['HTTP_HOST']}{$_SERVER['PHP_SELF']}";

// http://webshop/public/
$app_path = preg_replace("#[^/]+$#", '', $app_path);

// http://webshop
$app_path = str_replace('/public/', '', $app_path);
define("PATH", $app_path);
define("ADMIN", PATH . '/admin');

require_once ROOT . '/vendor/autoload.php';