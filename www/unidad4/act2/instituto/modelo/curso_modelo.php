<?php
// modelo/curso_modelo.php

/** Curso: modelo para gestionar la tabla cursos

* No representa un curso individual, sino la tabla completa
* Inserta, lista, busca y vacia cursos
* Usa PDO para la conexión a la base de datos
*/

class Curso {

    private PDO $pdo; // Conexión con la base de datos.

    public function __construct(PDO $pdo) { //	Guarda la conexión para usarla en las consultas.
        $this->pdo = $pdo;
    }

    public function agregar(string $nombre): int { // Inserta un curso y devuelve su ID.
        
        $stmt = $this->pdo->prepare
        ("  INSERT INTO cursos (nombre) 
            VALUES (:nombre)");

        $stmt->bindParam(':nombre', $nombre);

        $stmt->execute();

        return (int)$this->pdo->lastInsertId();
    }

    public function idPorNombre(string $nombre): ?int { // Devuelve el ID de un curso si existe.
        
        $stmt = $this->pdo->prepare
        ("  SELECT id 
            FROM cursos 
            WHERE nombre = :nombre");

        $stmt->bindParam(':nombre', $nombre);

        $stmt->execute();

        $id = $stmt->fetchColumn();
        return $id ? (int)$id : null;
    }

    public function todos(): array { // Devuelve todos los cursos.
        
        return $this->pdo->query
            ("SELECT * FROM cursos")->fetchAll(PDO::FETCH_ASSOC);
    }

    public function vaciarTodo(): void { // Borra todos los cursos y reinicia el autoincremento.
        
        $this->pdo->exec
            ("DELETE FROM cursos");
        $this->pdo->exec
            ("ALTER TABLE cursos AUTO_INCREMENT = 1");
    }
}
