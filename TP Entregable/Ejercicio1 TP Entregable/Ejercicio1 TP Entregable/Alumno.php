
<?php


// =======================
// Clase Alumno
// =======================
class Alumno {
    private $nombre;
    private $apellido;
    private $direccion; // Delegación -> un Alumno tiene una Direccion

    public function __construct($nombre, $apellido) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        // TODO: Completar con los datos faltantes para inicializar todo el objeto completo
    }

    // TODO: Crear un método setDireccion($direccion) que reciba un objeto Direccion

    // TODO: Crear un método mostrarDatos() que imprima el nombre, apellido y dirección completa del alumno
}
