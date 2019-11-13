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
		return $this->row("SELECT * FROM administracao WHERE id=:id", array(
			"id" => $args['id']
		));
	}
	
	public function salvar($args)
	{
		$this->query("INSERT INTO administracao (id, title, address, avatar, email, password, permissao) VALUES (:id, :title, :address, :avatar, :email, :password, :permissao) ON DUPLICATE KEY UPDATE title = :title, address = :address, avatar = :avatar, email = :email, password = :password, permissao = :permissao", $args);
	}
	
}