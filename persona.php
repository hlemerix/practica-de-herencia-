<?php
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
        return mb_convert_case(trim($cadena), MB_CASE_TITLE, "UTF-8");
    }

    public function getNombre(): string { return $this->nombre; }
    public function getApellido(): string { return $this->apellido; }
    public function getFechaNacimiento(): string { return $this->fechaNacimiento; }
}