<?php

namespace CVApi;

use CVApi\Config\Config;
use CVApi\QueryBuilder\QueryBuilder;
use CVApi\Request\RequestController;
use CVApi\Contracts\QueryBuilderContract;

class CVApi extends RequestController implements QueryBuilderContract
{
	use Config;
	use QueryBuilder;

	private static $_instance = null;
	public $images;

	public function results(callable $c)
	{
		$this->resources(self::$_instance->images, 'image', 'image/png');
		$this->sendPostRequest();
		$this->image = (json_decode($this->result[0]))->photo;
		if (is_callable($c)) {
			call_user_func($c, self::$_instance);
		}
	}

	public function save($name)
	{
		$data = base64_decode($this->image);
		file_put_contents($name, $data);
	}

	public static function __callStatic($method, $args)
	{
		if ($method === 'make')
		{
			if (self::$_instance === null)
            	self::$_instance = new self;
            	self::$_instance->images = [$args[0][0]];
            	return self::$_instance;
		}
	}
	
}