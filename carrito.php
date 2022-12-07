<?php

include 'pedido.php';
include 'listaproductos.php';
require_once 'utils/calculadoraPrecio.php';
require_once 'entrante.php';
require_once 'arroz.php';
require_once 'postre.php';
require_once 'bebida.php';

session_start();
if(isset($_POST['Del'])){
  $pedido = $_SESSION["compra"][$_POST['pos']];
  if($pedido->getCantidad()==1 ){
    unset($_SESSION["compra"][$_POST['pos']]);
    $_SESSION["compra"] = array_values($_SESSION["compra"]);
  }else{
    $pedido->setCantidad($pedido->getCantidad() - 1);
  }

}else if(isset($_POST['Add'])){
  $pedido = $_SESSION["compra"][$_POST['pos']];
  $pedido->setCantidad($pedido->getCantidad() + 1);
}

if(isset($_POST['finalizar'])){
  $pedido = $_SESSION["compra"];
  setcookie("final_compra", json_encode($pedido), time()+3600*72);
}

include("./views/header.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RICE RAIN - Carrito</title>
</head>
<body class="fondo">
    <header>
        <div class="cabecera">
        </div>
    </header>
    <section class="seccioncarro">
    <?php 
        if(empty($_SESSION["compra"])){?>
        <div class="carritovacio">
            <h2>No hay productos añadidos</h2>
            <a href="carta.php"><button class="añadir mt-4" type="button">Ir a la Carta</button></a>
        </div>

        <?php }else{?> 
          <div class="col-6 productoscarrito">
          <?php
            $pos = 0;
            foreach ($_SESSION["compra"] as $pedido){ ?>
            <div class="producto">
            <hr class="barraproducto">
                <div class="fotoproducto"><img class="imagenprod" src=<?=$pedido->getProducto()->getImage().""?>></div> 
                <div class="cosasproducto">
                <div><?=$pedido->getProducto()->getNom()?></div>
                <div><?=$pedido->getProducto()->preuMesIva()?>€</div>
                  <form action="carrito.php" method="post">
                    <input type="hidden" name="pos" value=<?=$pos?>>
                    <button  class="sumar" type="submit" name='Add'><strong>+</strong></button>
                    <?=$pedido->getCantidad()?>
                    <button  class="restar" type="submit" name='Del'><strong>-</strong></button>
                  </form>
                </div>
            <?php $pos++;
          }?>          
      <?php } ?>
      </div>
      <div class="col-6"></div>
      <?php
          $precioTotal = calculadoraPrecio::calculaPrecioTotal($_SESSION['compra']);
          echo $precioTotal;
          ?>
      <form action="carrito.php" method="POST">
            <button name='finalizar' class="btn añadir">Finalizar</button>
          </form>
    </section>
</body>
</html>

<?php
include("views/footer.php");
?>


