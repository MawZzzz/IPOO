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

    // TODO: Crear un método agregarMateria($materia) que reciba un objeto Materia

    // TODO: Crear un método mostrarMaterias() que liste el nombre de cada materia
    //       y su promedio de notas

    // TODO EXTRA: Crear un método calcularPromedioGeneral() que saque el promedio de TODAS las materias
}
