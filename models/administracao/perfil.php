<?php
namespace Guilherme\Administracao\Models;
use Guilherme\Administracao\Models\Defaults;

class Perfil extends Defaults {
	public function __construct()
	{
		parent::__construct();
	}
	
	public function listar($args)
	{
		return $this->select("SELECT * FROM administracao");
	}
	
	public function alterar($args)
	{
		return $this->row("SELECT * FROM administracao WHERE id=:id", $args);
	}
	
}