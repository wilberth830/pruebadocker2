<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="Estilos/loginstyle2.css">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>
<body>

  <div id="carouselExampleCaptions" class="carousel slide img-login" data-ride="carousel">

    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>


    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/img-login1.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/img-login2.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/img-login6.jpg" class="d-block w-100" alt="...">
      </div>
    </div>

    <header class="class-header">
      <div class="header-nav contenedor">
      <a href="../Index/index.php"><img src="img/logo2.png" alt=""></a>
      </div>
    </header>

    <div class="formulario">
        <div class="contenedor cont-form">
          <div class="shadow-lg  class-login">
            <h3>Iniciar Sesion</h3>
            <form action="" method="POST">
              <label for="nomCuenta">Nombre de Cuenta</label>
              <input id="nomCuenta" name="nomCuenta" type="text" placeholder="Nombre de cuenta" required>
              <label for="clave">Contraseña</label>
              <input id="clave" name="clave" type="password" placeholder="Contraseña" required>
              <p>No tengo cuenta <a href="registro.php">Registrarse</a></p>
              <div class="clas-btn">
                <input type="submit" value="Enviar" class="btn-form">
              </div>
            </form>
            <?php
            if(isset($_POST['nomCuenta'])&&isset($_POST['clave'])) {
              require_once "Conexion/conexionBD.php";
              require_once "Procesos/plogin.php";
            }
            ?>
          </div><!--class-login-->
        </div> <!--cont-form-->
      </div><!--formulario-->

  </div>

  <!-- JS, Popper.js, and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>
