<?php
/*
---
title: Ejercicio 2: Formulario Web y Cookies.
desc: Implementa un banner de cookies que permita aceptar o borrar cookies usando un formulario.
tags: [PHP]
code: https://github.com/
---
*/

$duracion = time() + 365 * 24 * 60 * 60;

if (isset($_POST['aceptar'])) {
    setcookie('cookies_aceptadas', '1', $duracion);
    $cookies_aceptadas = true;
} elseif (isset($_POST['borrar'])) {
    setcookie('cookies_aceptadas', '', time() - 3600);
    $cookies_aceptadas = false;
} elseif (isset($_COOKIE['cookies_aceptadas'])) {
    $cookies_aceptadas = true;
} else {
    $cookies_aceptadas = false;
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Ejercicio 2</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            min-height: 100vh;
            padding: 2rem;
            background-color: var(--pico-background-color);
        }

        main {
            width: 100%;
            max-width: 600px;
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }

        article {
            margin: 0;
        }

        .cookies-card {
            background: var(--pico-background-color);
            border-radius: var(--pico-border-radius);
            box-shadow: 0 0.3rem 1rem rgba(0, 0, 0, 0.2);
        }

        .cookies-card h3 {
            margin-bottom: 0.5rem;
        }

        footer {
            margin-top: 2rem;
            text-align: center;
            font-size: 0.9rem;
            opacity: 0.8;
        }
    </style>
</head>

<body>

    <main>
        <article class="cookies-card">
            <h2>Bienvenido</h2>
            <p>Contenido de tu página principal...</p>
        </article>

        <?php if (!$cookies_aceptadas): ?>
            <article class="cookies-card">
                <h3>Política de Cookies</h3>
                <p>
                    Usamos cookies para mejorar tu experiencia. Al continuar aceptas nuestra <a href="#">Política de Cookies</a>.
                </p>
                <form method="post" action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>">
                    <button type="submit" name="aceptar">Aceptar cookies</button>
                </form>
            </article>
        <?php else: ?>
            <article class="cookies-card">
                <h3>Cookies aceptadas</h3>
                <p>✅ Cookies aceptadas correctamente.</p>
                <form method="post" action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>">
                    <button type="submit" name="borrar" class="secondary">Borrar cookies</button>
                </form>
            </article>
        <?php endif; ?>
    </main>

</body>

</html>