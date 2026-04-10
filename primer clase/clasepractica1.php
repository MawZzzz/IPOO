<?php
/*DEFINIR siguientes terminos:

Objeto:
       
Clase:
      
Método:
       
Atributos:
          
*/
include_once ("pruebasAutos.php");

class AUTOS

{
    private string $anio; //entero
    private string $marca; //string
    private string $modelo; //string
    private string $patente; //entero
    private string $color; //string
    private string $cantPuertas;

    private string $capTanque;
    private string $nChasis;

    private string $kmReco;
    private string $nTanque;
    private string $litrosXkilometro;
    
    public function __construct($an,$mar,$mod,$pat,$col,$cantP,$capT,$nCha,$kmR,$nT,$lXk
    )
    {
        $this -> anio =$an;
        $this ->marca =$mar;
        $this ->modelo =$mod;
        $this ->patente =$pat;
        $this ->color =$col;
        $this ->cantPuertas =$cantP;


    }





     public function getAnio($anx){

        return $this ->anio;
     }
     public function getMarca($mar)
     {
        return $this-> marca;
     }
     public function getModelo($mod){
        return $this-> modelo;

     }  

    public function setAnio($newAnio){
        $this -> anio = $newAnio;
    }


    public function __toString(){


return $nuevoAuto= "Automovil". $this->marca. "/n" . "Modelo". $this->modelo . "/n" . "Patente". $this->patente;

$nuevoAuto=$nuevoAuto . "Año" . $this-> getAnio($an);

    }
    
    }











?>