<?php

session_start();

if (isset($_SESSION['nueva_sesión']) && (time() - $_SESSION['nueva_sesión'] > 1000)) {
  session_unset(); 
  session_destroy();
}else{
  $_SESSION['nueva_sesión'] = time(); 
} 

include("./views/header.php");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RICE RAIN - Log In</title>
</head>
<body class="fondo">
    <header>
        <div class="cabecera">
            
        </div>
    </header>
    <section class="seccioncontacto container-fluid container-xxl">
        <div class="row">
            <div class="col-6 col-sm-12 col-md-6 mt-5">
              <h2 class="titulocontacto mb-2 fs-1">LOG IN</h3>
                  <form action="mailto" id="formulariocont">
                    <label for="nombre" required>Correo electrónico</label>
                    <br>
                    <input type="text" name="nom" class="inputcont mb-3">
                    <br>
                    <label for="apellido">Contraseña</label>
                    <br>
                    <input type="text" name="email" class="inputcont mb-3">
                    <br>
                    <input type="button" value="ENVIAR" form="formulariocont" class="enviar">
                  </form>
              </div>               
            <div class="col-6 col-sm-12 col-md-6 mt-5">
              <h2 class="titulocontacto mb-2 fs-1">REGISTRO</h3>
                  <form action="mailto" id="formulariocont">
                    <label for="nombre" required>Correo electrónico</label>
                    <br>
                    <input type="text" name="nom" class="inputcont mb-3">
                    <br>
                    <label for="apellido">Contraseña</label>
                    <br>
                    <input type="text" name="email" class="inputcont mb-3">
                    <br><label for="apellido">Repetir Contraseña</label>
                    <br>
                    <input type="text" name="email" class="inputcont mb-3">
                    <br>
                    <input type="button" value="ENVIAR" form="formulariocont" class="enviar mb-5">
                  </form>
            </div>
          </div>
    </section>
</body>
</html>

<?php
include("views/footer.php");
?>
