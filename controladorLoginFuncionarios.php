<?php
include_once('empleadoModelo.php');
include_once('empleado.php');


$modeloEmpleado = new empleadoModelo();
$lista = $modeloEmpleado -> ListarEmpleado();

if (isset($_POST['Ingresar']))
{
	if($_POST['txtUsuario']=='12345678-9' and $_POST['txtClave']=='123')
	{
		session_start();
		$username = $_POST['txtUsuario'];

		$_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;

		header("Location: http://localhost/examendai2/perfilAdministrador.php");
	}
	else
	{

        foreach($lista as $r)
        {
            $run = $r->getRun_empleado();
            $clave = $r->getClave_empleado();
            
            if($run == $_POST['txtUsuario'] and $clave==$_POST['txtClave'])
            {
            	if($r->getCategoria_empleado()=='Encargado de Recibir')
                 {
                    session_start();
					$username = $_POST['txtUsuario'];

					$_SESSION['loggedin'] = true;
			        $_SESSION['username'] = $username;

					header("Location: http://localhost/examendai2/perfilRecibir.php");
                 }
                 else
                 {
                 	session_start();
					$username = $_POST['txtUsuario'];

					$_SESSION['loggedin'] = true;
			        $_SESSION['username'] = $username;

					header("Location: http://localhost/examendai2/perfilAnalisis.php");
                 }
            }
            
        }


	}
	
}




?>