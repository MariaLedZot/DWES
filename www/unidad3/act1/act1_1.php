<?php
/*
---
title: Ejercicio 1: Formulario Web.
desc: Muestra y controla datos de un formulario web.
tags: [PHP]
code: https://github.com/
---
*/
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">
  <title>Ejercicio 1</title>
</head>

<body>
  <div style="padding: 100px; margin: 50px; margin-left: 100px; margin-right: 100px;">
    <form method="post" action="resumen.php">
      <h1>Formulario Web</h1>

      <label>Nombre y apellidos:
        <input type="text" name="nombre" id="nombre" placeholder="Ej: María Ledesma Zotano">
      </label>

      <label>Email:
        <input type="text" name="email" id="email" placeholder="Ej: ejemplo@correo.com">
      </label>

      <label>URL página personal:
        <input type="url" name="URL" id="URL" placeholder="Ej: https://ejemplo.com">
      </label>

      <fieldset>
        <legend>Sexo</legend>
        <label><input type="radio" name="genero" value="femenino">Mujer</label>
        <label><input type="radio" name="genero" value="masculino">Hombre</label>
        <label><input type="radio" name="genero" value="no binario">Otro</label>
      </fieldset>

      <label>Número de convivientes:
        <input type="number" name="convivientes" id="convivientes" min="0" max="5" placeholder="0–5">
      </label>

      <fieldset>
        <legend>Aficiones</legend>
        <label><input type="checkbox" name="aficiones[]" value="Fotografía">Lectura</label>
        <label><input type="checkbox" name="aficiones[]" value="Cocina">Deporte</label>
        <label><input type="checkbox" name="aficiones[]" value="Senderismo">Cine</label>
        <label><input type="checkbox" name="aficiones[]" value="Música en vivo">Viajar</label>
      </fieldset>

      <fieldset>
        <legend>Menú favorito</legend>
        <select name="menu">
          <option value="">-- Selecciona una opción --</option>
          <option value="Ensalada">Ensalada</option>
          <option value="Sushi">Sushi</option>
          <option value="Pasta">Pasta</option>
          <option value="Pizza">Pizza</option>
        </select>
      </fieldset>

      <button type="submit">Enviar</button>
    </form>
  </div>
</body>

</html>