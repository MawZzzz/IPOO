
<?php
include_once "Direccion.php";  
include_once "TestAlumno.php";

// =======================
// Clase Alumno
// =======================
class Alumno {
    private $nombre;
    private $apellido;
    private $direccion; // Delegación -> un Alumno tiene una Direccion

    public function __construct($nombre, $apellido, $dir) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->direccion = $dir;
        // TODO: Completar con los datos faltantes para inicializar todo el objeto completo
    }

       
    // TODO: Crear un método setDireccion($direccion) que reciba un objeto Direccion
        public function setNombre($newName){
            $this->nombre= $newName;
        }
        
        public function setApellido($newSurName){
            $this->apellido = $newSurName; 
        }

        public function setDireccion($direcCom){
            $direcCom=$this->direccion;

        }

        public function getDireccion($direc){
            return $this->direccion;
        }
    // TODO: Crear un método mostrarDatos() que imprima el nombre, apellido y dirección completa del alumno
            public function mostrarDatos($alumnoNew){
                $cadena="El alumno es:".$this->nombre . $this->apellido . " y su direccion es:".$this->direccion;



            }


    }
