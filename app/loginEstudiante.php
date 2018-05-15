<?php
	require('Conexion.inc.php');
	session_start();

	if(isset($_POST['login']))
	{
		if((isset($_POST['numeroCuenta']) && $_POST['numeroCuenta'] !='') && (isset($_POST['contraseña']) && $_POST['contraseña'] !=''))
		{
			$numeroCuenta = trim($_POST['numeroCuenta']);
			$password = trim($_POST['contraseña']);

			$sql = "select * from estudiante where numeroCuenta = '".$numeroCuenta."'";
			$rs = mysqli_query($conn,$sql);
			$numRows = mysqli_num_rows($rs);

			if($numRows  == 1)
			{
				$row = mysqli_fetch_assoc($rs);

				if($password == $row['password'])
				{
					$_SESSION['user_id'] = $row['id'];
					$_SESSION['numeroCuenta_s'] = $row['numeroCuenta'];
					$_SESSION['nombre_id'] = $row['nombre'];

					header('location:menu.html');
					exit;

				}
				else
				{
					$errorMsg =  "Numero de cuenta o contraseña errones";
				}
			}
			else
			{
				$errorMsg =  "No User Found";
			}
		}
	}
?>

<html lang="es">
  <head>
    <link href="../includes/css/bootstrap.min.css" rel="stylesheet">
    <link href="../includes/css/estilos.css" rel="stylesheet">
  </head>

  <body>
    <form class="form-signin" action="<?php echo $_SERVER['PHP_SELF']?>" id="frmLogin" method="post">
      <div class="text-center mb-4">
        <img class="mb-4" src="../includes/imagenes/logo-unah.jpg" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Sistema de Matricula</h1>
        <p>Para acceder a los servicios estudiantiles debes autentificarte <code>:Aquí</code><a href="#"> desde Chrome, Safari, o Firefox.</a></p>
      </div>

      <div class="form-label-group">
        <input type="text" id="numeroCuenta" name="numeroCuenta" class="form-control" placeholder="Numero de Cuenta"
          required autofocus>
        <label for="numeroCuenta">Numero de Cuenta</label>
      </div>

      <div class="form-label-group">
        <input type="password" name="contraseña" id="contraseña" class="form-control" placeholder="Contraseña" required>
        <label for="inputPassword">Contraseña</label>
      </div>

      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="recuerdame"> Recordarme
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">Ingresar</button>
      <p class="mt-5 mb-3 text-muted text-center">&copy; 2018-2019</p>
    </form>
    <script type="text/javascript" src="../includes/js/jquery.min.js"></script>
  </body>
</html>
