<?php
	require_once "../clases/conexion.php";
	require_once "../clases/crud.php";
	$obj= new crud();

	$datos=array(
		$_POST['Departamento'],
		$_POST['Asignatura'],
		$_POST['Dias'],
		$_POST['Seccion'],
		$_POST['HoraInicial'],
		$_POST['HoraFinal'],
		$_POST['id']
				);

	echo $obj->actualizar($datos);


 ?>
