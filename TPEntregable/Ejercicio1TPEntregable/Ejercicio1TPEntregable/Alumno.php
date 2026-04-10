
<?php
include_once "Direccion.php";  
include_once "TestAlumno.php";

// =======================
// Clase Alumno
// =======================
class Alumnos {
    private $nombre;
    private $apellido;
    private $direccion; // Delegación -> un Alumno tiene una Direccion

    public function __construct($nombre, $apellido, $direccion) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->direccion = $direccion;
        // TODO: Completar con los datos faltantes para inicializar todo el objeto completo
    }

       
        public function getNombre() {
            return $this->nombre;
        }   
        public function getApellido() {
            return $this->apellido;
        }

        public function getDireccion($direcCom){
            return $this-> direccion;
        }
        
        public function setNombre($newName){
            $this-> nombre= $newName;
        }
        
        public function setApellido($newSurName){
            $this-> apellido = $newSurName; 
        }


    // TODO: Crear un método setDireccion($direccion) que reciba un objeto Direccion
        
        public function setDireccion($direccion){
           $this-> direccion = $direccion;

           
           

        }

        
    


    
    
    public function mostrarDatos($alumnoNew){
        echo "Nombre: " . $this->nombre ."\n";
        echo "Apellido: ". $this->apellido ."\n";
        $objDireccion = $this->getDireccion($alumnoNew);
        // Delegación
        $direccion = $objDireccion->getDireccionCompleta();
        echo $direccion ."\n";
    }

    public function __tostring(){
        $mensaje="\n";
        $mensaje .= "Nombre: ". $this->getNombre() ."\n";
        $mensaje .= "Apellido". $this->getApellido() ."\n";
        $mensaje .= "Dirección: \n";
        $objDireccion = $this->getDireccion($this->direccion); 
        $direccion = $objDireccion->__tostring();
        $mensaje .= $direccion ."\n";
        return $mensaje;
    }





}

?>