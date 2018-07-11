<?php

class Resultado{

	private $id_resultado;
    private $fecha_resultado;
    private $ppm_resultado;
    private $comentario_resultado;
    private $runemp_resultado;
    private $idana_resultado;
    private $idmu_resultado;
    private $activo_resultado;
	
	public function __construct ($id_resultado, $fecha_resultado, $ppm_resultado, $comentario_resultado, $runemp_resultado, $idana_resultado, $idmu_resultado, $activo_resultado)
	{
        $this -> setId_resultado($id_resultado);
        $this -> setFecha_resultado($fecha_resultado);
        $this -> setPpm_resultado($ppm_resultado);
        $this -> setComentario_resultado($comentario_resultado);
        $this -> setRunemp_resultado($runemp_resultado);
        $this -> setIdana_resultado($idana_resultado);
        $this -> setIdmu_resultado($idmu_resultado);
        $this -> setActivo_resultado($activo_resultado);
	}

	public function setId_resultado($id_resultado)
	{
		$this -> id_resultado = $id_resultado;
    }

    public function setFecha_resultado($fecha_resultado)
	{
		$this -> fecha_resultado = $fecha_resultado;
    }

    public function setPpm_resultado($ppm_resultado)
	{
		$this -> ppm_resultado = $ppm_resultado;
    }

    public function setComentario_resultado($comentario_resultado)
	{
		$this -> comentario_resultado = $comentario_resultado;
    }

    public function setRunemp_resultado($runemp_resultado)
	{
		$this -> runemp_resultado = $runemp_resultado;
    }

    public function setIdana_resultado($idana_resultado)
	{
		$this -> idana_resultado = $idana_resultado;
    }

    public function setIdmu_resultado($idmu_resultado)
	{
		$this -> idmu_resultado = $idmu_resultado;
    }

    public function setActivo_resultado($activo_resultado)
	{
		$this -> activo_resultado = $activo_resultado;
    }

	public function getId_resultado()
	{
		return $this -> id_resultado;
    }

    public function getFecha_resultado()
	{
		return $this -> fecha_resultado;
    }

    public function getPpm_resultado()
	{
		return $this -> ppm_resultado;
    }

    public function getComentario_resultado()
	{
		return $this -> comentario_resultado;
    }

    public function getRunemp_resultado()
	{
		return $this -> runemp_resultado;
    }

    public function getIdana_resultado()
	{
		return $this -> idana_resultado;
    }

    public function getIdmu_resultado()
	{
		return $this -> idmu_resultado;
    }

    public function getActivo_resultado()
	{
		return $this -> activo_resultado;
    }

}

?>