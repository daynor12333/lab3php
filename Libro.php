<?php
require_once 'Autor.php';
require_once 'IPublicable.php';

class Libro implements IPublicable {
    private Autor $autor;
    private string $titulo;

    public function __construct(string $titulo, Autor $autor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
    }

    public function getInfo(): string {
        return "Libro: $this->titulo, Autor: " . $this->autor->getNombre() . " " . $this->autor->getApellido();
    }
}
?>
