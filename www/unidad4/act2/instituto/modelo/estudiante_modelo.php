<?php
// modelo/curso_modelo.php

/** Estudiante: modelo para gestionar la tabla cursos

* No representa un curso individual, sino la tabla completa
* Inserta, lista, busca y vacia estudiantes
* Usa PDO para la conexión a la base de datos
*/

class Estudiante {

    private PDO $pdo; // Conexión con la base de datos.

    public function __construct(PDO $pdo) { // Inicializa la clase con una conexión a la base de datos.
        $this->pdo = $pdo;
    }

    public function agregar (string $nombre, int $edad, ?int $cursoId): int {  // Inserta un nuevo estudiante y devuelve su ID.
        
        $stmt = $this->pdo->prepare
            ("INSERT INTO estudiantes (nombre, edad, curso_id) VALUES (:nombre, :edad, :curso_id)");
        
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':edad', $edad);
        $stmt->bindParam(':curso_id', $cursoId);
        
        $stmt->execute();
        
        return (int)$this->pdo->lastInsertId();
    }

    public function actualizarPorNombre(string $nombreActual, string $nuevoNombre, int $nuevaEdad, int $nuevoCursoId): void { // Actualiza los datos de un estudiante buscándolo por nombre.
        
        $stmt = $this->pdo->prepare
        ("  UPDATE estudiantes 
            SET nombre = :nuevoNombre, edad = :nuevaEdad, curso_id = :nuevoCursoId 
            WHERE nombre = :nombreActual");
        
        $stmt->bindParam(':nuevoNombre', $nuevoNombre);
        $stmt->bindParam(':nuevaEdad', $nuevaEdad);
        $stmt->bindParam(':nuevoCursoId', $nuevoCursoId);
        $stmt->bindParam(':nombreActual', $nombreActual);

        $stmt->execute();
    }

    public function eliminarPorNombre(string $nombre): void { // Elimina un estudiante por su nombre.

        $stmt = $this->pdo->prepare
        ("  DELETE FROM estudiantes 
            WHERE nombre = :nombre");

        $stmt->bindParam(':nombre', $nombre);

        $stmt->execute();
    }

    public function conCurso(): array { // Devuelve los estudiantes junto al nombre del curso mediante un LEFT JOIN.
        
        $stmt = $this->pdo->query
        ("  SELECT e.nombre, e.edad, c.nombre 
            AS curso 
            FROM estudiantes e 
            LEFT JOIN cursos c 
            ON e.curso_id = c.id");

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function vaciarTodo(): void { // Borra todos los registros y reinicia el autoincremento.
        
        $this->pdo->exec("DELETE FROM estudiantes");
        $this->pdo->exec("ALTER TABLE estudiantes AUTO_INCREMENT = 1");
    }

}