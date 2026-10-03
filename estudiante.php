<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

include_once __DIR__ . "/persona.php";

class Estudiante extends Persona {
    private string $matricula;
    private string $carrera;
    private string $semestre;

    public function __construct(
        string $nombre, string $apellido, string $fechaNacimiento, 
        string $matricula, string $carrera, string $semestre
    ) {
        parent::__construct($nombre, $apellido, $fechaNacimiento);
        $this->matricula = $matricula;
        $this->carrera = $carrera;
        $this->semestre = $semestre;
    }

    public function getMatricula(): string { return $this->matricula; }
    public function getCarrera(): string { return $this->carrera; }
    public function getSemestre(): string { return $this->semestre; }
}

$estudiante = new Estudiante(
    "hanna", "licona", "2002-05-10", 
    "EST-8842", "Lic. en Ciberseguridad", "V Semestre"
);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos del Estudiante</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #e0c3fc 0%, #8ec5fc 100%);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .card {
            background-color: #ffffff;
            width: 350px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
            overflow: hidden;
        }

        .card-header {
            background-color: #4a90e2;
            color: white;
            padding: 20px;
            text-align: center;
        }

        .card-header h2 { margin: 0; font-size: 1.4rem; }

        .card-body { padding: 25px; }

        .info-row {
            margin-bottom: 12px;
            border-bottom: 1px solid #f0f0f0;
            padding-bottom: 6px;
        }

        .info-row:last-child { border-bottom: none; margin-bottom: 0; padding-bottom: 0; }

        .label {
            font-weight: 600;
            color: #7f8c8d;
            font-size: 0.75rem;
            text-transform: uppercase;
            display: block;
            margin-bottom: 2px;
        }

        .value { color: #2c3e50; font-size: 1rem; font-weight: 500; }
    </style>
</head>
<body>

<div class="card">
    <div class="card-header">
        <h2>Datos del Estudiante</h2>
    </div>
    <div class="card-body">
        <div class="info-row">
            <span class="label">Nombre completo</span>
            <span class="value"><?php echo $estudiante->getNombre() . " " . $estudiante->getApellido(); ?></span>
        </div>
        <div class="info-row">
            <span class="label">Matrícula</span>
            <span class="value"><?php echo $estudiante->getMatricula(); ?></span>
        </div>
        <div class="info-row">
            <span class="label">Fecha de Nacimiento</span>
            <span class="value"><?php echo $estudiante->getFechaNacimiento(); ?></span>
        </div>
        <div class="info-row">
            <span class="label">Carrera</span>
            <span class="value"><?php echo $estudiante->getCarrera(); ?></span>
        </div>
        <div class="info-row">
            <span class="label">Semestre</span>
            <span class="value"><?php echo $estudiante->getSemestre(); ?></span>
        </div>
    </div>
</div>

</body>
</html>