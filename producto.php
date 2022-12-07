<?php

abstract class Producto{


protected $id;
protected $nom;
protected $precio;
protected $image;


public function __construct($id, $image, $nom, $precio){
    $this->id = $id;
    $this->image = $image;
    $this->nom = $nom;
    $this->precio = $precio;

}

 
public function getImage()
{
    return $this->image;
}

public function setImage($image)
{
    $this->image = $image;

    return $this;
}

public function getId()
{
return $this->id;
}


public function setId($id)
{
$this->id = $id;

return $this;
}


public function getNom()
{
return $this->nom;
}


public function setNom($nom)
{
$this->nom = $nom;

return $this;
}


public function getPrecio()
{
return $this->precio;
}


public function setPrecio($precio)
{
$this->precio = $precio;

return $this;
}

}
?>