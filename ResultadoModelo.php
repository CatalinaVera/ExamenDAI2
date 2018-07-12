<?php
    include_once('Conexion.php');
    include_once('Resultado.php');

    class ResultadoModelo
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

        public function RegistrarResultado(Resultado $res)
        {
            try
            { 
                $sql = "INSERT INTO resultado VALUES(?,?,?,?,?,?,?,?)";
                $this -> getConexion()->getPdo()->prepare($sql)->execute(array(
                $par -> getId_resultado_res(),
                $par -> getFecha_resultado_res(),
                $par -> getPpm_resultado_res(),
                $par -> getComentario_resultado_res(),
                $par -> getRunemp_resultado_res(),
                $par -> getIdana_resultado_res(),
                $par -> getIdmu_resultado_res(),
                $par -> getActivo_resultado_res()
                ));
            }
            catch (Exception $e) 
            {
               die($e->getMessage());
            }
        }

        public function ListarResultado()
        {
            try 
            {
                $resultado1 = array();
                $sql = "SELECT * FROM resultado";
                $stm = $this->getConexion()->getPDO()->prepare($sql);
                $stm -> execute();
                foreach($stm -> fetchALL(PDO::FETCH_OBJ)as $r)
                {
                    $resultado = new Resultado(
                        $r->id_resultado,
                        $r->fecha_resultado,
                        $r->ppm_resultado,
                        $r->comentario_resultado,
                        $r->runemp_resultado,
                        $r->idana_resultado,
                        $r->idmu_resultado,
                        $r->activo_resultado);
                    $resultado1[]=$resultado;
                }
                return $resultado1;
            } 
            catch (Exception $e) 
            {
                die($e->getMessage());
            }
        }
    }
?>