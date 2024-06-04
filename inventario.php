<?php

include_once 'objeto.php';
include_once 'curacion.php';
include_once 'arma.php';

class Inventario{
    private array $objetos;
    private string $salud = "Fine";

    public function agregarObjeto($objeto){
        $this->objetos[] = $objeto;
        
    }
    
    public function usarObjeto(int $indice){
        $this->objetos[$indice]->usar();
        unset($this->objetos[$indice]);

    }

    public function mostrarSalud(){
        return $this->salud;
    }

    public function mostrarPorTipo(string $nombreTipo){
        foreach ($this->objetos as $objeto) {
            if($objeto->getTipo() == $nombreTipo){
                $objeto->mostrarDatos();
            }
        }
    }

}
