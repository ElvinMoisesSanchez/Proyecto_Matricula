<?php
class Estudiante{
  private $id;
  private $numeroCuenta;
  private $nombre;
  private $apellido;
  private $email;
  private $contraseña;
  private $fecha_registro;
  private $carrera;

  public function __construct($id,$nombre,$apellido,$email,$contraseña,$fecha_registro,$carrera){
    $this-> id = $id;
    $this-> nombre = $nombre;
    $this-> apellido = $apellido;
    $this-> email = $email;
    $this-> contraseña = $contraseña;
    $this-> $fecha_registro = $fecha_registro;
    $this-> carrera = $carrera;
  }
  public function get_id() {
        return $this -> id;
  }
  public function get_numeroCuenta(){
    return $this -> numeroCuenta;
  }
  public function get_nombre() {
        return $this -> nombre;
  }

    public function get_apellido() {
        return $this -> apellido;
    }

    public function get_email() {
        return $this -> email;
    }

    public function get_contraseña() {
        return $this -> contraseña;
    }

    public function get_fechaRegistro() {
        return $this -> fecha_registro;
    }

    public function get_carrera() {
        return $this -> carrera;
    }

    public function set_numeroCuenta($numeroCuenta){
      $this -> numeroCuenta = $numeroCuenta;

    }
    public function set_nombre($nombre) {
        $this -> nombre = $nombre;
    }

    public function set_apellido($apellido) {
        $this -> apellido = $apellido;
    }
    public function set_email($email) {
        $this -> email = $email;
    }

    public function set_contraseña($contraseña) {
        $this -> contraseña = $contraseña;
    }

    public function set_carrera($carrera) {
        $this -> carrera = $carrera;
    }
}
 ?>
