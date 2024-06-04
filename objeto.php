<?php

abstract class Objeto{

    
    protected string $nombre;
    protected string $tipo;


    public function __construct(string $nombre, string $tipo) {
        $this->nombre = $nombre;
        $this->tipo = $tipo;
    }


    public function getTipo(){
        return $this->tipo;
    }


    public function usar(){
        echo $this->nombre . " ha sido utilizado." . "<br>";
    }

    abstract public function mostrarDatos();
}