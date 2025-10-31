<?php
session_start();

if (!isset($_SESSION["usuario"])) {
    header("Location: login.php");
    exit;
}

$usuario = $_SESSION["usuario"];
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
    <h1>Bienvenido al área privada</h1>
    <p>Hola, <strong><?php echo htmlspecialchars($usuario); ?></strong>. Has accedido correctamente.</p>
    <form action="cerrar-sesion.php" method="post">
        <button type="submit">Cerrar sesión</button>
    </form>
</main>
</body>
</html>
