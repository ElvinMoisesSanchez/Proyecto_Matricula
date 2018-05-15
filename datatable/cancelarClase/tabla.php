
<?php
require ('Conexion.inc.php');
session_start();
$cuenta=$_SESSION['numeroCuenta_s'];
$sql= "SELECT t_datos.id_datos, t_departamento.departamento, t_materia.materia, t_secciones.catedratico,
			t_datos.numeroCuenta from t_datos, t_departamento, t_materia, t_secciones
		  where (t_datos.id_departamento=t_departamento.id_departamento) and
			( t_datos.id_materia = t_materia.id_materia) and
			(t_datos.id_seccion=t_secciones.id_seccion) and
			t_datos.numeroCuenta='$cuenta'";
$resultado= $conn->query($sql);
?>

<div>
	<table class="table table-hover table-condensed" id="iddatatable">
		<thead style="background-color: #dc3545; color: white; font-weight: bold;">
			<tr >
				<td>Departamento</td>
				<td>Materia</td>
				<td>Seccion</td>
				<td>#cuenta</td>
				<td>Eliminar</td>
			</tr>
		</thead>
		<tfoot style="background-color: #ccc; color: white; font-weight: bold;">
			<tr>
				<td>Departamento</td>
				<td>Materia</td>
				<td>Seccion</td>
				<td>#cuenta</td>
				<td>Eliminar</td>
			</tr>
		</tfoot>
		<tbody>
			<?php
				while($mostrar=mysqli_fetch_row($resultado)){
			?>
				<tr>
					<td><?php echo $mostrar[1]?></td>
					<td><?php echo $mostrar[2]?></td>
					<td><?php echo $mostrar[3]?></td>
					<td><?php echo $mostrar[4]?></td>
					<td style="text-align: center;">
						<span class="btn btn-danger btn-xs" onclick="eliminarDatos('<?php echo $mostrar[0] ?>')">
						<span class="fa fa-trash"></span></span>
					</td>
				</tr>
				<?php } ?>
			</tbody>

		</table>

	</div>


	<script type="text/javascript">
		$(document).ready(function() {
			$('#iddatatable').DataTable();
		} );
	</script>
