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
</body>
</html>

<?php
include("views/footer.php");
?>
