<?php
    include_once('Conexion.php');
    include_once('Analisis.php');
    include_once('ParticularModelo.php');
    include_once('EmpresaModelo.php');

    class AnalisisModelo
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

        public function RegistrarAnalisis(Analisis $ana)
        {
            try
            { 
                $sql = "INSERT INTO analisis VALUES(?,?,?)";
                $this -> getConexion()->getPdo()->prepare($sql)->execute(array(
                $ana -> getId_analisis_ana(),
                $ana -> getNombre_analisis_ana(),
                $ana -> getActivo_analisis_ana()
                ));
            }
            catch (Exception $e) 
            {
               die($e->getMessage());
            }
        }



        public function ListarAnalisis()
        {
            try 
            {
                $resultado = array();
                $sql = "SELECT * FROM analisis";
                $stm = $this->getConexion()->getPDO()->prepare($sql);
                $stm -> execute();
                foreach($stm -> fetchALL(PDO::FETCH_OBJ)as $r)
                {
                    $analisis = new Analisis(
                        $r->id_analisis,
                        $r->nombre_analisis,
                        $r->activo_analisis);
                    $resultado[]=$analisis;
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