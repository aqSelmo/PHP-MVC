<?php

namespace Guilherme\Classes;

class Router {
	public $url;
	public $folder;
	public $controller;
	public $method;
	public $args;
	
	public function __construct()
	{
		$this->init();
		$c = new $this->controller;
		call_user_func_array(array($c, $this->method), array($this->args));
	}
	
	public function init()
	{
			$url = explode("/", trim($_SERVER['REQUEST_URI']));
			$folder = (isset($url[1]) && $url[1] ? ucfirst($url[1]) : 'Home');
			$controller = (isset($url[2]) ? 'Guilherme\\' . $folder . '\\Controllers\\' . ucfirst($url[2]) : 'Guilherme\\' . $folder .'\\Controllers\\Dashboard');
			$method = (isset($url[3]) ? ucfirst($url[3]) : 'index');
			$args = (isset($url[4]) ? filter_var($url[4], FILTER_SANITIZE_SPECIAL_CHARS) : NULL);

			$this->url = $url;
			$this->folder = $folder;
			if(class_exists($controller)){
				$this->controller = $controller;
				$this->method = $method;
			} else {
				header("Location: /home");
			}
			
			$this->args = $args;	
	}
	
}