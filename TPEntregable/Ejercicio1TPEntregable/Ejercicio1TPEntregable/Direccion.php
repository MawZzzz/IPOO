<?php
include 'Alumno.php';
// =======================
// Clase Direccion
// =======================
class Direccion {
    private $calle;
    private $numero;

    public function __construct($street, $number) {
        $this->calle = $street;
        $this->numero = $number;
    }

    // TO DO: Crear un método getDireccionCompleta() que devuelva "Calle Numero"
        public function getDireccionCompleta($cal, $num){
        $direcCom= $this->calle .",". $this->numero;

        return $direcCom;
            
        }

    }
