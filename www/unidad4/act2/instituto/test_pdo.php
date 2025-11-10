<?php
// Archivo para probar la conexión a la base de datos usando PDO

require 'config.php';

try {
    $pdo = new PDO(DB_DSN, DB_USER, DB_PASS);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "✅ ¡Conexión exitosa a la base de datos!";
} catch (PDOException $e) {
    die("❌ Error de conexión: " . $e->getMessage());
}
