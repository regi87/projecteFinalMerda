<?php
require_once __DIR__.'/../../vendor/autoload.php';
use Daw\models\classes\Servicio;
use Daw\models\classes\Tipo;
use Daw\models\classes\Ente;

$servicio= new Servicio();
$ente= new Ente();
$tipo= new Tipo();

?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Buscar-Oferta</title>
    <!-- Bootstrap core CSS -->
    <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="shortcut icon" href="../Imagenes/favicon.ico">
    <!-- Custom styles for this template -->
    <link href="../css/mostrar_usuarios.css" rel="stylesheet">
    <link href="../css/form.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Bitter" rel="stylesheet" type="text/css">
  </head>

  <body>

    <!-- Page Content -->
    <div class="container">

      <h1 class="my-4">Ofertas</h1>


      <center>
        <form name="" method="post" action="listado_ofertas.php" >
          <label>Seleccione el tipo de trabajo:</label>
          <select name="0">
            <?php
              $tipo_oferta=$tipo->findBaseDatos();
              foreach ($tipo_oferta as $fila) {
                echo "<option value=".$fila['Id_tipo'].">" .$fila["Nombre"]."</option>";
              }
            ?>
          <!--<input type="submit" name="buscar" onclick="buscar()" value="Buscar" /> -->
        </select>
          <button type="button" name="buscar" onclick="return buscar();"></button>
        </form>
      </center> <br><br>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="../index.php">Inicio</a>
        </li>
        <li class="breadcrumb-item active">Ofertas</li>
      </ol>

      <?php
        $usuario=$ente->findAllUsuario();
        foreach ($usuario as $fila) {
          echo "Nombre: ".$fila["Nombre"]."nif".$fila["NIF"]."<br>";
        }
      ?>
      <!-- Marketing Icons Section -->
      <div id="carta" class="row">
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Tipo de oferta</h4>
            <div class="card-body">
              <p class="card-text">Nombre del trabajador</p>
              <label>----------------------------------------</label>
              <p class="card-text">Telefono del trabajador</p>
              <label>----------------------------------------</label>
              <p class="card-text">Correo del trabajador</p>
              <label>----------------------------------------</label>
              <p class="card-text">Horas de trabajo diario </p>
              <label>----------------------------------------</label>
              <p class="card-text">Costo por hora</p>
              <label>----------------------------------------</label>
              <p class="card-text">Descripción del trabajo</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Contactar</a>
          </div>
        </div>
      </div>
      <!-- /.row -->
    </div>
    <a style="float:right" href="../index.php" class="btn btn-primary">Volver</a><br><br><br>
  </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; FLORIDA UNIVERSITARIA</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->

    <script type="text/javascript" src="../js/listado_ofertas.js"></script>

  </body>

</html>
