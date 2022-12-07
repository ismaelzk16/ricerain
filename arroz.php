<?php
require_once 'producto.php';

class Arroz extends Producto{

    public function __construct($id, $image, $nom, $precio){
        parent::__construct($id, $image, $nom, $precio);
    }

    public function preuMesIva(){
        return $this->precio * 1.21;
    }

    public function calcularPrecioTotal($numDias=1){
        $precioTotal = $numDias*$this->preuMesIva();
        return $precioTotal;
    }

}
?>