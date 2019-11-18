<?php
namespace Guilherme\Home\Models;
use Guilherme\Classes\Db;

class Defaults extends Db {
	
	public function __construct()
	{
		parent::__construct();
	}
	
	public function visitas($args)
	{
		return $this->query("INSERT INTO visitas (ip, url) VALUES (:ip, :url)", $args);
	}
}