<?php
include_once "Alumno.php";
include_once "Materia.php";
// =======================
// Programa Principal
// =======================

// 1) Crear un Alumno "Lisa Simpson"
$alumnoNew = new Alumno ("Lisa", "Simpson");

// 2) Crear dos materias: "Matemática" y "Música"
$matematica = new Materia ("Matemática");       //Completar
$musica = new Materia ("Música");          //Completar

// 3) Agregar algunas notas a cada materia. Modificar las sentencias siguientes
//      si la nota no se pudo agregar
$matematica->agregarNota(10);
$matematica->agregarNota(9);
$matematica->agregarNota(11); // deberia dar ERROR: nota fuera de rango
$matematica->agregarNota(20); // deberia dar ERROR: nota fuera de rango
$matematica->agregarNota(0); // deberia dar ERROR: nota fuera de rango
$matematica->agregarNota(-5); // deberia dar ERROR: nota fuera de rango
echo "Agregando nota 10 a Matemática: " . ($matematica->agregarNota(10) ? "Éxito" : "Error") . "\n";
echo "Agregando nota 9 a Matemática: " . ($matematica->agregarNota(9) ? "Éxito" : "Error") . "\n";
echo "Agregando nota 11 a Matemática: " . ($matematica->agregarNota(11) ? "Éxito" : "Error") . "\n";
echo "Agregando nota 20 a Matemática: " . ($matematica->agregarNota(20) ? "Éxito" : "Error") . "\n";
echo "Agregando nota 0 a Matemática: " . ($matematica->agregarNota(0) ? "Éxito" : "Error") . "\n";
echo "Agregando nota -5 a Matemática: " . ($matematica->agregarNota(-5) ? "Éxito" : "Error") . "\n";
echo "\n";


$musica->agregarNota(8);
$musica->agregarNota(7);
echo "Agregando nota 8 a Música: " . ($musica->agregarNota(8) ? "Éxito" : "Error") . "\n";
echo "Agregando nota 7 a Música: " . ($musica->agregarNota(7) ? "Éxito" : "Error") . "\n";
echo "\n";


// 4) Asignar las materias al alumno 
$alumnoNew->agregarMateria($matematica);
$alumnoNew->agregarMateria($musica);

// 5) Mostrar los datos de Lisa y el promedio general
$alumnoNew->mostrarMaterias(); // Completar para mostrar los datos del alumno


// 6) Mostrar las materias y calcular el promedio general
echo "Promedio general de " . $alumnoNew->getNombreCompleto() . ": " . $alumnoNew->calcularPromedioGeneral() . "\n";

