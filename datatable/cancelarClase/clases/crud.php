<?php

	class crud{

		public function eliminar($idjuego){
			require '../Conexion.inc.php';
			$sql="DELETE from t_datos where id_datos='$idjuego'";
			return mysqli_query($conn,$sql);
		}
	}

 ?>
