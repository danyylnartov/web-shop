<?php


namespace webShop;


use RedBeanPHP\R;

class Db {

	use TSingletone;

	protected function __construct() {
		$db = require_once CONFIG . '/config_db.php';
		R::setup($db['dsn'], $db['user'], $db['pass']);
		if (!R::testConnection()) {
			throw new \Exception("Нет соединения с БД", 500);
		}
		R::freeze( true );
		if (DEBUG) {
			R::debug(true, 1);
		}

		R::ext('xdispense', function ($type) {
			return R::getRedBean()->dispense($type);
		});
	}

}