<?php

	require ('../Conexion.inc.php');

	$id_departamento = $_POST['id_departamento'];

	$queryM = "SELECT id_materia, materia FROM t_materia WHERE id_departamento = '$id_departamento' ORDER BY materia ";
	$resultadoM = $conn->query($queryM);

	$html= "<option value='0'>Seleccionar Materia</option>";

	while($rowM = $resultadoM->fetch_assoc())
	{
		$html.= "<option value='".$rowM['id_materia']."'>".$rowM['materia']."</option>";
	}

	echo $html;
?>
