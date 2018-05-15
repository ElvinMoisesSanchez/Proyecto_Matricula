<?php

session_start();

unset ($SESSION['username']);

session_destroy();

header('Location: http://localhost:80/ProyectoPOO/index.php');

?>
