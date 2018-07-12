<?php
    include_once('Conexion.php');
    include_once('Empresa.php');

    class EmpresaModelo
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

        public function RegistrarEmpresa(Empresa $empr)
        {
            try
            { 
                $sql = "INSERT INTO empresa VALUES(default,?,?,?,?,?)";
                $this -> getConexion()->getPdo()->prepare($sql)->execute(array(
                $empr -> getid_empresa_empr(),
                $empr -> getRut_empresa_empr(),
                $empr -> getNombre_empresa_empr(),
                $empr -> getClave_empresa_empr(),
                $empr -> getDireccion_empresa_empr(),
                $empr -> getActivo_empresa_empr()
                ));
            }
            catch (Exception $e) 
            {
               die($e->getMessage());
            }
        }

        public function ObtenerEmpresaRut($rut)
        {
            try 
            {
                $sql = "SELECT * FROM empresa WHERE rut_empresa = ?";
                $stm = $this->getConexion()->getPDO()->prepare($sql);
                $stm -> execute(array($rut));
                $r = $stm -> fetch(PDO::FETCH_OBJ);
                $empresa = new Empresa(
                    $r->id_empresa,
                    $r->rut_empresa,
                    $r->nombre_empresa,
                    $r->clave_empresa,
                    $r->direccion_empresa,
                    $r->activo_empresa);

                return $empresa;
            }
            catch (Exception $e) 
            {
                die($e->getMessage());
            }
        }

        public function ObtenerEmpresaNombre($nomE)
        {
            try 
            {
                $sql = "SELECT * FROM empresa WHERE nombre_empresa = ?";
                $stm = $this->getConexion()->getPDO()->prepare($sql);
                $stm -> execute(array($nomE));
                $r = $stm -> fetch(PDO::FETCH_OBJ);
                $empresa = new Empresa(
                    $r->id_empresa,
                    $r->rut_empresa,
                    $r->nombre_empresa,
                    $r->clave_empresa,
                    $r->direccion_empresa,
                    $r->activo_empresa);

                return $empresa;
            }
            catch (Exception $e) 
            {
                die($e->getMessage());
            }
        }

        public function bajaEmpresa($rut)
        {
            try 
            {
                $sql = "UPDATE empresa SET activo_empresa = 0 WHERE rut_empresa = $rut";
                $stm = $this->getConexion()->getPDO()->prepare($sql);
            }
            catch (Exception $e) 
            {
                die($e->getMessage());
            }
        }

        public function ActualizarEmpresa(Empresa $empr)
        {
            try 
            {
                $sql = "UPDATE empresa SET clave_empresa = ?, direccion_empresa = ?  WHERE rut_empresa = ?";
                $stm = $this->getConexion()->getPDO()->prepare($sql);
                $stm -> execute(array($empr->getClave_empresa(), $empr->getDireccion_empresa(), $empr->getRut_empresa()));
            }
            catch (Exception $e) 
            {
                die($e->getMessage());
            }
        }

        public function ListarEmpresa()
        {
            try 
            {
                $resultado = array();
                $sql = "SELECT * FROM empresa";
                $stm = $this->getConexion()->getPDO()->prepare($sql);
                $stm -> execute();
                foreach($stm -> fetchALL(PDO::FETCH_OBJ)as $r)
                {
                    $empresa = new Empresa(
                        $r->id_empresa, 
                        $r->rut_empresa,
                        $r->nombre_empresa,
                        $r->clave_empresa,
                        $r->direccion_empresa,
                        $r->activo_empresa);
                    $resultado[]=$empresa;
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