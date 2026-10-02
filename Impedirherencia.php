<?php

final class Coche {
    public function getColor() {
        echo "Rojo";
    }
}

// Intentar heredar generará un error fatal en PHP
// (El analizador Intelephense marcará el error correspondiente de forma aislada)
class CocheDeLujo extends Coche {
    // Fatal error: clase no heredada 
}

?>