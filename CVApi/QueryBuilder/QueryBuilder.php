<?php

namespace CVApi\QueryBuilder;

trait QueryBuilder
{
	public function grayscale()
	{
		$this->options .= 'grayscale|';
		return $this;
	}

	public function bgrToGray()
	{
		$this->options .= 'bgrToGray|';
		return $this;
	}

	public function grayToBgr()
	{
		$this->options .= 'grayToBgr|';
		return $this;
	}

	public function rgbToGray()
	{
		$this->options .= 'rgbToGray|';
		return $this;
	}

	public function grayToRgb()
	{
		$this->options .= 'grayToRgb|';
		return $this;
	}

	public function bgrToRgb()
	{
		$this->options .= 'bgrToRgb|';
		return $this;
	}

	public function rgbToBgr()
	{
		$this->options .= 'rgbToBgr|';
		return $this;
	}

	public function rgbToHsv()
	{
		$this->options .= 'rgbToHsv|';
		return $this;
	}

	public function bgrToHsv()
	{
		$this->options .= 'bgrToHsv|';
		return $this;
	}

	public function hsvToBgr()
	{
		$this->options .= 'hsvToBgr|';
		return $this;
	}

	public function hsvToRgb()
	{
		$this->options .= 'hsvToRgb|';
		return $this;
	}

	public function histogram($bean_size = 256, $range_min = 0, $range_max = 256)
	{
		$this->options .= 'histogram:' . $bean_size . ':' . $range_min . ':' . $range_max  .'|';
		return $this;
	}

	public function imageChannels($array = ['B', 'G', 'R'])
	{
		if (in_array('B', $array)) 
			$this->options .= 'blueChannel|';
		if (in_array('G', $array))
			$this->options .= 'greenChannel|';
		if (in_array('R', $array))
			$this->options .= 'redChannel|';
		return $this;
	}

	public function translate($x, $y)
	{
		$this->options .= 'translate:' . $x . ':' . $y . '|';
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

	public function dilate($kernel_size = 3, $iterations = 1)
	{
		$this->options .= 'dilate:' . $kernel_size . ':' . $iterations . '|';
		return $this;
	}

	public function erode($kernel_size = 3, $iterations = 1)
	{
		$this->options .= 'erode:' . $kernel_size . ':' . $iterations . '|';
		return $this;
	}

	public function opening($kernel_size = 3)
	{	
		$this->options .= 'opening:' . $kernel_size . '|';
		return $this;
	}

	public function closing($kernel_size = 3)
	{
		$this->options .= 'closing:' . $kernel_size . '|';
		return $this;
	}

	public function morphGradient($kernel_size = 3)
	{
		$this->options .= 'morphGradient:' . $kernel_size . '|';
		return $this;
	}

	public function topHat($kernel_size = 3)
	{
		$this->options .= 'topHat:' . $kernel_size . '|';
		return $this;
	}

	public function blackHat($kernel_size = 3)
	{
		$this->options .= 'blackHat:' . $kernel_size . '|';
		return $this;
	}

	public function pyrUp($times = 1)
	{
		$this->options .= 'pyrUp:' . $times . '|';
		return $this;
	}

	public function pyrDown($times = 1)
	{
		$this->options .= 'pyrDown:' . $times . '|'; 
		return $this;
	}
}