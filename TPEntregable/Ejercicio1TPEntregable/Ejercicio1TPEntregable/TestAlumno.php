<?php
include_once 'Direccion.php';
include_once 'Alumno.php';

// =======================
// Programa Principal
// =======================

// 1) Crear un objeto Direccion para "Av. Siempre Viva 742"
$direccionAlumno = new Direccion ("Av.Siempre Viva", "742");

// 2) Crear un objeto Alumno llamado "Bart Simpson"

$newAlumno= new Alumnos ("Bart", "Simpson", $direccionAlumno);
echo $newAlumno;
// 3) Asignar la dirección al alumno usando delegación
$direccionAlumno= new Direccion ("Av. Argentina","2400");
$newAlumno->setDireccion($direccionAlumno);
echo $newAlumno;


// 4) Mostrar los datos completos del alumno
$newAlumno->mostrarDatos($newAlumno);



?>