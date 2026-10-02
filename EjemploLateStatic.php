<?php
// --- Ejemplo 1: Con static
class A {
    public static function miFuncion() {
        echo __CLASS__;
    }

    public static function otraFuncion() {
        static::miFuncion(); // Evalúa la clase que invoca en tiempo de ejecución
    }
}

class B extends A {
    public static function miFuncion() {
        echo __CLASS__;
    }
}

echo "Resultado con static:: ";
B::otraFuncion(); // Salida: B

echo "\n<br>\n";

// Ejemplo 2: Con self:: 
class A2 {
    public static function miFuncion() {
        echo __CLASS__;
    }

    public static function otraFuncion() {
        self::miFuncion(); // Enlace estático estricto a la clase original (A2)
    }
}

class B2 extends A2 {
    public static function miFuncion() {
        echo __CLASS__;
    }
}

echo "Resultado con self:: ";
B2::otraFuncion(); // Salida: A2
?>