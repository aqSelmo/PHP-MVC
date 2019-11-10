<?php
namespace Guilherme\Administracao\Controllers;
use Guilherme\Classes\Render;
use Guilherme\Administracao\Models\Usuarios as Model;
use Guilherme\Administracao\Controllers\Defaults;

class Usuarios extends Defaults{
	
	private $model;
	
	public function __construct()
	{
		parent::__construct();
		$this->model = new Model;
	}
	
	public function index($args=null)
	{
		Render::load("administracao/usuarios", array(
			"administrador" => $this->model->administrador()
		));
	}

}