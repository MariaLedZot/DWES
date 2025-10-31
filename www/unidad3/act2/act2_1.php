<?php
/*
---
title: Ejercicio 1: Formulario Web y Cookies.
desc: Modifica el color de fondo de una página web usando un formulario y cookies.
tags: [PHP]
code: https://github.com/
---
*/

// Duración de la cookie: 24 horas
$duracion = time() + 24 * 60 * 60;
$color = 'white';

// Si el usuario ha enviado el formulario, guardamos el color en una cookie
if (isset($_POST['color'])) {
    $color = $_POST['color'];
    setcookie('color_fondo', $color, $duracion);
} elseif (isset($_COOKIE['color_fondo'])) {
    $color = $_COOKIE['color_fondo'];
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Ejercicio 1</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">
    <style>
        body {
            background-color:
                <?= htmlspecialchars($color) ?>
            ;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background-color 0.3s ease;
        }

        main {
            background: rgba(255, 255, 255, 0.8);
            border-radius: 1rem;
            padding: 2rem;
            max-width: 400px;
            width: 90%;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
        }

        select {
            width: 100%;
        }
    </style>
</head>

<body>

    <main>
        <h2>Selecciona un color de fondo</h2>

        <form method="post" action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>">
            <label for="color">Elige un color:</label>
            <select name="color" id="color" onchange="this.form.submit()">
                <option value="white" <?= $color == 'white' ? 'selected' : '' ?>>Blanco</option>
                <option value="lightblue" <?= $color == 'lightblue' ? 'selected' : '' ?>>Celeste</option>
                <option value="lightgreen" <?= $color == 'lightgreen' ? 'selected' : '' ?>>Verde claro</option>
                <option value="lightyellow" <?= $color == 'lightyellow' ? 'selected' : '' ?>>Amarillo claro</option>
                <option value="lightpink" <?= $color == 'lightpink' ? 'selected' : '' ?>>Rosa claro</option>
                <option value="lightgray" <?= $color == 'lightgray' ? 'selected' : '' ?>>Gris claro</option>
            </select>
            <noscript>
                <p><input type="submit" value="Aplicar color"></p>
            </noscript>
        </form>
    </main>

</body>

</html>