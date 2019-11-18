<?php
namespace Guilherme\Home\Controllers;
use Guilherme\Classes\Render;
use Guilherme\Home\Models\Defaults as Model;

class Defaults {
	private $model;
	
	public function __construct()
	{
		$args = array(
			"ip" => $_SERVER['REMOTE_ADDR'],
			"url" => $_SERVER['REQUEST_URI']
		);
		
		$this->model = new Model;
		$this->model->visitas($args);
	}
	
}