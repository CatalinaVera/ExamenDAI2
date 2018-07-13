<?php

if (isset($_POST['Cerrar']))
{
	session_destroy();
	header("Location: http://localhost/examendai2/index.html");
}

?>