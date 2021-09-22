<?php

require_once dirname(__DIR__) . '/config/init.php';
require_once LIBS . '/functions.php';

$app = new \webShop\App();
debug(\webShop\App::$app->getProperties());