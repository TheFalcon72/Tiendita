<?php

//Para consultar los datos de producto
class Producto{
    public $bd = null;

    public function __construct(ControlBD $bd){
        if(!isset($bd->conn)) return null;
        $this->bd = $bd;
    }

    //Seleccionar datos de Tabla Productos
    public function getDatos($tabla = 'producto'){
        $select = $this->bd->conn->query(query:"SELECT * FROM {$tabla}");

        $selectArreglo = array();

        while($articulo = mysqli_fetch_array($select, MYSQLI_ASSOC)){
            $selectArreglo[] = $articulo;
        }

        return $selectArreglo;
    }
}