
<?php

require_once "clases/conexion.php";
$obj= new conectar();
$conexion=$obj->conexion();

$sql="SELECT id,
Departamento,
Asignatura,
Dias,
Seccion,
HoraInicial,
HoraFinal
from  materias";
$result=mysqli_query($conexion,$sql);
?>


<div>
	<table class="table table-hover table-condensed table-bordered" id="iddatatable">
		<thead style="background-color: #dc3545;color: white; font-weight: bold;">
			<tr>
				<td>Departamento</td>
				<td>Asignatura</td>
					<td>Dias</td>
				<td>Seccion</td>
				<td>Hora Inicio</td>
				<td>Hora Final</td>
			</tr>
		</thead>
		<tfoot style="background-color: #ccc;color: white; font-weight: bold;">
			<tr>
				<td>Departamento</td>
				<td>Asignatura</td>
					<td>Dias</td>
				<td>Seccion</td>
				<td>Hora Inicio</td>
				<td>Hora Final</td>
			</tr>
		</tfoot>
		<tbody >
			<?php
			while ($mostrar=mysqli_fetch_row($result)) {
				?>
				<tr >
					<td><?php echo $mostrar[1] ?></td>
					<td><?php echo $mostrar[2] ?></td>
					<td><?php echo $mostrar[3] ?></td>
					<td><?php echo $mostrar[4] ?></td>
					<td><?php echo $mostrar[5] ?></td>
					<td><?php echo $mostrar[6] ?></td>
				</tr>
				<?php
			}
			?>
		</tbody>
	</table>
</div>

<script type="text/javascript">
	$(document).ready(function() {
		$('#iddatatable').DataTable();
	} );
</script>
