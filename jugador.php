<?php
include_once 'inventario.php';

class Jugador {
    private string $nombreJugador;

    public function __construct(string $nombreJugador) {
        $this->nombreJugador = $nombreJugador;
    }

}

$player = new Jugador("Leon S. Kennedy");
$objeto1 = new Arma("shotgun", "arma", 4);
$objeto2 = new Arma("magnum", "arma", 2);
$objeto3 = new Curacion("first-aid kit", "curacion");
$objeto4 = new Curacion("first-aid kit", "curacion");
$inventario = new Inventario();
$inventario->agregarObjeto($objeto1);
$inventario->agregarObjeto($objeto2);
$inventario->agregarObjeto($objeto3);
$inventario->agregarObjeto($objeto4);
$inventario->mostrarPorTipo("curacion");
echo "<hr>";
$inventario->mostrarPorTipo("arma");
$inventario->usarObjeto(2);
$inventario->mostrarPorTipo("curacion");

