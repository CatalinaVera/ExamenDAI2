<?php
    include_once('Conexion.php');
    include_once('Muestra.php');

    class MuestraModelo
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

        public function RegistrarMuestra(Muestra $mue)
        {
            try
            { 
                $sql = "INSERT INTO muestra VALUES(default,?,?,?,?,?,?,?,?)";
                $this -> getConexion()->getPdo()->prepare($sql)->execute(array(
                $mue -> getId_muestra_mue(),
                $mue -> getFecha_muestra_mue(),
                $mue -> getTemp_muestra_mue(),
                $mue -> getCantidad_muestra_mue(),
                $mue -> getEstado_muestra_mue(),
                $mue -> getIdemp_muestra_mue(),
                $mue -> getIdpar_muestra_mue(),
                $mue -> getRunemp_muestra_mue(),
                $mue -> getActivo_resultado_res()
                ));
            }
            catch (Exception $e) 
            {
               die($e->getMessage());
            }
        }

        public function ModificarMuestra(Muestra $mue)
        {
            try 
            {
                $sql = "UPDATE muestra SET estado_muestra = ?  WHERE id_muestra = ?";
                $stm = $this->getConexion()->getPDO()->prepare($sql);
                $stm -> execute(array($emp->getEstado_muestra(),$emp->getId_muestra()));
            }
            catch (Exception $e) 
            {
                die($e->getMessage());
            }
        }

        public function ListarMuestra()
        {
            try 
            {
                $resultado = array();
                $sql = "SELECT * FROM muestra";
                $stm = $this->getConexion()->getPDO()->prepare($sql);
                $stm -> execute();
                foreach($stm -> fetchALL(PDO::FETCH_OBJ)as $r)
                {
                    $muestra = new Muestra(
                        $r->id_muestra,
                        $r->fecha_muestra,
                        $r->temp_muestra,
                        $r->cantidad_muestra,
                        $r->estado_muestra,
                        $r->idemp_muestra,
                        $r->idpar_muestra,
                        $r->runemp_muestra,
                        $r->activo_resultado);
                    $resultado[]=$resultado;
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