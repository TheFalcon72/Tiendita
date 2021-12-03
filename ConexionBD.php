<?php
    //Requiere coonexion con MySql como si fuera una libreria
    require ('BD/ContoladorBD.php');
    require ('BD/ProductoBD.php');

    //Crea un objeto controlador para conectarse
    $bd = new ControlBD();

    $producto = new Producto($bd);