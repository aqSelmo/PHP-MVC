<?php
namespace Guilherme\Home\Controllers;
use Guilherme\Classes\Render;
use Guilherme\Home\Models\Dashboard as Model;
use Guilherme\Home\Controllers\Defaults;

class Dashboard extends Defaults{
	
	private $model;
	
	public function __construct()
	{
		parent::__construct();
		$this->model = new Model;
	}
	
	public function index($args=null)
	{
		Render::load("home/dashboard", array());
	}
	
}