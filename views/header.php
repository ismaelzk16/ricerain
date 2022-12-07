<!DOCTYPE html>
  <head>
      <meta charset="UTF-8">
      <meta name="description" content="Descripció web">
      <meta name="keywords" content="Paraules clau">
      <meta name="author" content="Autor">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/navbars/">
      <link href="assets/css/bootstrap.min.css" rel="stylesheet"> 
      <link href="assets/css/full_estil.css" rel="stylesheet" type="text/css" media="screen">
      <meta http-equiv="refresh" content="1000">
  </head>


  <body>


  <header>
    <nav class="navbar navbar-expand-lg barramenu">
      <div class="container-xxl">
        <div class="logo"><a href="index.php"><img src="assets/images/logo.png" alt="logo ricerain" width="95 rem"></a></div>
         <div class="row me-5">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <ul class="navbar-nav col-8 col-sm-6 contenedorpaginas pt-3">
          <li class="nav-item apetina">
            <a class="nav-link active" aria-current="page" href="index.php" style="color: white;">HOME</a>
          </li>
          <li class="nav-item apetina">
            <a class="nav-link active" href="carta.php" style="color: white;">CARTA</a>
          </li>
          <li class="nav-item apetina">
            <a class="nav-link active" href="contacto.php" style="color: white;">CONTACTO</a>
          </li>
          </ul>
          <ul class="navbar-nav col-4 col-sm-3 contenedorbotones">
          <li class="nav-item active ">
          <a class="nav-link active buscar" href="buscar.php"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link active carrito" href="carrito.php"><span class="contadorProuctos"><?php echo count($_SESSION['compra']);?></a></span>
          </li>
          <li class="nav-item">
            <a class="nav-link active login" href="login.php"></a>
          </li>
          </ul>
        </ul>
      </div>
      </div>
    </div>
    </nav>
  </header>
  </body>
  <script src="../assets/js/bootstrap.bundle.min.js"></script>
</html>

    