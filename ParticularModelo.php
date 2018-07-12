<?php
    include_once('Conexion.php');
    include_once('Particular.php');
    
    class ParticularModelo
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

        public function RegistrarParticular(Particular $par)
        {
            try
            { 
                $sql = "INSERT INTO particular VALUES(default,?,?,?,?,?,?,?)";
                $this -> getConexion()->getPdo()->prepare($sql)->execute(array(
                $par -> getId_particular_par(),
                $par -> getRun_particular_par(),
                $par -> getClave_particular_par(),
                $par -> getNombre_particular_par(),
                $par -> getDireccion_particular_par(),
                $par -> getCorreo_particular_par(),
                $par -> getTelefono_particular_par(),
                $par -> getActivo_particular_par()
                ));
            }
            catch (Exception $e) 
            {
               die($e->getMessage());
            }
        }

        public function ObtenerParticularRun($run)
        {
            try 
            {
                $sql = "SELECT * FROM particular WHERE run_particular = ?";
                $stm = $this->getConexion()->getPDO()->prepare($sql);
                $stm -> execute(array($run));
                $r = $stm -> fetch(PDO::FETCH_OBJ);
                $particular = new Particular(
                    $r->id_particular,
                    $r->run_particular,
                    $r->clave_particular,
                    $r->nombre_particular,
                    $r->direccion_particular,
                    $r->correo_particular,
                    $r->telefono_particular,
                    $r->activo_particular);

                return $particular;
            }
            catch (Exception $e) 
            {
                die($e->getMessage());
            }
        }

        public function ObtenerParticularNombre($nom)
        {
            try 
            {
                $sql = "SELECT * FROM particular WHERE nombre_particular = ?";
                $stm = $this->getConexion()->getPDO()->prepare($sql);
                $stm -> execute(array($nom));
                $r = $stm -> fetch(PDO::FETCH_OBJ);
                $particular = new Particulxar(
                    $r->id_particular,
                    $r->run_particular,
                    $r->clave_particular,
                    $r->nombre_particular,
                    $r->direccion_particular,
                    $r->correo_particular,
                    $r->telefono_particular,
                    $r->activo_particular);

                return $particular;
            }
            catch (Exception $e) 
            {
                die($e->getMessage());
            }
        }

        public function bajaParticular($run)
        {
            try 
            {
                $sql = "UPDATE particular SET activo_particular = 0 WHERE run_particular = $run";
                $stm = $this->getConexion()->getPDO()->prepare($sql);
            }
            catch (Exception $e) 
            {
                die($e->getMessage());
            }
        }

        public function ActualizarParticular(Particular $par)
        {
            try 
            {
                $sql = "UPDATE particular SET clave_particular = ?, direccion_particular = ?, correo_particular = ?, telefono_particular = ?  WHERE run_particular = ?";
                $stm = $this->getConexion()->getPDO()->prepare($sql);
                $stm -> execute(array($par->getClave_particular(), $par->getDireccion_particular(), $par->getCorreo_particular(), $par->getTelefono_particular(), $par->getRun_particular()));
            }
            catch (Exception $e) 
            {
                die($e->getMessage());
            }
        }

        public function ListarParticular()
        {
            try 
            {
                $resultado = array();
                $sql = "SELECT * FROM particular";
                $stm = $this->getConexion()->getPDO()->prepare($sql);
                $stm -> execute();
                foreach($stm -> fetchALL(PDO::FETCH_OBJ)as $r)
                {
                    $particular = new Particular(
                        $r->id_particular,
                        $r->run_particular,
                        $r->clave_particular,
                        $r->nombre_particular,
                        $r->direccion_particular,
                        $r->correo_particular,
                        $r->telefono_particular, 
                        $r->activo_particular);
                    $resultado[]=$particular;
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