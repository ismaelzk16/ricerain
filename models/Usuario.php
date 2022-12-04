
<?php

class Usuario
{
    //Variables o atributos
    var $id;
    var $nombre;
    var $email;
    var $contraseña;

    function __construct($id,$nombre,$email,$contraseña){

        $this->id = $id;
        $this->nombre = $nombre;
        $this->email = $email;
        $this->contraseña = $contraseña;

    }


    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
 

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getContraseña()
    {
        return $this->contraseña;
    }

    public function setContraseña($contraseña)
    {
        $this->contraseña = $contraseña;
    }
}
