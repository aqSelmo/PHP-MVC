<?php

namespace Guilherme\Classes;

class Router {
	private $url;
	private $folder;
	private $controller;
	private $method;
	private $args;
	
	public function __construct()
	{
		$this->init();
		$classe = new $this->controller;
		call_user_func_array(array($classe, $this->method), array($this->args));
	}
	
	private function init()
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