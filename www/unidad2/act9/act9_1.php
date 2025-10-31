<?php
/*
---
title: Ejercicio 1: Gestión de Comentarios con Ficheros.
desc: Controla comentarios sin base de datos, usando ficheros.
tags: [PHP]
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
        <title>Ejercicio 1</title>

        <style>

        </style>
    </head>

    <body>
        <?php
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
        ini_set('log_errors', 1);
        ini_set('error_log', __DIR__ . '/app.log');

        $comentarios = [
            "Me ha encantado la web",
            "Faltan más imágenes",
            "Buena organización del contenido",
            "Muy útil la información publicada",
            "El diseño es muy claro y sencillo",
            "Sería bueno añadir un buscador",
            "Los colores son agradables",
            "Faltan ejemplos prácticos",
            "La velocidad de carga es buena",
            "La sección de contacto funciona muy bien"
        ];

        $fichero = __DIR__ . '/comentarios.txt';
        $comentarioAleatorio = $comentarios[array_rand($comentarios)];
        $fechaHora = date('[Y-m-d H:i:s]');
        $linea = "$fechaHora $comentarioAleatorio" . PHP_EOL;

        $ultimoComentario = '';

        try {
            $fp = @fopen($fichero, 'a');
            if (!$fp) {
                throw new Exception("No se pudo abrir el fichero $fichero para escritura.");
            }

            if (fwrite($fp, $linea) === false) {
                throw new Exception("Error al escribir en el fichero $fichero.");
            }

            fclose($fp);
            $ultimoComentario = $linea;
        } catch (Exception $e) {
            echo "<p style='color:red;'>❌ Error: " . htmlspecialchars($e->getMessage()) . "</p>";
            error_log($e->getMessage());
        }

        $comentariosGuardados = [];

        if (file_exists($fichero)) {
            $contenido = file($fichero, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
            if ($contenido && count($contenido) > 0) {
                $comentariosGuardados = $contenido;
            }
        }

        echo "<h2>Lista de comentarios</h2>";

        if (empty($comentariosGuardados)) {
            echo "<p>No hay comentarios todavía.</p>";
        } else {
            echo "<ul>";
            foreach ($comentariosGuardados as $c) {
                echo "<li>" . htmlspecialchars($c) . "</li>";
            }
            echo "</ul>";

            $total = count($comentariosGuardados);
            echo "<p><strong>Total de comentarios:</strong> $total</p>";

            if ($ultimoComentario) {
                echo "<p style='background-color: #e0ffe0; padding: 10px; border-radius: 8px;'>
                <strong>Último comentario añadido:</strong><br>" . htmlspecialchars(trim($ultimoComentario)) . "</p>";
            }
        }
        ?>
    </body>

</html>