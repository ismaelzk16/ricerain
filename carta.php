<?php

include 'pedido.php';

$tipo = "";
require_once 'producto.php';
require_once 'listaproductos.php';
require_once 'utils/calculadoraPrecios.php';

session_start();

if (isset($_SESSION['nueva_sesión']) && (time() - $_SESSION['nueva_sesión'] > 1000)) {
  session_unset(); 
  session_destroy();
}else{
  $_SESSION['nueva_sesión'] = time(); 
} 

if (isset($_SESSION['compra'])) {
  if (isset($_SESSION['compra']) && isset($_POST['tipo'])) {
    if ($_POST['tipo'] == 'entrante') {
      if (in_array($_POST['producto'], $_SESSION['compra'])) {
        if (isset($_POST['producto'])) {
        }
      }else{
        if (isset($_POST['producto'])) {
          $entranteSel = $entrantes[$_POST['producto']];
          $pedido = new Pedido($entranteSel);
          array_push($_SESSION['compra'], $pedido);
        }
      }
    }
  }

  if (isset($_SESSION['compra']) && isset($_POST['tipo'])) {
    if ($_POST['tipo'] == 'arroz') {
      if (isset($_POST['producto'])) {
        $arrozSel = $arroces[$_POST['producto']];
        $pedido = new Pedido($arrozSel);
        array_push($_SESSION['compra'], $pedido);
      }
    }
  }

  if (isset($_SESSION['compra']) && isset($_POST['tipo'])) {
    if ($_POST['tipo'] == 'postre') {
      if (isset($_POST['producto'])) {
        $bebidaSel = $postres[$_POST['producto']];
        $pedido = new Pedido($bebidaSel);
        array_push($_SESSION['compra'], $pedido);
      }
    }
  }

  if (isset($_SESSION['compra']) && isset($_POST['tipo'])) {
    if ($_POST['tipo'] == 'bebida') {
      if (isset($_POST['producto'])) {
        $bebidaSel = $bebidas[$_POST['producto']];
        $pedido = new Pedido($bebidaSel);
        array_push($_SESSION['compra'], $pedido);
      }
    }
  }
}else{
    $_SESSION['compra']=array();
}
$tipo = "";

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
    <header>
        <div class="cabeceracarta container-fluid">
            <h1 class="titulopags">NUESTRA CARTA</h1>
        </div>
    </header>
    <section class="listacarta container-fluid">
        <div class="row">
        <section class="container-fluid d-flex justify-content-center container-xxl">
          <div class="row">
            <div class="row entrantescarta">
            <h2 class="tituloscarta" id="entrant">ENTRANTES</h2>
              <?php foreach ($entrantes as $entrante){?>
                <div class="col-6 col-md-3 mb-5">
                  <?=$entrante->getNom()?>
                  <?=$entrante->getPrecio()." €"?>
                  <form action="carta.php" method="post">
                    <input type="hidden" name="producto" value=<?=$entrante->getId();?>>
                    <input type="hidden" name="tipo" value='entrante'>
                    <input type="submit" border="0" class="añadir mt-5 mx-5 my-2" value="AÑADIR"></input>
                  </form>
                </div>
              <?php } ?>
            </div>
            <div class="row arrocescarta">
            <h2 class="tituloscarta" id="arro">ARROCES Y PAELLAS</h2>
            <?php foreach ($arroces as $arroz){ ?>
              <div class="col-6 col-md-3 mb-5">
                <?=$arroz->getNom()?>
                <?=$arroz->getPrecio()."€"?>
                <form action="carta.php" method="post">
                  <input type="hidden" name="producto" value=<?=$arroz->getId();?>>
                  <input type="hidden" name="tipo" value='arroz'>
                  <input type="submit" border="0" class="añadir mt-5 mx-5 my-2" value="AÑADIR"></input>
                </form>
              </div>
            <?php } ?>
            </div>
            <div class="row postrescarta">
            <h2 class="tituloscarta" id="postr">POSTRES</h2>
            <?php foreach ($postres as $postre){?>
              <div class="col-6 col-md-3 mb-5">
                <?=$postre->getNom()?>
                <?=$postre->getPrecio()."€"?>
                <form action="carta.php" method="post">
                  <input type="hidden" name="producto" value=<?=$postre->getId();?>>
                  <input type="hidden" name="tipo" value='postre'>
                  <input type="submit" border="0" class="añadir mt-5 mx-5 my-2" value="AÑADIR"></input>
                </form>
              </div>
            <?php } ?>
            </div>
            <div class="row bebidascarta">
            <h2 class="tituloscarta" id="bebid">BEBIDAS</h2>
            <?php foreach ($bebidas as $bebida){?>
              <div class="col-6 col-md-3 mb-5">
                <?=$bebida->getNom()?>
                <?=$bebida->getPrecio()."€"?>
                <form action="carta.php" method="post">
                  <input type="hidden" name="producto" value=<?=$bebida->getId();?>>
                  <input type="hidden" name="tipo" value='bebida'>
                  <input type="submit" border="0" class="añadir mt-5 mx-5 my-2" value="AÑADIR"></input>
                </form>
              </div>
            <?php } ?>
            </div>
          </div>
      </section>
        </div>
    </section>
</body>
</html>

<?php include("views/footer.php"); ?>