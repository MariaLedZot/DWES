<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resumen</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">
</head>
<body>
  <main class="container">
    <h1>Resumen del Formulario</h1>

    <?php
    function limpiar($dato) {
      return htmlspecialchars(trim($dato));
    }

    if (!empty($_POST)) {
      $errores = [];

      $nombre = limpiar($_POST['nombre'] ?? '');
      $email = limpiar($_POST['email'] ?? '');
      $url = limpiar($_POST['URL'] ?? '');
      $genero = limpiar($_POST['genero'] ?? '');
      $convivientes = limpiar($_POST['convivientes'] ?? '');
      $aficiones = $_POST['aficiones'] ?? [];
      $menu = limpiar($_POST['menu'] ?? '');

      // Validaciones
      if (empty($nombre) || strlen($nombre) > 60) {
        $errores[] = "❌ El nombre completo es obligatorio y debe tener menos de 60 caracteres.";
      }

      if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errores[] = "❌ El correo electrónico es obligatorio y debe tener un formato válido.";
      }

      if (empty($url) || !filter_var($url, FILTER_VALIDATE_URL)) {
        $errores[] = "❌ La URL es obligatoria y debe tener un formato válido (ej: https://ejemplo.com).";
      }

      if (empty($genero)) {
        $errores[] = "❌ Debes seleccionar tu género.";
      }

      if ($convivientes === '' || !is_numeric($convivientes) || $convivientes < 0 || $convivientes > 5) {
        $errores[] = "❌ El número de convivientes debe estar entre 0 y 5.";
      }

      if (empty($aficiones)) {
        $errores[] = "❌ Debes seleccionar al menos una afición.";
      }

      if (empty($menu)) {
        $errores[] = "❌ Debes seleccionar un plato favorito.";
      }

      // Mostrar errores o tabla resumen
      if (!empty($errores)) {
        echo "<article><h3>Se han encontrado los siguientes errores:</h3><ul>";
        foreach ($errores as $error) {
          echo "<li>$error</li>";
        }
        echo "</ul><a href='index.php' role='button' class='secondary'>Volver al formulario</a></article>";
      } else {
        echo "<table class='striped'>";
        echo "<tr><th>Nombre completo</th><td>$nombre</td></tr>";
        echo "<tr><th>Correo electrónico</th><td>$email</td></tr>";
        echo "<tr><th>URL personal</th><td>$url</td></tr>";
        echo "<tr><th>Género</th><td>$genero</td></tr>";
        echo "<tr><th>Número de convivientes</th><td>$convivientes</td></tr>";
        echo "<tr><th>Aficiones</th><td>" . implode(', ', array_map('htmlspecialchars', $aficiones)) . "</td></tr>";
        echo "<tr><th>Plato favorito</th><td>$menu</td></tr>";
        echo "</table>";
        echo "<a href='index.php' role='button'>Volver</a>";
      }
    } else {
      echo "<p>No se recibieron datos del formulario.</p>";
      echo "<a href='index.php' role='button' class='secondary'>Volver al formulario</a>";
    }
    ?>
  </main>
</body>
</html>
