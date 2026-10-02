<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

class Persona {
    protected string $nombre;
    protected string $apellido;
    protected string $fechaNacimiento;

    public function __construct(string $nombre, string $apellido, string $fechaNacimiento) {
        // Capitalizar primera letra de cada palabra
        $this->nombre = $this->formatearNombre($nombre);
        $this->apellido = $this->formatearNombre($apellido);
        $this->fechaNacimiento = $fechaNacimiento;
    }

    // Método auxiliar para capitalizar nombres y apellidos correctamente (compatible con tildes)
    private function formatearNombre(string $cadena): string {
        $cadenaLimpia = trim($cadena);
        return mb_convert_case($cadenaLimpia, MB_CASE_TITLE, "UTF-8");
    }

    // Setters con control de mayúsculas
    public function setNombre(string $nombre): void {
        $this->nombre = $this->formatearNombre($nombre);
    }

    public function setApellido(string $apellido): void {
        $this->apellido = $this->formatearNombre($apellido);
    }

    public function setFechaNacimiento(string $fechaNacimiento): void {
        $this->fechaNacimiento = $fechaNacimiento;
    }

    // Getters
    public function getNombre(): string {
        return $this->nombre;
    }

    public function getApellido(): string {
        return $this->apellido;
    }

    public function getFechaNacimiento(): string {
        return $this->fechaNacimiento;
    }
}
?>