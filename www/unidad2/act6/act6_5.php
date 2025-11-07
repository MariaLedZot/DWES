<?php
/*
---
title: Ejercicio 5: Extraer nombre de fichero.
desc: Divide la ruta por '/' y devuelve el último segmento no vacío (el nombre del fichero).
tags: [PHP, explode]
code: https://github.com/
---
*/
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="María Ledesma Zotano • 2º DAW">
        <title>Ejercicio 5</title>

        <style>

        </style>
    </head>

    <body>
        <?php
        $url = "http://www.linkfred.com/carpeta1/index.php";
        $archivo = basename(parse_url($url, PHP_URL_PATH));

        echo "<strong>URL</strong>: $url<br>";
        echo "$archivo";
        ?>
    </body>

</html>