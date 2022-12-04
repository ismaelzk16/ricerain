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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>RICE RAIN - Home</title>
</head>
<body class="fondo">
    <header>
        <div class="cabecera container-fluid">
            <h1 class="titulo">RICE RAIN</h1>
            <h2 class="subtitulo">SPANISH CUISINE</h2>
            <a class="btn btn-succes pideya" href="carta.php">¡PIDE YA!</a>
        </div>
    </header>
    <section class="seccion1 col-12 container-fluid ">
        <div class="row">
            <div class="col-6 container-fluid col-sm-12 col-md-6 homeentrantes">ENTRANTES</div>
            <div class="col-6 col-sm-12 col-md-6 homearroces">ARROCES Y PAELLAS</div>
            <div class="col-6 col-sm-12 col-md-6 homepostres">POSTRES</div>
            <div class="col-6 col-sm-12 col-md-6 homebebidas">BEBIDAS</div>
            </tr>
        </div>
    </section>
    <section class="reseñas">
        <h2 class="titulos">RESEÑAS</h2>
        <div class="row">
            <div class="col-4 mt-4">
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <p class="textoreseña">“Muy buen servicio y mejor comida. Tomamos un arroz con bolets y butifarra en su punto, todo delicioso. Más que recomendable!!!”</p>
            </div>
            <div class="col-4 mt-4">
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <p class="textoreseña">“Lugar muy acogedor y agradable. La comida muy buena y super buen trato! Claramente volveremos!!”</p>
            </div>
            <div class="col-4 mt-4">
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <p class="textoreseña">“Muy buenas bravas y paella con marisco increíble, personal de servicio muy útil.”</p>
            </div>
        </div>
    </section>
    <section class="info">
        <div class="row">
            <div class="col-6">
                <h2 class="titulos mt-3">ARROCERIA EN MOLINS DE REI</h2>
                <p class="textoinfo" style="text-align: left;">
                Disponemos de una gran variedad de arroces
                y paellas de todo tipo preparadas con los mejores 
                ingredientes, frescos y de calidad, cocinados con la receta 
                de siempre para tener una paella innovadora
                y con un sabor increíble.
                </p>
            </div>
            <div class="col-6">
                <div class="quiensomos">
            </div>
        </div>    
    </section>
</body>


<?php
include("views/footer.php");
?>


</html>




