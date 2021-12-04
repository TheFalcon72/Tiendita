<?php
    //Requiere coonexion con MySql como si fuera una libreria
    require ('BD/ContoladorBD.php');
    require ('BD/ProductoBD.php');
    require ('BD/CarritoBD.php');

    //Crea un objeto controlador para conectarse
    $bd = new ControlBD();

    //Objeto Producto
    $producto = new Producto($bd);
    
    //Objeto Carrito
    $carrtio = new Carrito($bd);
    $arreglo = array(
        "UsuarioID" => 1,
        "ProductoID" => 2
    );