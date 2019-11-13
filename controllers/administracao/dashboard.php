<?php
namespace Guilherme\Administracao\Controllers;
use Guilherme\Classes\Render;
use Guilherme\Administracao\Models\Dashboard as Model;
use Guilherme\Administracao\Controllers\Defaults;

class Dashboard extends Defaults{
	
	private $model;
	
	public function __construct()
	{
		parent::__construct();
		$this->model = new Model;
	}
	
	public function index($args=null)
	{
		Render::load("administracao/dashboard", array(
			"administrador" => $this->model->administrador()
		));
	}
	
}