<?php

namespace Guilherme\Classes;

class Render {
	
	static function load($view, $args)
	{	
		extract($args);
		require_once __DIR__ . DIRECTORY_SEPARATOR . "../views/" . $view . '.php';
	}
}