<?php

class Muestra{

	private $id_muestra;
    private $fecha_muestra;
    private $temp_muestra;
    private $cantidad_muestra;
    private $estado_muestra;
    private $idemp_muestra;
    private $idpar_muestra;
    private $runemp_muestra;
    private $activo_muestra;
	
	public function __construct ($id_muestra, $fecha_muestra, $temp_muestra, $cantidad_muestra, $estado_muestra, $idemp_muestra, $idpar_muestra, $runemp_muestra, $activo_muestra)
	{
        $this -> setId_muestra($id_muestra);
        $this -> setFecha_muestra($fecha_muestra);
        $this -> setTemp_muestra($temp_muestra);
        $this -> setCantidad_muestra($cantidad_muestra);
        $this -> setEstado_muestra($estado_muestra);
        $this -> setIdemp_muestra($idemp_muestra);
        $this -> setIdpar_muestra($idpar_muestra);
        $this -> setRunemp_muestra($runemp_muestra);
        $this -> setActivo_muestra($activo_muestra);
	}

	public function setId_muestra($id_muestra)
	{
		$this -> id_muestra = $id_muestra;
    }

    public function setFecha_muestra($fecha_muestra)
	{
		$this -> fecha_muestra = $fecha_muestra;
    }

    public function setTemp_muestra($temp_muestra)
	{
		$this -> temp_muestra = $temp_muestra;
    }

    public function setCantidad_muestra($cantidad_muestra)
	{
		$this -> cantidad_muestra = $cantidad_muestra;
    }

    public function setEstado_muestra($estado_muestra)
	{
		$this -> estado_muestra = $estado_muestra;
    }

    public function setIdemp_muestra($idemp_muestra)
	{
		$this -> idemp_muestra = $idemp_muestra;
    }

    public function setIdpar_muestra($idpar_muestra)
	{
		$this -> idpar_muestra = $idpar_muestra;
    }

    public function setRunemp_muestra($runemp_muestra)
	{
		$this -> runemp_muestra = $runemp_muestra;
    }

    public function setActivo_muestra($activo_muestra)
	{
		$this -> activo_muestra = $activo_muestra;
    }

	public function getId_muestra()
	{
		return $this -> id_muestra;
    }

    public function getFecha_muestra()
	{
		return $this -> fecha_muestra;
    }

    public function getTemp_muestra()
	{
		return $this -> temp_muestra;
    }

    public function getCantidad_muestra()
	{
		return $this -> cantidad_muestra;
    }

    public function getEstado_muestra()
	{
		return $this -> estado_muestra;
    }

    public function getIdemp_muestra()
	{
		return $this -> idemp_muestra;
    }

    public function getIdpar_muestra()
	{
		return $this -> idpar_muestra;
    }

    public function getRunemp_muestra()
	{
		return $this -> runemp_muestra;
    }

    public function getActivo_muestra()
	{
		return $this -> activo_muestra;
    }

}

?>