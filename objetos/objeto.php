<?php
	//recibe los datos
	$cedula = $_REQUEST['cedula'];
	$nombre = $_REQUEST['nombre'];
	$fechaNac = $_REQUEST['fechaNac'];
	$sexo = $_REQUEST['sexo'];
	//$op = $_REQUEST['op'];

	include_once ("../Clases/Clase.php");

	//if ($op == 1) {
		$objeto = new datosPersonales("$cedula","$nombre","$fechaNac","$sexo");
		$resultado = $objeto->guardar();
		//echo $cedula;
		//header("location:../index.php?resultado=".$resultado);
	/*} else {
	}*/
	
?>