<?php

require_once dirname(__DIR__) . '/config/init.php';
require_once LIBS . '/functions.php';

new \webShop\App();

throw new Exception('Page is not found', 500);