<?php


namespace CVApi;

use CVApi\RequestController;

class CVApi extends RequestController
{

	private static $_instance = null;

	public static function start()
	{
		if (self::$_instance === null) {
            self::$_instance = new self;
        }

		return self::$_instance;
	}

	public function grayscale()
	{
		$this->options .= 'grayscale:true|';
		return $this;
	}

	public function resize()
	{
		$this->options .= 'resize:fx=0.5,fy=0.4|';
		return $this;
	}

	public function put($images = null, $postFieldName = 'image', $mime = 'image/png')
	{
		$this->resources($images, $postFieldName, $mime);
		$this->sendPostRequest();

		return $this;
	}

	public function results()
	{
		return $this->getResult();
	}
}