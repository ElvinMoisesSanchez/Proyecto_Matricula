<?php
session_start();
	require('scrips.php');
	require ('Conexion.inc.php');
	$departamento = $_POST['cbx_departamento'];
	$id_seccion = $_POST['cbx_seccion'];
	$materia= $_POST['cbx_materia'];
	$cuenta=$_SESSION['numeroCuenta_s'];
	if($departamento == 0){
		exit("Selecciones los campos");
		exit();
		exit(1);
	}

	$sql = "INSERT INTO t_datos (id_seccion,id_departamento,id_materia,numeroCuenta) VALUES('$id_seccion','$departamento','$materia','$cuenta')";

	$resultado = $conn->query($sql);

	if($resultado){
		?>
		<br>
		<div class="right">
			<a href="../../app/menu.html"> <span class="fa fa-arrow-circle-left" >
			</span> Atras </a>
			<a href="../../app/cerrarSesion.php"> Cerrar Sesion <span class="fa fa-user-circle-o" >
			</span></a>
			<hr>
		</div>
		<style>
			.right{
				float: right;
			}
		</style>

		<?php
		echo "<div>Registro Guardado</div>";

		} else {
		echo "Error al Registrar";
	}
?>
