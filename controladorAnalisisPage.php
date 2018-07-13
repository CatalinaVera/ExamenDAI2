<?php

include_once('resultadoModelo.php');
include_once('resultado.php');
include_once('muestraModelo.php');
include_once('muestra.php');
include_once('particularModelo.php');
include_once('particular.php');
include_once('empresaModelo.php');
include_once('empresa.php');
include_once('analisisModelo.php');
include_once('analisis.php');


$modeloEmpresa = new empresaModelo();
$modeloResultado = new resultadoModelo();
$modeloParticular = new particularModelo();
$modeloMuestra = new muestraModelo();
$modeloAnalisis = new analisisModelo();

if (isset($_POST['Cerrar']))
{
	session_destroy();
	header("Location: http://localhost/examendai2/index.html");
}

if (isset($_POST['Registrar']))
{

	$id_muestra = $_POST['txtMuestra'];
    $muestra = $modeloMuestra->ObtenerMuestraId($id_muestra);
    $particular = $modeloParticular -> ObtenerParticularId($muestra->getIdpar_muestra());
    $analisis = $modeloAnalisis -> ObtenerAnalisisrId($_POST['txtAnalisis']);
    
	$resultado = new Resultado(0,$_POST['txtFecha'],$_POST['txtPpm'],$_POST['txtComentario'],$_POST['txtRun'],$analisis->                        getId_analisis(),$_POST['txtMuestra'],1);

	echo $muestra-> getId_muestra();

	//$modeloResultado->RegistrarResultado($resultado);
    //header("Location: http://localhost/examendai2/perfilAnalisis.php");
}
?>