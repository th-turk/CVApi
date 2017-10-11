<?php

namespace CVApi\Contracts;

interface QueryBuilderContract
{
	public function grayscale();
	

	public function bgr();
	public function rgb();
	public function hsv();
	public function histogram();
	public function imageChannels($array = []);
	public function translate($x, $y);
	public function rotate();
	public function advRotate();
	public function scale();
	public function resize();
	public function crop();
	public function brightness();
	public function darkness();
	public function blurring();
	public function sharpening();
	public function threshold();

	public function dilate();
	public function erode();
	public function opening();
	public function closing();
	public function morphGradient();
	public function topHat();
	public function blackHat();
	public function pyrUp($times = 1);
	public function pyrDown($times = 1);
}
