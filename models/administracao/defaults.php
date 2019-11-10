<?php
namespace Guilherme\Administracao\Models;
use Guilherme\Classes\Db;

class Defaults extends Db {
	public function __construct()
	{
		parent::__construct();
	}
	
	public function administrador($args=null)
	{
		return $this->row("SELECT * FROM administracao WHERE id LIKE 1");
	}
	
}