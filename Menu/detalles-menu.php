<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="estilos/menustyle.css">
</head>
<body>
  <?php
    if($_GET['num']<20)
    {
      $numImgArray = array (
                        0 => "img/plato1.jpg",
                        1 => "img/plato2.png",
                        2 => "img/plato3.png",
                        3 => "img/plato4.jpg",
                        4 => "img/plato5.jpg",
                        5 => "img/plato6.jpg",
                        6 => "img/plato7.jpg",
                        7 => "img/plato8.jpg",
      );
      $numImg=$numImgArray[$_GET['num']];
    }else
    {
      $numImgArray = array (
                        21 => "img/plato21.jpg",
                        22 => "img/plato22.jpg",
                        23 => "img/plato23.jpg"
      );
      $numImg=$numImgArray[$_GET['num']];
    }
  ?>
  <header class="class-header">
    <div class="header-nav contenedor">
      <div>
        <a href="../Index/index.php">
          <img src="img/logo1.png" alt="">
        </a>
    </div>
      <nav class="nav-dm">
        <a href="index.php">Menu</a>
        <a href="../Promocion/index.php">Promociones</a>
        <a href="../Login/index.php">Login</a>
      </nav>
    </div>
  </header>
  <main class="cuerpo-index">
    <div class="contenedor cuerpo-i2">
      <h2>Plato</h2>

      <div class="platillos-index">
        <div class="card-deck">
          <div class="card">
            <img src="<?php echo $numImg ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Chaufa de Pollo</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
      </div><!--fin platillos-index-->
    </div><!--fin cuerpo i2-->
  </main>

  <footer class="par-footer">
    <p>&copy; Casual Food todos los derechos reservados - 2020</p>
  </footer>
</body>
</html>
