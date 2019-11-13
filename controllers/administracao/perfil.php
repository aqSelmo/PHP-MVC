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
	
	public function salvar($args)
	{
		$args = array(
			"id" => Filter::sanitizeInt($_POST['id']),
			"title" => Filter::sanitizeString($_POST['titulo']),
			"email" => Filter::sanitizeString($_POST['email']),
			"password" => Filter::sanitizeString($_POST['senha']),
			"address" => Filter::sanitizeString($_POST['endereco']),
			"avatar" => (isset($_FILES['avatar']) ? $this->upload($_FILES['avatar']) : NULL),
			"permissao" => Filter::sanitizeInt($_POST['permissao'])
		);
		
		Render::load("administracao/perfil", array(
			"salvar" => $this->model->salvar($args),
			"alterar" => $this->model->alterar($args),
			"status" => 1
		));
	}
	
}