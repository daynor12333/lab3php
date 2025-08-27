<?php
require_once 'Autor.php';

class ImprimirAutor {
    public function getInfo(Autor $autor): void {
        echo "Autor: " . $autor->getNombre() . " " . $autor->getApellido() . PHP_EOL;
    }
}
