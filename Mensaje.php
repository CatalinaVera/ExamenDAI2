<?php

class Mensaje{

	private $id_mensaje;
    private $nombre_mensaje;
    private $correo_mensaje;
    private $mensaje_mensaje;
    private $activo_mensaje;

	public function __construct ($id_mensaje, $nombre_mensaje, $correo_mensaje, $mensaje_mensaje, $activo_mensaje)
	{
		$this -> setId_mensaje($id_mensaje);
        $this -> setNombre_mensaje($nombre_contacto);
        $this -> setCorrreo_mensaje($correo_contacto);
        $this -> setMensaje_mensaje($mensaje_contacto);
        $this -> setActivo_contacto($activo_contacto);
	}

	public function setId_mensaje($id_mensaje)
	{
		$this -> id_mensaje = $id_mensaje;
    }
    
    public function setNombre_mensaje($nombre_mensaje)
	{
		$this -> nombre_mensaje = $nombre_mensaje;
    }

    public function setCorrreo_mensaje($correo_mensaje)
	{
		$this -> correo_mensaje = $correo_mensaje;
    }
    
    public function setMensaje_mensaje($mensaje_mensaje)
	{
		$this -> mensaje_mensaje = $mensaje_mensaje;
    }
    
    public function setActivo_mensaje($activo_mensaje)
	{
		$this -> activo_mensaje = $activo_mensaje;
	}

	public function getId_mensaje()
	{
		return $this -> id_mensaje;
    }
    
    public function getNombre_mensaje()
	{
		return $this -> nombre_mensaje;
    }

    public function getCorreo_mensaje()
	{
		return $this -> correo_mensaje;
    }

    public function getMensaje_mensaje()
	{
		return $this -> mensaje_mensaje;
    }

    public function getId_empresa_contacto()
	{
		return $this -> id_empresa_contacto;
    }

    public function getActivo_mensaje()
	{
		return $this -> activo_mensaje;
	}
}

?>