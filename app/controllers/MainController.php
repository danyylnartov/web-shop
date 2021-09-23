<?php


namespace app\controllers;


use RedBeanPHP\R;
use webShop\Cache;

class MainController extends AppController {

	public function indexAction() {
		$this->setMeta('Главная страница', 'Описание...', 'Ключевики');
	}

}