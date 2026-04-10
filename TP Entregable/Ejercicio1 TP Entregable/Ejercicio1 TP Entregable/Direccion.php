<?php
// =======================
// Clase Direccion
// =======================
class Direccion {
    private $calle;
    private $numero;

    public function __construct($calle, $numero) {
        $this->calle = $calle;
        $this->numero = $numero;
    }

    // TO DO: Crear un método getDireccionCompleta() que devuelva "Calle Numero"
}