<?php
namespace Guilherme\Classes;
use \PDO;

class Db extends PDO{
	
	private $conn;
	
	public function __construct()
	{
		$this->conn = new PDO("mysql:host=localhost;dbname=guilhe04_bd01","guilhe04_admin","#9$3HXFp[Pyv", array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
	}
	private function setParams($statment, $parameters = array())
	{
		foreach($parameters as $key => $value){
			
			$this->setParam($statment, $key, $value);
			
		}
	}
	
	private function setParam($statment, $key, $value)
	{
		$statment->bindParam($key, $value);
	}
	
	public function query($rawQuery, $params = array())
	{
		$stmt = $this->conn->prepare($rawQuery);
		
		$this->setParams($stmt, $params);
		
		$stmt->execute();
		
		return $stmt;
	}
	
	public function single($rawQuery, $params = array())
	{
		$stmt = $this->query($rawQuery, $params);
		
		return $stmt->fetchColumn();
	}
	
	public function row($rawQuery, $params = array())
	{
		$stmt = $this->query($rawQuery, $params);
		
		return $stmt->fetch();
	}
	
	public function select($rawQuery, $params = array())
	{
		$stmt = $this->query($rawQuery, $params);
		
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
}