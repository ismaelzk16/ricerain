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
    <title>RICE RAIN - Contacto</title>
</head>
<body class="fondo">
    <header>
        <div class="cabecera">
            
        </div>
    </header>
    <section class="seccioncontacto container-fluid container-xxl">
        <div class="row">
            <div class="col-6 col-sm-12 col-md-6 mt-5">
              <h2 class="titulocontacto mb-2 fs-1">CONTACTO RICE RAIN SPANISH CUISINE</h3>
                  <p class="contactotexto">Cualquier duda o comentario que tengas referente a nuestro restaurante, puedes usar este formulario para ponerte en contacto con nosotros. Te contestaremos lo antes posible.</p>
                  <form action="mailto" id="formulariocont">
                    <label for="nombre" required>Tu nombre</label>
                    <br>
                    <input type="text" name="nom" class="inputcont mb-3">
                    <br>
                    <label for="apellido">Tu dirección de correo electrónico</label>
                    <br>
                    <input type="text" name="email" class="inputcont mb-3">
                    <br>
                    <label for="telef">Asunto</label>
                    <br>
                    <input type="tel" name="subject" class="inputcont mb-3">
                    <br>
                    <label for="mensaje">Mensaje</label>
                    <br>
                    <textarea name="mensaje" form="formulariocont"></textarea>
                    <br>
                    <input type="button" value="ENVIAR" form="formulariocont" class="enviar">
                  </form>
              </div>
            <div class="col-6 col-sm-12 col-md-6 mt-5">
            <div class="iconoubi"></div><p class="infocon">Carrer Ntra. Sra. de Lourdes, 34, 08750 Molins de Rei</p>
            <div class="iconotelf"></div><p class="infocon">640 050 688</p>
            <div class="iconohora"></div><p class="infocon">Martes - Domingo de 13:00 - 23:00</p>
            <div style="width: 100%"><iframe scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=800&amp;hl=es&amp;q=CARRER%20NTRA%20SRA%20DE%20LOURDES%2034+(RICE%20RAIN)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" width="100%" height="600" frameborder="0"><a href="https://www.gps.ie/car-satnav-gps/">GPS car tracker</a></iframe></div>  
          </div>
               
        </div>

    </section>
</body>
</html>

<?php
include("views/footer.php");
?>
