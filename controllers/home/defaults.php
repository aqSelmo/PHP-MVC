<?php
namespace Guilherme\Home\Controllers;
use Guilherme\Classes\Render;

class Defaults {
	
	public function __construct()
	{
		define("URL", $_SERVER['REQUEST_URI']);
	}
	
}