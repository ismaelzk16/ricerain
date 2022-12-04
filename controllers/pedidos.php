<?php

class Pedido
{
    //Variables o atributos
    var $id_pedido;
    var $nombre_pedido;
    var $numero_pedido;
    var $fecha_pedido;

    function __construct($id_pedido,$nombre_pedido,$numero_pedido,$fecha_pedido){

        $this->id_pedido = $id_pedido;
        $this->nombre_pedido = $nombre_pedido;
        $this->numero_pedido = $numero_pedido;
        $this->fecha_pedido = $fecha_pedido;

    }


    public function getId()
    {
        return $this->id_pedido;
    }

    public function setId($id_pedido)
    {
        $this->id_pedido = $id_pedido;
    }

    public function getNombre()
    {
        return $this->nombre_pedido;
    }

    public function setNombre($nombre_pedido)
    {
        $this->nombre_pedido = $nombre_pedido;
    }
 
    
    public function getEmail()
    {
        return $this->numero_pedido;
    }

    public function setEmail($numero_pedido)
    {
        $this->numero_pedido = $numero_pedido;
    }

    public function getContraseña()
    {
        return $this->fecha_pedido;
    }

    public function setContraseña($fecha_pedido)
    {
        $this->fecha_pedido = $fecha_pedido;
    }
}
