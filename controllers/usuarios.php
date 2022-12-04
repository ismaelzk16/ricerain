
<?php

class usuarios
{
    var $usuarios;

    function __construct()
    {
        $this->usuarios  = [];
    }
 
    public function index(){

        //Asigno los coches a una variable que estará esperando la vista
        $rowset = $this->usuarios;


        //Le paso los datos a la vista
        require("views/index.php");

    }

}
