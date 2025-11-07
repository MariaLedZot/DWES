<?php
/**
 * Explorador PHP con previsualización lateral
 */

$baseDir = __DIR__;
$dirParam = isset($_GET['dir']) ? $_GET['dir'] : '';
$path = realpath($baseDir . '/' . $dirParam);

// Evita salir del directorio base
if ($path === false || strpos($path, $baseDir) !== 0) {
    $path = $baseDir;
    $dirParam = '';
}

$items = scandir($path);
$relativePath = str_replace($baseDir, '', $path);
$selected = isset($_GET['file']) ? $_GET['file'] : null;
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Explorador PHP</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background: #f8f9fa;
        color: #333;
        margin: 0;
        display: flex;
        height: 100vh;
    }
    .sidebar {
        width: 300px;
        background: #fff;
        border-right: 1px solid #ccc;
        overflow-y: auto;
        padding: 20px;
    }
    .preview {
        flex: 1;
        padding: 0;
        overflow: hidden;
    }
    h1 {
        color: #007bff;
        font-size: 18px;
        margin-top: 0;
    }
    ul {
        list-style: none;
        padding-left: 0;
    }
    li { margin: 6px 0; }
    a {
        color: #007bff;
        text-decoration: none;
    }
    a:hover {
        text-decoration: underline;
    }
    .dir { font-weight: bold; }
    .back { display: inline-block; margin-bottom: 10px; }
    iframe {
        width: 100%;
        height: 100%;
        border: none;
    }
    .open-new {
        display: inline-block;
        margin: 10px;
        padding: 6px 10px;
        background: #007bff;
        color: white;
        border-radius: 4px;
        text-decoration: none;
        font-size: 14px;
    }
    .open-new:hover {
        background: #0056b3;
    }
</style>
</head>
<body>

<div class="sidebar">
    <h1>Proyectos PHP</h1>

    <?php
    // Botón para subir un nivel
    if ($path !== $baseDir) {
        $parent = dirname($dirParam);
        echo "<a class='back' href='?dir=" . urlencode($parent) . "'>⬅ Volver</a><br><br>";
    }

    echo "<ul>";
    foreach ($items as $item) {
        if ($item === '.' || $item === '..') continue;
        $itemPath = $path . '/' . $item;
        $itemRel = ltrim($dirParam . '/' . $item, '/');

        if (is_dir($itemPath)) {
            echo "<li class='dir'>📁 <a href='?dir=" . urlencode($itemRel) . "'>$item/</a></li>";
        } elseif (pathinfo($item, PATHINFO_EXTENSION) === 'php') {
            $link = "?dir=" . urlencode($dirParam) . "&file=" . urlencode($item);
            echo "<li>📄 <a href='$link'>$item</a></li>";
        }
    }
    echo "</ul>";
    ?>
</div>

<div class="preview">
    <?php if ($selected): ?>
        <?php
            $filePath = realpath($path . '/' . $selected);
            if ($filePath && strpos($filePath, $baseDir) === 0) {
                $fileUrl = htmlspecialchars($dirParam . '/' . $selected);
                echo "<a class='open-new' target='_blank' href='$fileUrl'>🧭 Abrir en nueva pestaña</a>";
                echo "<iframe src='$fileUrl'></iframe>";
            } else {
                echo "<p style='padding:20px;'>Archivo no encontrado o acceso no permitido.</p>";
            }
        ?>
    <?php else: ?>
        <div style="display:flex;justify-content:center;align-items:center;height:100%;color:#666;">
            <p>Selecciona un archivo .php para previsualizarlo ➡</p>
        </div>
    <?php endif; ?>
</div>

</body>
</html>