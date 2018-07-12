<?php
    include_once('Conexion.php');
    include_once('Contacto.php');

    class ContactoModelo
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

        public function RegistrarContacto(Contacto $con)
        {
            try
            { 
                $sql = "INSERT INTO contacto VALUES(?,?,?,?,?,?)";
                $this -> getConexion()->getPdo()->prepare($sql)->execute(array(
                $con -> getRun_contacto_con(),
                $con -> getNombre_contacto_con(),
                $con -> getCorreo_contacto_con(),
                $con -> getTelefono_contacto_con(),
                $con -> getId_empresa_contacto_con(),
                $con -> getActivo_contacto_con()
                ));
            }
            catch (Exception $e) 
            {
               die($e->getMessage());
            }
        }

        public function ListarContacto()
        {
            try 
            {
                $resultado = array();
                $sql = "SELECT * FROM contacto";
                $stm = $this->getConexion()->getPDO()->prepare($sql);
                $stm -> execute();
                foreach($stm -> fetchALL(PDO::FETCH_OBJ)as $r)
                {
                    $contacto = new Contacto(
                        $r->run_contacto,
                        $r->nombre_contacto,
                        $r->correo_contacto,
                        $r->telefono_contacto,
                        $r->id_empresa_contacto,
                        $r->activo_contacto
                        );
                    $resultado[]=$contacto;
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