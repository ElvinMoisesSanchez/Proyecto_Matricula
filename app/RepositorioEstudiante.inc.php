<?php
class RepositorioUsuario {

  public static function obtener_todos($conexion) {

      $usuarios = array();

      if (isset($conexion)) {

          try {

              include_once 'Estudiante.inc.php';

              $sql = "SELECT * FROM Estudiante";

              $sentencia = $conexion -> prepare($sql);
              $sentencia -> execute();

              $resultado = $sentencia -> fetchAll();

              if (count($resultado)) {
                  foreach ($resultado as $fila) {
                      $estudiantes[] = new Estudiante(
                              $fila['id'], $fila['numeroCuenta'], $fila['nombre'], $fila['email'], $fila['contraseña'], $fila['fecha_registro'], $fila['carrera']
                      );
                  }
              } else {
                  print 'No hay Estudiantes';
              }

          } catch (PDOException $ex) {
              print "ERROR" . $ex -> getMessage();
          }
      }

      return $estudiantes;
  }

  public static function obtener_numero_estudiantes($conexion) {
      $total_estudiantes = null;

      if (isset($conexion)) {
          try {
              $sql = "SELECT COUNT(*) as total FROM Estudiante";

              $sentencia = $conexion -> prepare($sql);
              $sentencia -> execute();
              $resultado = $sentencia -> fetch();

              $total_estudiantes = $resultado['total'];
          } catch (PDOException $ex) {
              print 'ERROR' . $ex -> getMessage();
          }
      }

      return $total_estudiantes;
  }

  public static function insertar_estudiantes($conexion, $estudiante) {
      $estudiante_insertado = false;

      if (isset($conexion)) {
          try {
              $sql = "INSERT INTO Estudiante(numeroCuenta, nombre, apellido, email, contraseña, fecha_registro, carrera) VALUES(:numeroCuenta, :nombre, :apellido, :email, :contraseña, NOW(), :carrera)";

              $sentencia = $conexion -> prepare($sql);
              $sentencia -> bindParam(':numeroCuenta', $estudiante -> get_numeroCuenta(), PDO::PARAM_INT);
              $sentencia -> bindParam(':nombre', $estudiante -> get_nombre(), PDO::PARAM_STR);
              $sentencia -> bindParam(':email',  $estudiante -> get_email(), PDO::PARAM_STR);
              $sentencia -> bindParam(':contraseña', $estudiante -> get_contraseña(), PDO::PARAM_STR);

              $estudiante_insertado = $sentencia -> execute();
          } catch (PDOException $ex) {
              print 'ERROR' . $ex->getMessage();
          }
      }

      return $estudiante_insertado;
  }

  public static function numeroCuenta_existe($conexion, $nunmeroCuenta) {
      $numeroCuenta_existe = true;

      if (isset($conexion)) {
          try {
              $sql = "SELECT * FROM Estudiante WHERE numeroCuenta = :numeroCuenta";

              $sentencia = $conexion -> prepare($sql);

              $sentencia -> bindParam(':numeroCuenta', $nombre, PDO::PARAM_INT);

              $sentencia -> execute();

              $resultado = $sentencia -> fetchAll();

              if (count($resultado)) {
                  $numeroCuenta_existe = true;
              } else {
                  $numeroCuenta_existe = false;
              }
          } catch (PDOException $ex) {
              print 'ERROR' . $ex -> getMessage();
          }
      }

      return $numeroCuenta_existe;
  }

  public static function email_existe($conexion, $email) {
      $email_existe = true;

      if (isset($conexion)) {
          try {
              $sql = "SELECT * FROM Estudiante WHERE email = :email";

              $sentencia = $conexion -> prepare($sql);

              $sentencia -> bindParam(':email', $email, PDO::PARAM_STR);

              $sentencia -> execute();

              $resultado = $sentencia -> fetchAll();

              if (count($resultado)) {
                  $email_existe = true;
              } else {
                  $email_existe = false;
              }
          } catch (PDOException $ex) {
              print 'ERROR' . $ex -> getMessage();
          }
      }

      return $email_existe;
  }

  public static function obtener_usuario_por_email($conexion, $email) {
      $estudiante = null;

      if (isset($conexion)) {
          try {
              include_once 'Estudiante.inc.php';

              $sql = "SELECT * FROM Estudiante WHERE email = :email";

              $sentencia = $conexion -> prepare($sql);

              $sentencia -> bindParam(':email', $email, PDO::PARAM_STR);

              $sentencia -> execute();

              $resultado = $sentencia -> fetch();

              if (!empty($resultado)) {
                  $estudiante = new Estudiante($resultado['id'],
                          $resultado['numeroCuenta'],
                          $resultado['nombre'],
                          $resultado['apellido'],
                          $resultado['email'],
                          $resultado['contraseña'],
                          $resultado['fecha_registro'],
                          $resultado['carrera']);
              }
          } catch (PDOException $ex) {
              print 'ERROR' . $ex -> getMessage();
          }
      }

      return $estudiante;
  }

  public static function obtener_usuario_por_numeroCuenta($conexion, $numeroCuenta) {
      $estudiante = null;

      if (isset($conexion)) {
          try {
              include_once 'Estudiante.inc.php';

              $sql = "SELECT * FROM Estudiante WHERE numeroCuenta = :numeroCuenta";

              $sentencia = $conexion -> prepare($sql);

              $sentencia -> bindParam(':numeroCuenta', $numeroCuenta, PDO::PARAM_INT);

              $sentencia -> execute();

              $resultado = $sentencia -> fetch();

              if (!empty($resultado)) {
                  $estudiante = new Estudiante($resultado['id'],
                          $resultado['numeroCuenta'],
                          $resultado['nombre'],
                          $resultado['apellido'],
                          $resultado['email'],
                          $resultado['contraseña'],
                          $resultado['fecha_registro'],
                          $resultado['carrera']);
              }
          } catch (PDOException $ex) {
              print 'ERROR' . $ex -> getMessage();
          }
      }

      return $estudiante;
  }

  public static function actualizar_Contraseña($conexion, $numeroCuenta, $nueva_clave) {
      $actualizacion_correcta = false;

      if (isset($conexion)) {
          try  {
              $sql = "UPDATE Estudiante SET contraseña = :contraseña WHERE numeroCuenta = :numeroCuenta";

              $sentencia = $conexion -> prepare($sql);

              $sentencia -> bindParam(':contraseña', $nueva_clave, PDO::PARAM_STR);
              $sentencia -> bindParam(':numeroCuenta', $numeroCuenta, PDO::PARAM_INT);

              $sentencia -> execute();

              $resultado = $sentencia -> rowCount();

              if (count($resultado)) {
                  $actualizacion_correcta = true;
              } else {
                  $actualizacion_correcta = false;
              }
          } catch(PDOException $ex) {
              print 'ERROR'.$ex -> getMessage();
          }
      }

      return $actualizacion_correcta;
  }
}
