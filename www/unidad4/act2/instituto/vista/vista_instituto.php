<?php
// vista/vista_instituto.php

echo "<h1>Instituto (MVC - POO - PDO)</h1>";

// 📚 Cursos
echo "<h2>📚 Cursos</h2>";

foreach ($data['cursos'] as $i => $curso) {
    echo ($i + 1) . ". " . $curso['nombre'] . "\n";
}
echo "\n";

// 👩‍🎓 Lista Inicial
echo "<h2>👩‍🎓 Lista Inicial</h2>";

foreach ($data['listaInicial'] as $i => $listIni) {
    echo ($i + 1) . ". " . 
    $nombre['nombre'] . " (" . 
    $edad['edad'] . " años) - 
    Curso: " . $curso['curso'] . "\n";
}
echo "\n";

// ✏️ Lista Modificada
echo "<h2>✏️ Lista Modificada</h2>";

foreach ($data['listaModificada'] as $i => $listMod) {
    echo ($i + 1) . ". " . 
    $nombre['nombre'] . " (" . 
    $edad['edad'] . " años) - 
    Curso: " . $curso['curso'] . "\n";
}
echo "\n";

// 🗑️ Lista Final
echo "<h2>🗑️ Lista Final</h2>";

foreach ($data['listaFinal'] as $i => $listFin) {
    echo ($i + 1) . ". " . 
    $nombre['nombre'] . " (" . 
    $edad['edad'] . " años) - 
    Curso: " . $curso['curso'] . "\n";
}