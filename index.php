<!DOCTYPE html>
<html lang="es">
<head>
    <?php require_once "Dependencias.php";  ?>
    <title>Censo de Matricula</title>
</head>
<body>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="index.php">Sistema de Matricula</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbars">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="app/loginEstudiante.php">Primer Ingreso</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sistema de Pregrado</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="app/loginEstudiante.php">Estudiante</a>
              <a class="dropdown-item" href="app/loginProfesor.php">Profesor</a>
              <a class="dropdown-item" href="app/loginAdmin.php">Administrador</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>

      <main role="main">
        <div class="jumbotron">
          <div class="container text-center">
            <h1 class="display-3">Sistema de Matricula UNAH</h1>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <h2>Aviso</h2>
              <p>Se comunica que para los pagos correspondientes al Primer Periodo Académico del 2018, NO HABRÁ
               PRORROGA. Pago de Matricula del x de enero al x de febrero. Pago de Laboratorios del x al x
               de febrero. Bancos LAFISE, DAVIVIENDA, BANPAIS, FICOHSA Y ATLANTIDA a nivel nacional. Las agencias
               de Banco LAFISE en Ciudad Universitaria y Boulevard Suyapa, NO ESTÁN HABILITADAS
               para realizar pago de Matricula ni de Laboratorios. </p>
              <p><a class="btn btn-secondary" href="#" role="button">Ver detalles &raquo;</a></p>
            </div>
            <div class="col-md-4">
              <h2>Aviso</h2>
              <p>PAGO DE LABORATORIO CORRESPONDIENTE AL I PAC 2018 HABILITADO LOS DIAS Martes y Miercoles</p>
              <p><a class="btn btn-secondary" href="#" role="button">Ver detalles &raquo;</a></p>
            </div>
            <div class="col-md-4">
              <h2>Aviso</h2>
              <p></p>
              <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
            </div>
          </div>
        <hr>
      </div>
    </main>
</body>
</html>
