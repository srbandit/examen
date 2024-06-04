<?php

include_once 'objeto.php';

class Arma extends Objeto{
    protected string $nombre;
    protected string $tipo;
    protected int $municion;

    public function __construct(string $nombre, string $tipo, int $municion) {
        parent::__construct($nombre, $tipo, $municion);
        $this->municion = $municion;
    }


    public function mostrarDatos()
    {
        echo "Nombre: " . $this->nombre . "<br>" . "Tipo: " . $this->tipo . "<br>" . "Munición: " . $this->municion . "<br>";
    }
}