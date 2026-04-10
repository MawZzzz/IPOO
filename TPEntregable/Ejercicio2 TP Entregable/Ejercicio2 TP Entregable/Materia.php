<?php
include_once "Alumno.php";
// =======================
// Clase Materia
// =======================
class Materia {
    private $nombre;
    private $notas = []; // un arreglo de enteros

    public function __construct($nombre) {
        $this->nombre = $nombre;
    }
    public function getNombre() {
        return $this->nombre;
    }
    public function getNotas() {
        return $this->notas;
    }
    
    public function setNombre($newName){
        $this-> nombre= $newName;
    }
    public function setNotas($notas){
        $this-> notas = $notas;
    }
    // TODO: Crear un método agregarNota($nota) que sume una nota al array
    //       Validar que la nota esté entre 1 y 10 (si no, no se guarda)
    //       que ese método devuelva true/false para emitir un mensaje 
    //       en el programa principal en caso que no se haya podido ingresar la nota

    public function agregarNota($nota){
        if ($nota >= 1 && $nota <=10){
            $this->notas[] = $nota;
            return true;
        } else {
            return false;
        }
    }

    // TODO: Crear un método calcularPromedio() que devuelva el promedio de notas
    //       CUIDADO: ¿qué pasa si no hay notas todavía?
    public function calcularPromedio(){
        if (count($this->notas) == 0){
            return 0; // o podrías lanzar una excepción o devolver null
        }
        $suma = array_sum($this->notas);
        $cantidad = count($this->notas);
        return $suma / $cantidad;
    }
    
}
