<!DOCTYPE html>
<html>
<head>
	<title>Mostrar Matriculadas</title>
	<?php require_once "scrips.php"; ?>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="card text-left">
					<div class="card-header">
						Clases Añadidas
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
					<div class="card-body">
						<a href="../AgregarClases/agregarClases.php">Agregar Clase <span class="fa fa-plus-circle" >
						</span></a>
						<hr>
						<div id="tablaDatatable"></div>
					</div>
					<div class="card-footer text-muted">
						By Proyecto POO
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('#tablaDatatable').load('tabla.php');
	});
</script>
