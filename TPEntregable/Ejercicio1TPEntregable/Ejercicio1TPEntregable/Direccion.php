<?php
include_once 'Alumno.php';
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

        public function getCalle() {
            return $this->calle;

        }
        public function getNumero() {
            return $this->numero;
        }   

        public function setCalle($newStreet){
            $this->calle= $newStreet;
        }

        public function setNumero($newNumber){
            $this->numero= $newNumber;
        }

    // TO DO: Crear un método getDireccionCompleta() que devuelva "Calle Numero"
        public function getDireccionCompleta(){
        $direcCom = "";
        $direcCom .= $this->getCalle();
        $direcCom .= " " . $this->getNumero();
        

        return $direcCom;
            
        }

        public function __tostring() {
            $mensaje = "";
            $mensaje .= $this->getCalle() . "\n";
            $mensaje .= $this->getNumero() ."\n";

            return $mensaje;

    }
}






?>