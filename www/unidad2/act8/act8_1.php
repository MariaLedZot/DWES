<?php
/*
---
title: Ejercicio 1: Control de errores.
desc: Muestra información del sistema y gestiona errores de forma controlada.
tags: [PHP, errores, excepciones, menejo]
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
        $temperatura = rand(-10, 100);
        $cpuCargada = rand(0, 150);
        $token = (rand(0, 1) === 1) ? "OK" : "";

        echo "🌡️ Temperatura: $temperatura °C<br>";
        echo "🖥️ Carga de CPU: $cpuCargada %<br>";
        echo "🔐 Token de acceso: " . ($token ?: "VACÍO") . "<br><br>";

        if (empty($token)) {
            die("❌ ERROR CRÍTICO: No hay token de acceso. El sistema no puede arrancar.<br>");
        }

        if ($temperatura < 0 || $temperatura > 80) {
            trigger_error("⚠️ ADVERTENCIA: Temperatura fuera de rango ($temperatura °C). Riesgo en el arranque.", E_USER_WARNING);
        }

        try {
            if ($cpuCargada > 100) {
                throw new Exception("❌ ERROR: Carga de CPU excesiva ($cpuCargada%). El sistema no puede continuar.");
            }
            echo "✅ Servidor iniciado correctamente.<br>";

        } catch (Exception $e) {
            echo $e->getMessage() . "<br>";
        } finally {
            echo "🔁 Fin del proceso de arranque.<br>";
        }
        ?>
    </body>

</html>