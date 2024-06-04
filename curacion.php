<?php

include_once 'objeto.php';

class Curacion extends Objeto{
    protected string $nombre;
    protected string $tipo;

    public function __construct(string $nombre, string $tipo) {
        parent::__construct($nombre, $tipo);
    }


    public function mostrarDatos()
    {
        echo "Nombre: " . $this->nombre . "<br>" . "Tipo: " . $this->tipo . "<br>";
    }
}