<?php
// =======================
// Clase Materia
// =======================
class Materia {
    private $nombre;
    private $notas = []; // un arreglo de enteros

    public function __construct($nombre) {
        $this->nombre = $nombre;
    }

    // TODO: Crear un método agregarNota($nota) que sume una nota al array
    //       Validar que la nota esté entre 1 y 10 (si no, no se guarda)
    //       que ese método devuelva true/false para emitir un mensaje 
    //       en el programa principal en caso que no se haya podido ingresar la nota

    // TODO: Crear un método calcularPromedio() que devuelva el promedio de notas
    //       CUIDADO: ¿qué pasa si no hay notas todavía?

    
}
