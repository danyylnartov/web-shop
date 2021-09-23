<?php


namespace webShop\base;


use webShop\Db;

abstract class Model {

	public $attributes = [];
	public $errors = [];
	public $rules = [];

	public function __construct() {
		Db::instance();
	}

}