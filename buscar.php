<?php
require_once("bd/bd.php");

// require("./models/Usuario.php");
// require("./controllers/usuarios.php");

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


    <form method=GET action="localhost:8081">
    <fieldset>
        <input type=hidden name=ie value=UTF-8/>
        <input type=hidden name=oe value=UTF-8/>
        <INPUT TYPE=text id="s" name="q" value="" size="50" />
        <font size=-1>
        <input type=hidden name=domains value="localhost:8081"/><br>
        <inpuT type=radio name=sitesearch value="" /> En todo Internet</br>
        <input type=radio name=sitesearch value="localhost:8081" checked /> En Uterra.Com
        <INPUT type=submit  id="x" name=btnG VALUE="Buscar"/>
        </font>
    </fieldset>
    </form>



    
</body>
</html>

<?php
include("views/footer.php");
?>
