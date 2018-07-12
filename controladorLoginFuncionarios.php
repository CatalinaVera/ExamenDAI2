<?php

if (isset($_POST['Ingresar']))
{
	if($_POST['txtUsuario']=='12345678-9' and $_POST['txtClave']=='123')
	{
        header("Status: 301 Moved Permanently");
		header("Location: http://localhost/examendai2/perfilAdministrador.html");
		exit;
	}
	else
	{
		header("Status: 301 Moved Permanently");
		header("Location: http://localhost/examendai2/usuarioNoExiste.html");
		exit;
	}
	
}

?>