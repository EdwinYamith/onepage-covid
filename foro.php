<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/stylesforo.css">
    <title>Foro de Comentarios</title>
</head>

   <body>
    <div class="container">
    <a href="index.html" class="logo"><img src="img/logo.png" alt="logo"></a> 

        <h1>Foro de Comentarios</h1>
        <?php
        $archivo_comentarios = 'comentario.txt';
        $comentarios = file_get_contents($archivo_comentarios);

        // Divide los comentarios en líneas y los muestra
        $lineas = explode("\n", $comentarios);
        foreach ($lineas as $linea) {
            list($nombre, $comentario) = explode(": ", $linea, 2);
            echo "<div class='comment'>";
            echo "Comparte:  <strong>$nombre</strong>";
            echo "<p>$comentario</p>";
            echo "</div>";
        }
        ?>
        
        <div class="button-container">
            <a class="back-button" href="index.html">Volver al Index</a>
        </div>
    </div>

<footer>

<p>Todos los derechos reservados</p>
<p><strong>Creador de pagina: </strong>Edwin Yamith Ramirez Celis </p>
<p><strong>Celular: </strong>+57 3174208476</p>
<a href="mailto:edwin65ramirez@gmail.com"target="_blank"><img src="img/gmail.png" alt="e-mail"></a>
<a href="https://github.com/EdwinYamith"target="_blank"><img src="img/github.png" alt="github"></a>


 </footer>
</body>
</html>

