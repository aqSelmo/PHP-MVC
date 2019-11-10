<?php
namespace Guilherme\Administracao\Controllers;
use Guilherme\Classes\Render;
use Guilherme\Administracao\Models\Perfil as Model;
use Guilherme\Administracao\Controllers\Defaults;
use Guilherme\Classes\Filter;

class Perfil extends Defaults{
	
	private $model;
	
	public function __construct()
	{
		parent::__construct();
		$this->model = new Model;
	}
	
	public function index($args=null)
	{
		Render::load("administracao/perfil", array(
			"administrador" => $this->model->administrador()
		));
	}
	
	public function alterar($args)
	{
		$args = array(
			"id" => Filter::sanitizeInt($args)
		);
		
		Render::load("administracao/perfil", array(
			"alterar" => $this->model->alterar($args)
		));
	}
	
}