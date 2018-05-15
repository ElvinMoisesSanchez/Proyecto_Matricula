<?php

class ControlSesion {

    public static function iniciar_sesion($id_usuario, $numeroCuenta) {
        if (session_id() == '') {
            session_start();
        }

        $_SESSION['id_usuario'] = $id_usuario;
        $_SESSION['numeroCuenta'] = $numeroCuenta;
    }


    public static function cerrar_sesion() {
        if (session_id() == '') {
            session_start();
        }

        if (isset($_SESSION['id_usuario'])) {
            unset($_SESSION['id_usuario']);
        }

        if (isset($_SESSION['numeroCuenta'])) {
            unset($_SESSION['numeroCuenta']);
        }

        session_destroy();
    }

    public static function sesion_iniciada() {
        if (session_id() == '') {
            session_start();
        }

        if (isset($_SESSION['id_usuario']) && isset($_SESSION['numeroCuenta'])) {
            return true;
        } else {
            return false;
        }
    }
}
