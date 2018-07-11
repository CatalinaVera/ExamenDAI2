<?php

class Empresa{

	private $id_empresa;
	private $rut_empresa;
    private $nombre_empresa;
    private $clave_empresa;
    private $direccion_empresa;
    private $activo_empresa;

	public function __construct ($id_empresa, $rut_empresa, $nombre_empresa, $clave_empresa, $direccion_empresa, $activo_empresa)
	{
		$this -> setId_empresa($id_empresa);
        $this -> setRut_empresa($rut_empresa);
        $this -> setNombre_empresa($nombre_empresa);
        $this -> setClave_empresa($clave_empresa);
        $this -> setDireccion_empresa($direccion_empresa);
        $this -> setActivo_empresa($activo_empresa);
	}

	public function setId_empresa($id_empresa)
	{
		$this -> id_empresa = $id_empresa;
	}

	public function setRut_empresa($rut_empresa)
	{
		$this -> rut_empresa = $rut_empresa;
	}

	public function setNombre_empresa($nombre_empresa)
	{
		$this -> nombre_empresa = $nombre_empresa;
    }
    
    public function setclave_empresa($clave_empresa)
	{
		$this -> clave_empresa = $clave_empresa;
    }
    
    public function setDireccion_empresa($direccion_empresa)
	{
		$this -> direccion_empresa = $direccion_empresa;
    }
    
    public function setActivo_empresa($activo_empresa)
	{
		$this -> activo_empresa = $activo_empresa;
	}

	public function getId_empresa()
	{
		return $this -> id_empresa;
	}

	public function getRut_empresa()
	{
		return $this -> rut_empresa;
    }
    
    public function getNombre_empresa()
	{
		return $this -> nombre_empresa;
    }

    public function getClave_empresa()
	{
		return $this -> clave_empresa;
    }

    public function getDireccion_empresa()
	{
		return $this -> direccion_empresa;
    }

    public function getActivo_empresa()
	{
		return $this -> activo_empresa;
    }
    
}

?>