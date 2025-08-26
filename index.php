<?php
require_once 'Autor.php';
require_once 'Libro.php';
require_once 'Revista.php';
require_once 'ImprimirAutor.php';

// Crear autores
$autor1 = new Autor("Elena", "White");
$autor2 = new Autor("Gabriel", "Marquez");
$autor3 = new Autor("Isaac", "Asimov");
$autor4 = new Autor("J.K.", "Rowling");

// Crear libros
$libro1 = new Libro("El Camino a Cristo", $autor1);
$libro2 = new Libro("Cien Años de Soledad", $autor2);

// Crear revistas
$revista1 = new Revista("Revista Científica", $autor3, "Mensual");
$revista2 = new Revista("Revista Literaria", $autor4, "Quincenal");


// Crear arreglo de libros y revistas
$publicaciones = [$libro1, $libro2, $revista1, $revista2];

// Imprimir información de todas las publicaciones
foreach ($publicaciones as $publicacion) {
    echo $publicacion->getInfo() . PHP_EOL;
}

// Imprimir autores
$imprimirAutor = new ImprimirAutor();
$imprimirAutor->getInfo($autor1);
$imprimirAutor->getInfo($autor2);
$imprimirAutor->getInfo($autor3);
$imprimirAutor->getInfo($autor4);
?>
