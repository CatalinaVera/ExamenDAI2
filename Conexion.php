<?php
class Conexion
{
	private $pdo;

	public function __construct()
	{
		try 
		{
			$this -> setPdo(new PDO('mysql:host=localhost;dbname=EXAMEN','root','',array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET  NAMES utf8")));
			$this -> getPdo()->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
		 catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function setPdo($pdo)
	{
		$this -> pdo = $pdo;
	}

	public function getPdo()
	{
		return $this -> pdo;
	}
}
?>