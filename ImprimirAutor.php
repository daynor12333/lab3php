<?php
require_once 'Autor.php';

class ImprimirAutor {
    public function getInfo(Autor $autor) {
        echo "Autor: " . $autor->getNombre() . " " . $autor->getApellido() . PHP_EOL;
    }
}
?>
