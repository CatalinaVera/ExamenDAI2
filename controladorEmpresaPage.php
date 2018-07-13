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

?>