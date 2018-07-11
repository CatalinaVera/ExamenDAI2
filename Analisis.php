<?php

class Analisis{

	private $id_analisis;
    private $nombre_analisis;
    private $activo_analisis;
	
	public function __construct ($id_analisis, $nombre_analisis, $activo_analisis)
	{
        $this -> setId_analisis($id_analisis);
        $this -> setNombre_analisis($nombre_analisis);
        $this -> setActivo_analisis($activo_analisis);
	}

	public function setId_analisis($id_analisis)
	{
		$this -> id_analisis = $id_analisis;
    }

    public function setNombre_analisis($nombre_analisis)
	{
		$this -> nombre_analisis = $nombre_analisis;
    }

    public function setActivo_analisis($activo_analisis)
	{
		$this -> activo_analisis = $activo_analisis;
    }

	public function getId_analisis()
	{
		return $this -> id_analisis;
    }

    public function getNombre_analisis()
	{
		return $this -> nombre_analisis;
    }

    public function getActivo_analisis()
	{
		return $this -> activo_analisis;
    }

}

?>