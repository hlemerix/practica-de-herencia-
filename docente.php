<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

class Persona {
    protected string $nombre;
    protected string $apellido;
    protected string $fechaNacimiento;

    public function __construct(string $nombre, string $apellido, string $fechaNacimiento) {
        $this->nombre = $this->formatearNombre($nombre);
        $this->apellido = $this->formatearNombre($apellido);
        $this->fechaNacimiento = $fechaNacimiento;
    }

    private function formatearNombre(string $cadena): string {
        $cadenaLimpia = trim($cadena);
        return mb_convert_case($cadenaLimpia, MB_CASE_TITLE, "UTF-8");
    }

    public function getNombre(): string { return $this->nombre; }
    public function getApellido(): string { return $this->apellido; }
    public function getFechaNacimiento(): string { return $this->fechaNacimiento; }
}

class DocenteResumen extends Persona {
    private string $codigoDocente;
    private string $departamento;
    private string $titulo;
    private string $categoria;

    public function __construct(
        string $nombre, string $apellido, string $fechaNacimiento,
        string $codigoDocente, string $departamento, string $titulo, string $categoria
    ) {
        parent::__construct($nombre, $apellido, $fechaNacimiento);
        $this->codigoDocente = $codigoDocente;
        $this->departamento = $departamento;
        $this->titulo = $titulo;
        $this->categoria = $categoria;
    }

    public function getCodigoDocente(): string { return $this->codigoDocente; }
    public function getDepartamento(): string { return $this->departamento; }
    public function getTitulo(): string { return $this->titulo; }
    public function getCategoria(): string { return $this->categoria; }
}

$docente = new DocenteResumen(
    "irina", "fong", "1985-08-20",
    "DOC-1029", "Sistemas Computacionales", "MSc. Desarrollo Web", "Titular"
);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos del Docente</title>
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

        .card-header-doc { 
            background-color: #2c3e50; 
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

<!-- Tarjeta Docente -->
<div class="card">
    <div class="card-header-doc card-header">
        <h2>Datos del Docente</h2>
    </div>
    <div class="card-body">
        <div class="info-row">
            <span class="label">Nombre completo</span>
            <span class="value"><?php echo $docente->getNombre() . " " . $docente->getApellido(); ?></span>
        </div>
        <div class="info-row">
            <span class="label">Código Docente</span>
            <span class="value"><?php echo $docente->getCodigoDocente(); ?></span>
        </div>
        <div class="info-row">
            <span class="label">Fecha de Nacimiento</span>
            <span class="value"><?php echo $docente->getFechaNacimiento(); ?></span>
        </div>
        <div class="info-row">
            <span class="label">Departamento</span>
            <span class="value"><?php echo $docente->getDepartamento(); ?></span>
        </div>
        <div class="info-row">
            <span class="label">Título</span>
            <span class="value"><?php echo $docente->getTitulo(); ?></span>
        </div>
        <div class="info-row">
            <span class="label">Categoría</span>
            <span class="value"><?php echo $docente->getCategoria(); ?></span>
        </div>
    </div>
</div>

</body>
</html>