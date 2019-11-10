<?php
namespace Guilherme\Administracao\Models;
use Guilherme\Administracao\Models\Defaults;

class Login extends Defaults{
	
	public function entrar($args)
	{
		if($args == NULL || !$args){
			return false;
		} else {
			
			$this->query("INSERT INTO sessions (a_id, email, hash) SELECT id, email, '".uniqid()."' FROM administracao WHERE email LIKE :email", array(
				"email" => $args['email']
			));
			
			return $this->row("SELECT a.email, b.hash FROM administracao a LEFT JOIN sessions b ON a.id = b.a_id WHERE a.email LIKE :email AND a.password LIKE :password LIMIT 1", array(
				"email" => $args['email'],
				"password" => $args['password']
			));
			
		}
		
	}
	
	public function sair($args)
	{
		return $this->query("DELETE FROM sessions WHERE hash LIKE :hash", $args);
	}
	
}