<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Incluye la clase base (debe estar en el mismo directorio "herencia")
include_once __DIR__ . "/persona.php";

class Estudiante extends Persona {
    private string $matricula;
    private string $carrera;

    public function __construct(string $nombre, string $apellido, string $fechaNacimiento, string $matricula, string $carrera) {
        parent::__construct($nombre, $apellido, $fechaNacimiento);
        $this->matricula = $matricula;
        $this->carrera = $carrera;
    }

    public function getMatricula(): string { return $this->matricula; }
    public function getCarrera(): string { return $this->carrera; }
}

// Instanciar e imprimir información en pantalla
$estudiante = new Estudiante("anna", "jamdan", "2002-05-10", "EST-8842", "Ciberseguridad");

echo "<h2>Datos del Estudiante</h2>";
echo "Nombre completo: " . $estudiante->getNombre() . " " . $estudiante->getApellido() . "<br>";
echo "Matrícula: " . $estudiante->getMatricula() . "<br>";
echo "Carrera: " . $estudiante->getCarrera() . "<br>";
?>