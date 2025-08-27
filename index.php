<?php
require_once 'Autor.php';
require_once 'Libro.php';
require_once 'Revista.php';
require_once 'ImprimirAutor.php';

// Crear autores con nombres descriptivos
$autorElenaWhite = new Autor("Elena", "White");
$autorGabrielMarquez = new Autor("Gabriel", "Marquez");
$autorIsaacAsimov = new Autor("Isaac", "Asimov");
$autorJKRowling = new Autor("J.K.", "Rowling");

// Crear libros
$libroElenaWhite = new Libro("El Camino a Cristo", $autorElenaWhite);
$libroGabrielMarquez = new Libro("Cien Años de Soledad", $autorGabrielMarquez);

// Crear revistas
$revistaIsaacAsimov = new Revista("Revista Científica", $autorIsaacAsimov, "Mensual");
$revistaJKRowling = new Revista("Revista Literaria", $autorJKRowling, "Quincenal");

// Crear arreglo de publicaciones
/** @var IPublicable[] $publicaciones */
$publicaciones = [$libroElenaWhite, $libroGabrielMarquez, $revistaIsaacAsimov, $revistaJKRowling];

// Imprimir información de todas las publicaciones
foreach ($publicaciones as $publicacion) {
    echo $publicacion->getInfo() . PHP_EOL;
}

// Imprimir autores
$imprimirAutor = new ImprimirAutor();
$imprimirAutor->getInfo($autorElenaWhite);
$imprimirAutor->getInfo($autorGabrielMarquez);
$imprimirAutor->getInfo($autorIsaacAsimov);
$imprimirAutor->getInfo($autorJKRowling);
