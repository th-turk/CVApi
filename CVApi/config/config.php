<?php

namespace CVApi\Config;

trait Config
{
	private $config = [];
	private $public_key;
	private $secret_key;
	private $password;
	protected $route;
	protected $isPost;
	protected $path;

	protected function getConfigFile()
	{
		$this->config = include 'config/config.php';
		$this->setPublicKey();
		$this->setSecretKey();
		$this->setPassword();
		$this->setRoute();
		$this->setIsPost();
		$this->setPath();
	}
	private function setPublicKey()
	{
		$this->public_key = $this->config['public_key'];
	}
	private function setSecretKey()
	{
		$this->secret_key = $this->config['secret_key'];
	}
	private function setPassword()
	{
		$this->password = $this->config['password'];
	}
	private function setRoute()
	{
		$this->route = $this->config['route'];
	}
	private function setIsPost()
	{
		$this->isPost = $this->config['isPost'];
	}
	private function setPath()
	{
		$this->path = $this->config['path'];
	}
}