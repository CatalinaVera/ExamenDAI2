<?php
    include_once('Conexion.php');
    include_once('Mensaje.php');

    class MensajeModelo
    {
        private $conexion;

        public function __construct()
        {
            $this -> setConexion(new Conexion());
        }

        public function setConexion($conexion)
        {
            $this -> conexion = $conexion;
        }

        public function getConexion()
        {
            return $this -> conexion;
        }

        public function RegistrarMensaje(Mensaje $mes)
        {
            try
            { 
                $sql = "INSERT INTO resultado VALUES(default,?,?,?,?)";
                $this -> getConexion()->getPdo()->prepare($sql)->execute(array(
                $mes -> getId_mensaje_mes(),
                $mes -> getNombre_mensaje_mes(),
                $mes -> getCorreo_mensaje_mes(),
                $mes -> getMensaje_mensaje_mes(),
                $mes -> getActivo_mensaje_mes()
                ));
            }
            catch (Exception $e) 
            {
               die($e->getMessage());
            }
        }

        public function ListarMensaje()
        {
            try 
            {
                $resultado = array();
                $sql = "SELECT * FROM mensaje";
                $stm = $this->getConexion()->getPDO()->prepare($sql);
                $stm -> execute();
                foreach($stm -> fetchALL(PDO::FETCH_OBJ)as $r)
                {
                    $mensaje = new Mensaje(
                        $r->id_mensaje,
                        $r->nombre_mensaje,
                        $r->correo_mensaje,
                        $r->mensaje_mensaje,
                        $r->activo_mensaje
                        );
                    $resultado[]=$mensaje;
                }
                return $resultado;
            } 
            catch (Exception $e) 
            {
                die($e->getMessage());
            }
        }
    }
?>