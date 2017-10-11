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

	public static function start()
	{
		if (self::$_instance === null) {
            self::$_instance = new self;
        }

		return self::$_instance;
	}

	public function images($images = null, $postFieldName = 'image', $mime = 'image/png')
	{
		$this->resources($images, $postFieldName, $mime);
		$this->sendPostRequest();

		return $this;
	}

	public function results(callable $c)
	{
		if (is_callable($c)) {
			call_user_func($c, self::$_instance);
		}
	}
}