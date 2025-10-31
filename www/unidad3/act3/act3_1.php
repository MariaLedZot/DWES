<?php
/*
---
title: Ejercicio 1: Uso de sesiones para votaciones.
desc: Implementa un sistema de votación simple utilizando sesiones para almacenar los votos. Muestra los resultados con barras de progreso.
tags: [PHP]
code: https://github.com/
---
*/

session_start();

if (!isset($_SESSION['votosA'])) $_SESSION['votosA'] = 0;
if (!isset($_SESSION['votosB'])) $_SESSION['votosB'] = 0;

$maxVotos = 20;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 1</title>
    <link rel="stylesheet" href="https://unpkg.com/@picocss/pico@latest/css/pico.min.css">
    <style>
        main {
            max-width: 500px;
            margin: 2rem auto;
            text-align: center;
        }
        meter {
            width: 100%;
            height: 2rem;
        }
        form {
            display: flex;
            justify-content: center;
            gap: 1rem;
            margin-top: 1.5rem;
        }
    </style>
</head>
<body>
<main>
    <h1>🗳 Votación</h1>

    <section>
        <h3>Opción A: <?= $_SESSION['votosA'] ?> votos</h3>
        <meter min="0" max="<?= $maxVotos ?>" value="<?= $_SESSION['votosA'] ?>"></meter>

        <h3>Opción B: <?= $_SESSION['votosB'] ?> votos</h3>
        <meter min="0" max="<?= $maxVotos ?>" value="<?= $_SESSION['votosB'] ?>"></meter>
    </section>

    <form action="votar.php" method="post">
        <button type="submit" name="opcion" value="A">Votar A</button>
        <button type="submit" name="opcion" value="B">Votar B</button>
        <button type="submit" name="opcion" value="reset">Poner a cero</button>
    </form>
</main>
</body>
</html>