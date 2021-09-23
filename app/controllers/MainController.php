<?php


namespace app\controllers;


use RedBeanPHP\R;
use webShop\Cache;

class MainController extends AppController {

	public function indexAction() {
		$posts = R::findAll('test');
		$post = R::findOne('test', 'id = ?', [2]);
		$this->setMeta('Главная страница', 'Описание...', 'Ключевики');
		$name = 'John';
		$age = 30;
		$names = ['Andre', 'Jane', 'Mike'];
		$cache = Cache::instance();
//		$cache->delete('test');
		$data = $cache->get('test');
		if (!$data) {
			$cache->set('test', $names);
		}
		debug($data);
		$this->set(compact('name', 'age', 'names', 'posts'));
	}

}