<?php
// Activar errores para depuración
ini_set('display_errors', 1);
error_reporting(E_ALL);

// 1. Incluir la clase base Persona (debe estar en la misma carpeta "herencia")
include_once "Persona.php";

// 2. Definir la clase Docente que hereda de Persona
class Docente extends Persona {
    protected string $codigoDocente;
    protected string $departamento;
    protected string $categoria;
    protected string $maximoTitulo;
    protected string $tipoContratacion;

    public function __construct(
        string $codigoDocente,
        string $departamento,
        string $categoria,
        string $maximoTitulo,
        string $tipoContratacion,
        string $nombre,
        string $apellido,
        string $fechaNacimiento
    ) {
        parent::__construct($nombre, $apellido, $fechaNacimiento);
        $this->codigoDocente = $codigoDocente;
        $this->departamento = $departamento;
        $this->categoria = $categoria;
        $this->maximoTitulo = $maximoTitulo;
        $this->tipoContratacion = $tipoContratacion;
    }

    public function getCodigoDocente(): string {
        return $this->codigoDocente;
    }

    public function getDepartamento(): string {
        return $this->departamento;
    }

    public function getCategoria(): string {
        return $this->categoria;
    }

    public function getMaximoTitulo(): string {
        return $this->maximoTitulo;
    }

    public function getTipoContratacion(): string {
        return $this->tipoContratacion;
    }
}

// 3. Crear el objeto para probar y mostrar en pantalla
$miDocente = new Docente(
    "DOC-2026",
    "Seguridad e Informática",
    "Titular",
    "Magíster",
    "Tiempo Completo",
    "Carlos",
    "Mendoza",
    "1985-04-12"
);

echo "<h2>Datos del Docente</h2>";
echo "Código: " . $miDocente->getCodigoDocente() . "<br>";
echo "Nombre: " . $miDocente->getNombre() . " " . $miDocente->getApellido() . "<br>";
echo "Fecha de Nacimiento: " . $miDocente->getFechaNacimiento() . "<br>";
echo "Departamento: " . $miDocente->getDepartamento() . "<br>";
echo "Categoría: " . $miDocente->getCategoria() . "<br>";
echo "Máximo Título: " . $miDocente->getMaximoTitulo() . "<br>";
echo "Tipo de Contratación: " . $miDocente->getTipoContratacion() . "<br>";
?>