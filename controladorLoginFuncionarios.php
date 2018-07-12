<?php

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
		header("Status: 301 Moved Permanently");
		header("Location: http://localhost/examendai2/usuarioNoExiste.html");
		exit;
	}
	
}

?>