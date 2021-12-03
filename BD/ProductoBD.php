<?php

//Para consultar los datos de producto
class Producto{
    public $bd = null;

    public function __construct(ControlBD $bd){
        if(!isset($bd->conn)) return null;
        $this->bd = $bd;
    }
}