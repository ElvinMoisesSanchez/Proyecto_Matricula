<?php
	require_once "scrips.php";
	require ('Conexion.inc.php');
	$query = "SELECT id_departamento, departamento FROM t_departamento ORDER BY  departamento ASC";
	$resultado=$conn->query($query);
?>

<html>
	<head>
		<title>Sistema de Matricula</title>

		<script language="javascript" src="js/jquery-3.1.1.min.js"></script>

		<script language="javascript">
			$(document).ready(function(){
				$("#cbx_departamento").change(function () {

					$('#cbx_seccion').find('option').remove().end().append('<option value="whatever"></option>').val('whatever');

					$("#cbx_departamento option:selected").each(function () {
						id_departamento = $(this).val();
						$.post("includes/getMateria.php", { id_departamento: id_departamento }, function(data){
							$("#cbx_materia").html(data);
						});
					});
				})
			});

			$(document).ready(function(){
				$("#cbx_materia").change(function () {
					$("#cbx_materia option:selected").each(function () {
						id_materia = $(this).val();
						$.post("includes/getSeccion.php", { id_materia: id_materia }, function(data){
							$("#cbx_seccion").html(data);
						});
					});
				})
			});
		</script>

	</head>

	<body>
		<br>
		<div>
			<label>Agregar Asignaturas a cursar</label>
			<div class="right">
				<a href="../../app/menu.html"> <span class="fa fa-arrow-circle-left" >
				</span> Atras </a>
				<a href="../../app/cerrarSesion.php">Cerrar Sesion <span class="fa fa-user-circle-o" >
				</span></a>
			</div>
			<style>
				.right{
					float: right;
				}
			</style>
		</div>
		<hr>
		<form id="combo" name="combo" action="guarda.php" method="POST">
			<br>
			<div>Selecciona Departamento : <select name="cbx_departamento" id="cbx_departamento">
				<option value="0">Seleccionar Departamento</option>
				<?php while($row = $resultado->fetch_assoc()) { ?>
					<option value="<?php echo $row['id_departamento']; ?>"><?php echo $row['departamento']; ?></option>
				<?php } ?>
			</select></div>

			<br />

			<div>Selecciona Materia: <select name="cbx_materia" id="cbx_materia"></select></div>

			<br />

			<div>Selecciona seccion : <select name="cbx_seccion" id="cbx_seccion"></select></div>

			<br />
			<input type="submit" id="enviar" name="enviar" value="Guardar" />
		</form>
	</body>
</html>
