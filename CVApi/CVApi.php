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

	public function put($images = null, $postFieldName = 'image', $mime = 'image/png')
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

	public function grayscale()
	{
		$this->options .= 'grayscale|';
		return $this;
	}

	public function bgr()
	{
		$this->options .= 'bgr|';
		return $this;
	}

	public function rgb()
	{
		$this->options .= 'rgb|';
		return $this;
	}

	public function hsv()
	{
		$this->options .= 'hsv|';
		return $this;
	}

	public function histogram()
	{
		$this->options .= 'histogram|';
		return $this;
	}

	public function imageChannels($array = ['B', 'G', 'R'])
	{
		implode(';', $array);
		$this->options .= 'imageChannels:' . $array . '|';
		return $this;
	}

	public function translate($x, $y)
	{
		$this->options .= 'translate:x=' . $x . ';y=' . $y '|';
		return $this; 
	}

	public function rotate(/* calisalicak */)
	{
		return $this;
	}

	public function advRotate(/* calisalicak */)
	{
		return $this;
	}

	public function scale()
	{
		return $this;
	}

	public function resize()
	{
		return $this;
	}

	public function crop()
	{
		return $this;
	}

	public function brightness()
	{
		return $this;
	}

	public function darkness()
	{
		return $this;
	}

	public function blurring()
	{
		return $this;
	}

	public function sharpening()
	{
		return $this;
	}

	public function threshold()
	{
		return $this;
	}

	public function dilate()
	{
		return $this;
	}

	public function erode()
	{
		return $this;
	}

	public function opening()
	{
		return $this;
	}

	public function closing()
	{
		return $this;
	}

	public function pyrUp($times = 1)
	{
		$this->options .= 'pyrUp:' . $times . '|';
		return $this;
	}

	public function pyrDown($times = 1)
	{
		$this->options .= 'pyrDown' . $times . '|'; 
		return $this;
	}
}