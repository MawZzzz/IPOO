<?php

// =======================
// Clase Alumno
// =======================
class Alumno {
    private $nombre;
    private $apellido;
    private $materias = []; // un arreglo de objetos Materia

    public function __construct($nombre, $apellido) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }

    public function getNombreCompleto() {
        return $this->nombre . " " . $this->apellido;
    }
    public function getMaterias() {
        return $this->materias;
    }
    public function getNombre() {
        return $this->nombre;
    }
    public function getApellido() {
        return $this->apellido;
    }
    
    public function setNombre($newName){
        $this-> nombre= $newName;
    }
    public function setApellido($newSurName){
        $this-> apellido = $newSurName; 
    }
    public function setMaterias($materias){
        $this-> materias = $materias;
    }
    

    public function __tostring(){
        $mensaje="\n";
        $mensaje = "Valores de las variables instancias \n";
        $mensaje .= "Nombre: ". $this->getNombre() ."\n";
        $mensaje .= "Apellido". $this->getApellido() ."\n";
        return $mensaje;
    }
    // TODO: Crear un método agregarMateria($materia) que reciba un objeto Materia
    public function agregarMateria($materia){
        $this-> materias[] = $materia;
        array_push($this->materias, $materia);
    }

    // y lo agregue al array de materias del alumno
    

    // un arreglo de objetos Materia
    public function materia($materia){
        $materia=[];
        array_push($materia, $materia);

}
    //       y lo agregue al array de materias del alumn
    // TODO: Crear un método mostrarMaterias() que liste el nombre de cada materia
    //       y su promedio de notas
    public function mostrarMaterias(){
        foreach ($this->materias as $materia){
            echo "Materia: " . $materia->getNombre() . "\n";
            echo "Promedio: " . $materia->calcularPromedio() . "\n";
        }
    }

    // TODO EXTRA: Crear un método calcularPromedioGeneral() que saque el promedio de TODAS las materias
        public function calcularPromedioGeneral(){
            $totalNotas = 0;
            $cantidadNotas = 0;
            foreach ($this->materias as $materia){
                $notas = $materia->getNotas();
                $totalNotas += array_sum($notas);
                $cantidadNotas += count($notas);
            }
            if ($cantidadNotas > 0) {
                return $totalNotas / $cantidadNotas;
            } else {
                return 0; // o algún valor que indique que no hay notas
            }
        }   
    }
