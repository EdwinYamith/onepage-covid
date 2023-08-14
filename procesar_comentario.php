<?php
$nombre = $_POST['nombre'];
$comentario = $_POST['comentario'];

// Crea o abre el archivo de comentarios
$archivo_comentarios = 'comentario.txt';
$contenido = "$nombre: $comentario\n";

// Agrega el comentario al archivo
file_put_contents($archivo_comentarios, $contenido, FILE_APPEND);

// Redirige de vuelta al formulario
header("Location: index.html");
?>
