<?php

class Particular{

	private $id_particular;
	private $run_particular;
	private $clave_particular;
	private $nombre_particular;
	private $direccion_particular;
	private $correo_particular;
	private $telefono_particular;
	private $actvio_particular;
	
	public function __construct ($id_particular, $run_particular, $clave_particular, $nombre_particular, $direccion_particular, $correo_particular, $telefono_particular, $activo_particular)
	{
		$this -> setId_particular($id_particular);
		$this -> setRun_particular($run_particular);
		$this -> setClave_particular($clave_particular);
		$this -> setNombre_particular($nombre_particular);
		$this -> setDireccion_particular($direccion_particular);
		$this -> setCorreo_particular($correo_particular);
		$this -> setTelefono_particular($telefono_particular);
		$this -> setActivo_particular($activo_particular);
	}

	public function setId_particular($id_particular)
	{
		$this -> id_particular = $id_particular;
    }

	public function setRun_particular($run_particular)
	{
		$this -> run_particular = $run_particular;
    }
    
    public function setClave_particular($clave_particular)
	{
		$this -> clave_particular = $clave_particular;
	}
	
	public function setNombre_particular($nombre_particular)
	{
		$this -> nombre_particular = $nombre_particular;
	}
	
	public function setDireccion_particular($direccion_particular)
	{
		$this -> direccion_particular = $direccion_particular;
	}
	
	public function setCorreo_particular($correo_particular)
	{
		$this -> correo_particular = $correo_particular;
	}
	
	public function setTelefono_particular($telefono_particular)
	{
		$this -> telefono_particular = $telefono_particular;
	}
	
	public function setActivo_particular($activo_particular)
	{
		$this -> activo_particular = $activo_particular;
	}
	
	public function getId_particular()
	{
		return $this -> id_particular;
    }

	public function getRun_particular()
	{
		return $this -> run_particular;
    }
    
    public function getClave_particular()
	{
		return $this -> clave_particular;
	}
	
	public function getNombre_particular()
	{
		return $this -> nombre_particular;
	}
	
	public function getDireccion_particular()
	{
		return $this -> direccion_particular;
	}
	
	public function getCorreo_particular()
	{
		return $this -> correo_particular;
	}
	
	public function getTelefono_particular()
	{
		return $this -> telefono_particular;
	}
	
	public function getActivo_particular()
	{
		return $this -> activo_particular;
	}

}

?>