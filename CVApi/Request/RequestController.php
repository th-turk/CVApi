<?php

namespace CVApi\Request;

use \CurlFile;

class RequestController 
{	

	public $options = "";
	protected $data = [];
	public $result = [];
	public $image;

	public function __construct()
	{
		$this->getConfigFile();
	}

	public function resources($images = null, $postFieldName = 'image', $mime = 'image/png')
	{
		if ($images !== null) {

			for ($i = 0; $i < count($images); $i++) {
				$cfile = new CURLFile($this->path . $images[$i], $mime, 'image'); 
				$this->data[] = array("image" => $cfile, 'options' => $this->options);
				
			}
		}

		else if (is_array($_FILES[$postFieldName]["name"])) {
			for($i = 0; $i < count($_FILES[$postFieldName]["name"]); $i++) {
				$file = $_FILES[$postFieldName];
				$cfile = new CURLFile($file["tmp_name"][$i], $file["type"][$i], $file["name"][$i]);
				$this->data[] = array("image" => $cfile, 'options' => $this->options);
			}
		} 

		else if (isset($_FILES[$postFieldName])) {
			$file = $_FILES[$postFieldName];
			$cfile = new CURLFile($file["tmp_name"], $file["type"], $file["name"]);
			$this->data[] = array("image" => $cfile, 'options' => $this->options);
		}
	}

	public function sendPostRequest()
	{
		$ch = curl_init();            
        curl_setopt($ch, CURLOPT_URL, $this->route);
        curl_setopt($ch, CURLOPT_POST , $this->isPost);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        for($i = 0; $i < count($this->data); $i++) {
        	curl_setopt($ch, CURLOPT_POSTFIELDS, $this->data[$i]);
        	$this->result[] = curl_exec($ch);
        }
  
        curl_error($ch);
        curl_close($ch);
	}

	public function getResult()
	{
		return $this->result;
	}

}