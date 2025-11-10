<?php
// modelo/curso_modelo.php

/** Curso: modelo para gestionar la tabla cursos

* No representa un curso individual, sino la tabla completa
* Inserta, lista, busca y vacia cursos
* Usa PDO para la conexión a la base de datos
*/

class CursoModelo {

    private $pdo; // Conexión con la base de datos.

    public function __construct(PDO $pdo) { //	Guarda la conexión para usarla en las consultas.
        $this->pdo = $pdo;
    }

    public function agregar(string $nombre): int { // Inserta un curso y devuelve su ID.
        
    }
}
