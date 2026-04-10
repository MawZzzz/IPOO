<?php
include 'Alumno.php';
include 'Direccion.php';
// =======================
// Programa Principal
// =======================

// 1) Crear un objeto Direccion para "Av. Siempre Viva 742"
$Direccion= new Direccion ("Av.Siempre Viva", "742");

// 2) Crear un objeto Alumno llamado "Bart Simpson"

$newAlumno= new Alumno ("Bart", "Simpson");

// 3) Asignar la dirección al alumno usando delegación
$this->getAlumno()->$this->getDireccionCompleta();

// 4) Mostrar los datos completos del alumno

$alumnoNew=$this->mostrarDatos(); 
