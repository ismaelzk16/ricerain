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
    <title>RICE RAIN - Carta</title>
</head>
<body class="fondo">
    <header><div class="cabeceracarta container-fluid">
            <h1 class="titulopags">NUESTRA CARTA</h1>
        </div>
    </header>
    <section class="listacarta container-fluid">
        <div class="row">
            <div class="col-4 fotoscarta">
                 <div class="entrantefoto"></div>
            </div>
            <div class="col-6 producto ps-4">
                <h2 class="tituloscarta">ENTRANTES</h2>
                <p class="">SURTIDO DE CROQUETAS</p>
                <p>PATATAS BRAVAS PICANTES</p>
                <p>TABLA DE JAMÓN IBÉRICO</p>
                <p>HUEVOS ROTOS CON JAMÓN IBÉRICO</p>
                <p>PAN CON TOMATE</p>
                <p>GAMBAS AL AJILLO</p>
                <p>ENSALADA CÉSAR</p>
                <p>ENSALADA DE QUESO DE CABRA</p>
                <p>TABBULE ORIENTAL</p>
            </div>
            <div class="col-2 botonescarta">
                <input type="button" border="0" class="mt-5 mx-5 my-2" value="AÑADIR"></input>
                <input type="button" class="" value="AÑADIR"></input>
                <input type="button" class="" value="AÑADIR"></input>
                <input type="button" class="" value="AÑADIR"></input>
                <input type="button" class="" value="AÑADIR"></input>
                <input type="button" class="" value="AÑADIR"></input>
                <input type="button" class="" value="AÑADIR"></input>
                <input type="button" class="" value="AÑADIR"></input>
                <input type="button" class="" value="AÑADIR"></input>
            </div>

        </div>
    </section>
</body>
</html>

<?php include("views/footer.php"); ?>


