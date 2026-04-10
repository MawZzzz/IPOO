<?php
include_once "Arma.php";

class Personaje{
    private $nombre;
    private $vida;
    private $arma;

        
    public function __construct($nombre, $vida, $arma){
        $this->nombre = $nombre;
        $this->vida = $vida;
        $this->arma = $arma;
    }
 



}