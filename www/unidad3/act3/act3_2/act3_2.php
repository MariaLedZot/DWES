<?php
/*
---
title: Ejercicio 2: Login sencillo con sesiones.
desc: Crea un sistema de login básico utilizando sesiones para gestionar el acceso de usuarios. Muestra mensajes de error para credenciales incorrectas.
tags: [PHP, login, sesiones, autenticación]
code: https://github.com/
---
*/

session_start();

$usuario_valido = "correo@falso.com";
$password_valido = "123";

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);

    if (empty($email) || empty($password)) {
        $error = "Por favor, rellena todos los campos.";
    } elseif ($email === $usuario_valido && $password === $password_valido) {
        $_SESSION["usuario"] = $email;
        header("Location: privado.php");
        exit;
    } else {
        $error = "Email o contraseña incorrectos.";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 2</title>
    <link rel="stylesheet" href="https://unpkg.com/@picocss/pico@latest/css/pico.min.css">
</head>
<body>
<main class="container">
    <h1>Iniciar sesión</h1>
    <?php if ($error): ?>
        <div class="error"><?php echo htmlspecialchars($error); ?></div>
    <?php endif; ?>
    <form method="post" action="">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>

        <label for="password">Contraseña:</label>
        <input type="password" name="password" id="password" required>

        <button type="submit">Entrar</button>
    </form>
</main>
</body>
</html>
