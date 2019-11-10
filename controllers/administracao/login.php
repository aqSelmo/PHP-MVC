<?php
namespace Guilherme\Administracao\Controllers;
use Guilherme\Classes\Render;
use Guilherme\Classes\Filter;
use Guilherme\Administracao\Models\Login as Model;
use Guilherme\Administracao\Controllers\Defaults;
session_start();

class Login {
	
	private $model;
	
	public function __construct()
	{
		$this->model = new Model;
	}
	
	public function index($args=null)
	{
		Render::load("administracao/login", array(
			
		));
	}
	
	public function entrar($args=null)
	{
		$args = array(
			"email" => Filter::sanitizeEmail($_POST['email']),
			"password" => Filter::sanitizeString($_POST['password'])
		);
		
		$result = $this->model->entrar($args);
		
		if(isset($result) && $result) {
			$_SESSION['admin'] = $result['email'];
			$_SESSION['hash'] = $result['hash'];
			header("Location: /administracao");
		} else {
			Render::load("administracao/login", array(
				"status" => 2
			));
		}
	}
	
	public function sair($args=null)
	{
		$args = array(
			"hash" => $_SESSION['hash']
		);
		
		$this->model->sair($args);
		session_destroy();
		
		Render::load("administracao/login", array(
			"status" => 3
		));
	}
	
}