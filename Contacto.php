<?php

class Contacto{

	private $run_contacto;
    private $nombre_contacto;
    private $correo_contacto;
    private $telefono_contacto;
    private $id_empresa_contacto;
    private $activo_contacto;

	public function __construct ($run_contacto, $nombre_contacto, $correo_contacto, $telefono_contacto, $id_empresa_contacto, $activo_contacto)
	{
		$this -> setRun_contacto($run_contacto);
        $this -> setNombre_contacto($nombre_contacto);
        $this -> setCorrreo_contacto($correo_contacto);
        $this -> setTelefono_contacto($telefono_contacto);
        $this -> setId_empresa_contacto($id_empresa_contacto);
        $this -> setActivo_contacto($activo_contacto);
	}

	public function setRun_contacto($run_contacto)
	{
		$this -> run_contacto = $run_contacto;
    }
    
    public function setNombre_contacto($nombre_contacto)
	{
		$this -> nombre_contacto = $nombre_contacto;
    }

    public function setCorreo_contacto($correo_contacto)
	{
		$this -> correo_contacto = $correo_contacto;
    }
    
    public function setTelefono_contacto($telefono_contacto)
	{
		$this -> telefono_contacto = $telefono_contacto;
    }
    
    public function setId_empresa_contacto($id_empresa_contacto)
	{
		$this -> id_empresa_contacto = $id_empresa_contacto;
    }
    
    public function setActivo_contacto($activo_contacto)
	{
		$this -> activo_contacto = $activo_contacto;
	}

	public function getRun_contacto()
	{
		return $this -> run_contacto;
    }
    
    public function getNombre_contacto()
	{
		return $this -> nombre_contacto;
    }

    public function getCorreo_contacto()
	{
		return $this -> correo_contacto;
    }

    public function getTelefono_contacto()
	{
		return $this -> telefono_contacto;
    }

    public function getId_empresa_contacto()
	{
		return $this -> id_empresa_contacto;
    }

    public function getActivo_contacto()
	{
		return $this -> activo_contacto;
	}
}

?>