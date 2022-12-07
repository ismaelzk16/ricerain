<?php

require_once 'entrante.php';
require_once 'arroz.php';
require_once 'postre.php';
require_once 'bebida.php';


$entrantes = array(new Entrante(0, "/assets/images/croquetas", "SURTIDO DE CROQUETAS", 4.50),
                   new Entrante(1, "assets/images/bravas", "PATATAS BRAVAS PICANTES", 4.50),
                   new Entrante(2, "assets/images/jamon", "TABLA DE JAMÓN IBÉRICO", 10),
                   new Entrante(3, "assets/images/huevos", "HUEVOS ROTOS CON JAMÓN IBÉRICO", 4.50),
                   new Entrante(4, "assets/images/pantumaca", "PAN CON TOMATE", 2),
                   new Entrante(5, "assets/images/gmabas", "GAMBAS AL AJILLO", 4),
                   new Entrante(6, "assets/images/cesar", "ENSALADA CÉSAR", 6),
                   new Entrante(7, "assets/images/tabule", "TABBULE ORIENTAL", 4));


$arroces = array(new Arroz(0, "assets/images/paella", "PAELLA DOBLE B (BOLETS Y BOTIFARRA)", 25),
                 new Arroz(1, "assets/images/paella", "PAELLA MAR Y MONTAÑA", 25),
                 new Arroz(2, "assets/images/paella", "PAELLA DE POLLO", 20),
                 new Arroz(3, "assets/images/paella", "PAELLA DE MARISCOS", 30),
                 new Arroz(4, "assets/images/paella", "PAELLA DE VERDURA", 18),
                 new Arroz(5, "assets/images/paella", "ARROZ CALDOSO CON BOGAVANTE", 22),
                 new Arroz(6, "assets/images/paella", "ARROZ CON CARABINEROS", 26),
                 new Arroz(7, "assets/images/paella", "RISSOTO DE SETAS", 16));

                   
$postres = array(new Postre(0, "assets/images/arrozleche", "ARROZ CON LECHE", 3.50),
                 new Postre(1, "assets/images/cremacat", "CREMA CATALANA", 3.50),
                 new Postre(2, "assets/images/flan", "FLAN DE HUEVO", 3.50),
                 new Postre(3, "assets/images/lechefrita", "LECHE FRITA", 2.25),
                 new Postre(4, "assets/images/gofre", "GOFRES CASEROS", 4),
                 new Postre(5, "assets/images/saniago", "TARTA DE SANTIAGO", 4.50),
                 new Postre(6, "assets/images/tartaqueso", "TARTA DE QUESO", 4.50),
                 new Postre(7, "assets/images/fruta", "FRUTA DE TEMPORADA", 1.50));

                   
$bebidas = array(new Bebida(0, "assets/images/refresco", "REFRESCOS", 1.50),
                 new Bebida(1, "assets/images/agua", "AGUA", 0.80),
                 new Bebida(2, "assets/images/vtinto", "VINOS TINTOS ", 4),
                 new Bebida(3, "assets/images/vrosado", "VINOS ROSADOS", 4),
                 new Bebida(4, "assets/images/vblanco", "VINOS BLANCOS", 4),
                 new Bebida(5, "assets/images/sangriua", "SANGRÍA", 5),
                 new Bebida(6, "assets/images/cerveza", "CERVEZA", 1.50),
                 new Bebida(7, "assets/images/cafe", "CAFÉ", 1.20));

?>    