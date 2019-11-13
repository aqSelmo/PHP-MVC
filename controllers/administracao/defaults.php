<?php
namespace Guilherme\Administracao\Controllers;
use Guilherme\Classes\Render;
session_start();

class Defaults {
	
	public function __construct()
	{
		if(!isset($_SESSION['admin'])){
			header("Location: /administracao/login");
		}
		$url = explode("/", $_SERVER['REQUEST_URI']);
		$controller = (isset($url[2]) && $url[2] ? ucfirst($url[2]) : "Dashboard");
		define("CONTROLLER", $controller);
	}
	
	public function upload($args)
	{
		$uploads = "C:/xampp/htdocs/uploads/";
		$src = uniqid() . "." . pathinfo($args['name'], PATHINFO_EXTENSION);
		
		if(move_uploaded_file($args['tmp_name'], $uploads . $src)){
			return $src;
		}
	}
}