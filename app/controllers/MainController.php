<?php


namespace app\controllers;


use RedBeanPHP\R;

class MainController extends AppController {

	public function indexAction() {
		$posts = R::findAll('test');
		$post = R::findOne('test', 'id = ?', [2]);
		debug($post);
		$this->setMeta('Главная страница', 'Описание...', 'Ключевики');
		$name = 'John';
		$age = 30;
		$names = ['Andre', 'Jane'];
		$this->set(compact('name', 'age', 'names', 'posts'));
	}

}