<?php
    include_once('Conexion.php');
    include_once('Empleado.php');
    
    class EmpleadoModelo
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

        public function RegistrarEmpleado(Empleado $emp)
        {
            try
            { 
                $sql = "INSERT INTO empleado VALUES(?,?,?,?,?)";
                $this -> getConexion()->getPdo()->prepare($sql)->execute(array(
                $emp -> getRun_empleado_emp(),
                $emp -> getNombre_empleado_emp(),
                $emp-> getClave_empleado_emp(),
                $emp -> getCategoria_empleado_emp(),
                $emp -> getActivo_empleado_emp()
                ));
            }
            catch (Exception $e) 
            {
               die($e->getMessage());
            }
        }

        public function ObtenerEmpleado($run)
        {
            try 
            {
                $sql = "SELECT * FROM empleado WHERE run_empleado = ?";
                $stm = $this->getConexion()->getPDO()->prepare($sql);
                $stm -> execute(array($run));
                $r = $stm -> fetch(PDO::FETCH_OBJ);
                $empleado = new Empleado(
                    $r->run_empleado,
                    $r->nombre_empleado,
                    $r->clave_empleado,
                    $r->categoria_empleado,
                    $r->activo_empleado);

                return $empleado;
            }
            catch (Exception $e) 
            {
                die($e->getMessage());
            }
        }

        public function bajaEmpleado($run)
        {
            try 
            {
                $sql = "UPDATE empleado SET activo_empleado = 0 WHERE run_empleado = $run";
                $stm = $this->getConexion()->getPDO()->prepare($sql);
            }
            catch (Exception $e) 
            {
                die($e->getMessage());
            }
        }

        public function ActualizarEmpleado(Empleado $emp)
        {
            try 
            {
                $sql = "UPDATE empleado SET clave_empleado = ?  WHERE run_empleado = ?";
                $stm = $this->getConexion()->getPDO()->prepare($sql);
                $stm -> execute(array($emp->getClave_empleado(),$emp->getRun_empleado()));
            }
            catch (Exception $e) 
            {
                die($e->getMessage());
            }
        }

        public function ListarEmpleado()
        {
            try 
            {
                $resultado = array();
                $sql = "SELECT * FROM empleado";
                $stm = $this->getConexion()->getPDO()->prepare($sql);
                $stm -> execute();
                foreach($stm -> fetchALL(PDO::FETCH_OBJ)as $r)
                {
                    $empleado = new Empleado(
                        $r->run_empleado, 
                        $r->nombre_empleado,
                        $r->clave_empleado,
                        $r->categoria_empleado, 
                        $r->activo_empleado);
                    $resultado[]=$empleado;
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