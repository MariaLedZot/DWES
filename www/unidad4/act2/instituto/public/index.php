<?php
// public/index.php

require __DIR__ . '/../config.php'; // 1) require config.php
require __DIR__ . '/../modelo/curso_modelo.php'; // 2) require modelo/curso_modelo.php
require __DIR__ . '/../modelo/estudiante_modelo.php'; // 3) require modelo/estudiante_modelo.php
require __DIR__ . '/../controlador/instituto_controlador.php'; // 4) require controlador/instituto_controlador.php

// 5) crear PDO ($pdo) -- por hacer

$modeloCurso = new Curso($pdo); // 6) instanciar modelos: 6.1) $modelocurso=new CursoModelo($pdo)
$modeloEstudiante = new Estudiante($pdo); // 6) instanciar modelos: 6.2) $modeloestudiante=new EstudianteModelo($pdo);

$controlador = new InstitutoControlador($modeloCurso, $modeloEstudiante); // 7) instanciar controlador: 7.1) $controlador = new InstitutoControlador($modelocurso, $modeloestudiante)

$data = $controlador->ejecutar(); // 8) $data = $controlador->ejecutar()

require __DIR__ . '/../vista/vista_instituto.php'; // 9) require vista/vista_instituto.php: la vista recibe $data y SOLO pinta