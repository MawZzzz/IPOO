<?php
include_once "Personaje.php";

class Arma{
    private $nombre;
    private $ataque;
    private $ataqueCritico;

    public function __construct($nombre, $ataque, $critico ){
        $this->nombre = $nombre;
        $this->ataque = $ataque;
        $this->ataqueCritico = $critico;
        }

        public function getNombre(){
            return $this->nombre;
        }
        public function getAtaque(){
            return $this->ataque;
        }
        public function getAtaqueCritico(){
            return $this->ataqueCritico;
        }



}







?>