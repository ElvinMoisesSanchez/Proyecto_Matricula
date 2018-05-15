<?php

	class crud{
		public function agregar($datos){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="INSERT into materias (Departamento,Asignatura,Dias,Seccion,HoraInicial,HoraFinal)
									values ('$datos[0]',
											'$datos[1]',
											'$datos[2]',
											'$datos[3]',
											'$datos[4]',
											'$datos[5]',
											'$datos[6]')";
			return mysqli_query($conexion,$sql);
		}

		public function obtenDatos($idmateria){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="SELECT id,
							Departamento,
							Asignatura,
							Dias,
							Seccion,
							HoraInicial,
							HoraFinal
					from materias
					where id='$idmateria'";
			$result=mysqli_query($conexion,$sql);
			$ver=mysqli_fetch_row($result);

			$datos=array(
				'id' => $ver[0],
				'Departamento' => $ver[1],
				'Asignatura' => $ver[2],
				'Dias' => $ver[3],
				'Seccion' => $ver[4],
				'HoraInicial' => $ver[5],
				'HoraFinal' => $ver[6]
				);
			return $datos;
		}

		public function actualizar($datos){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="UPDATE materias set Departamento='$datos[0]',
										Asignatura='$datos[1]',
										Dias='$datos[2]',
										Seccion='$datos[3]',
										HoraInicial='$datos[4]',
										HoraFinal='$datos[5]',
						where id='$datos[5]'";
			return mysqli_query($conexion,$sql);
		}
		public function eliminar($idmateria){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="DELETE from materias where id='$idmateria'";
			return mysqli_query($conexion,$sql);
		}
	}

 ?>
