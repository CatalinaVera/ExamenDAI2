<?php

include_once('empleadoModelo.php');
include_once('empleado.php');


$modeloEmpleado = new empleadoModelo();
$lista = $modeloEmpleado -> ListarEmpleado();

if (isset($_POST['Cerrar']))
{
	session_destroy();
	header("Location: http://localhost/examendai2/index.html");
}

if (isset($_POST['Registrar']))
{
	$empleado = new Empleado($_POST['txtRun'],$_POST['txtNombre'],$_POST['txtClave'],$_POST['txtCategoria'],1);
	$modeloEmpleado->RegistrarEmpleado($empleado);
    header("Location: http://localhost/examendai2/perfilAdministrador.php");
}

?>