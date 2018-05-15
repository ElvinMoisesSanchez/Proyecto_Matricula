<?php
	require ('../Conexion.inc.php');

	$id_materia = $_POST['id_materia'];

	$query = "SELECT id_seccion, catedratico FROM t_secciones WHERE id_materia = '$id_materia' ORDER BY catedratico ";
	$resultado=$conn->query($query);

	while($row = $resultado->fetch_assoc())
	{
		$html.= "<option value='".$row['id_seccion']."'>".$row['catedratico']."</option>";
	}
	echo $html;
?>
