<?php
include_once('empresaModelo.php');
include_once('empresa.php');


$modeloEmpresa = new empresaModelo();
$lista = $modeloEmpresa -> ListarEmpresa();

if (isset($_POST['Ingresar']))
{

        foreach($lista as $r)
        {
            $run = $r->getRut_empresa();
            $clave = $r->getClave_empresa();

            $run2 = $_POST['txtUsuario'];
            $clave2 = $_POST['txtClave'];
            
            if($run==$run)
            {
            	if($clave==$clave2)
            	{
            		session_start();
					$username = $_POST['txtUsuario'];

					$_SESSION['loggedin'] = true;
			        $_SESSION['username'] = $username;
            		header("Location: http://localhost/examendai2/perfilEmpresa.php");
            	}
            	
            } 
        }

}
	





?>