<?php
require 'Conexion.php';

class alumnos extends Conexion{
    public $alum_id;
    public $alum_nom;
    public $alum_apelli;
    public $alum_fecha_naci;
    public $alum_tel;
    public $alum_correo;


    public function __construct($args = [] )
    {
        $this->alum_id = $args['alum_id'] ?? null;
        $this->alum_nom = $args['alum_nom'] ?? '';
        $this->alum_apelli = $args['alum_apelli'] ?? '';
        $this->alum_fecha_naci = $args['alum_fecha_naci'] ?? '';
        $this->alum_tel = $args['alum_tel'] ?? '';
        $this->alum_correo = $args['alum_correo'] ?? '';
    }

    public function guardar(){
        $sql = "INSERT INTO alumnos(alum_nom, alum_apelli, alum_fecha_naci, alum_tel, alum_correo) values('$this->alum_nom', '$this->alum_apelli', '$this->alum_fecha_naci', '$this->alum_tel', '$this->alum_correo')";
        $resultado = self::ejecutar($sql);
        return $resultado;
    }
}