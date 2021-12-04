<?php

    class Carrito{
        public $bd = null;

        public function __construct(ControlBD $bd){
            if(!isset($bd->conn)) return null;
            $this->bd = $bd;
        }

        //Agregar a Carrito
        public function insertCarrito($parametros = null, $tabla = "carrito"){{
            if($this->bd->conn != null){
                if($parametros != null){
                    //INSER a Carrtio
                    $columnas = implode(',',array_keys($parametros));
                    print_r($columnas);
                    $valores = implode(',', array_keys($parametros));
                    print_r($valores);

                    //SQL
                    $cadenaQuery = sprintf("INSERT INTO %s(%s) VALUES (%s)", $tabla, $columnas, $valores);
                    echo $cadenaQuery;
                }
            }
        }}
    }
?>