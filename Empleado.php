<?php

class Empleado{

	private $run_empleado;
	private $nombre_empleado;
    private $clave_empleado;
    private $categoria_empleado;
    private $actvio_empleado;
	
	public function __construct ($run_empleado, $nombre_empleado, $clave_empleado, $categoria_empleado, $activo_empleado)
	{
        $this -> setRun_empleado($run_empleado);
        $this -> setNombre_empleado($nombre_empleado);
        $this -> setClave_empleado($clave_empleado);
        $this -> setCategoria_empleado($categoria_empleado);
        $this -> setActivo_empleado($activo_empleado);
	}

	public function setRun_particular($run_particular)
	{
		$this -> run_particular = $run_particular;
    }

    public function setNombre_empleado($nombre_empleado)
	{
		$this -> nombre_empleado = $nombre_empleado;
    }

    public function setClave_empleado($clave_empleado)
	{
		$this -> clave_empleado = $clave_empleado;
    }

    public function setCategoria_empleado($categoria_empleado)
	{
		$this -> categoria_empleado = $categoria_empleado;
    }

    public function setActivo_empleado($activo_empleado)
	{
		$this -> activo_empleado = $activo_empleado;
    }

	public function getRun_empleado()
	{
		return $this -> run_empleado;
    }

    public function getNombre_empleado()
	{
		return $this -> nombre_empleado;
    }

    public function getClave_empleado()
	{
		return $this -> clave_empleado;
    }

    public function getCategoria_empleado()
	{
		return $this -> categoria_empleado;
    }

    public function getActivo_empleado()
	{
		return $this -> activo_empleado;
    }

}

?>