<?php
require 'conexion.php';

class insumos extends Conexion{
    public $insumo_id;
    public $nombre_insumo;
    public $existencia;
    public $marca_producto;
    public $nombre_proveedor;
    public $precio_insumo;


    public function __construct($args = [] )
    {
        $this->alum_id = $args['alum_id'] ?? null;
        $this->nombre_insumo = $args['nombre_insumo'] ?? '';
        $this->existencia = $args['existencia'] ?? '';
        $this->marca_producto = $args['marca_producto'] ?? '';
        $this->nombre_proveedor = $args['nombre_proveedor'] ?? '';
        $this->precio_insumo = $args['precio_insumo'] ?? '';
    }

    public function guardar(){
        $sql = "INSERT INTO insumos(nombre_insumo, existencia, marca_producto, nombre_proveedor, precio_insumo) values('$this->nombre_insumo', '$this->existencia', '$this->marca_producto', '$this->nombre_proveedor', '$this->precio_insumo')";
        $resultado = self::ejecutar($sql);
        return $resultado;
    }
}