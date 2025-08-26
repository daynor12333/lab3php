<?php
require_once 'Libro.php';
require_once 'Autor.php';

class Revista extends Libro {
    private string $periocidad;

    public function __construct(string $titulo, Autor $autor, string $periocidad) {
        parent::__construct($titulo, $autor);
        $this->periocidad = $periocidad;
    }

    public function getInfo(): string {
        return "Revista: {$this->periocidad} - " . parent::getInfo();
    }
}
?>
