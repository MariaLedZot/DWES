<?php
    try{
        $conn = new PDO("mysql:host=db;dbname=maria_database;charset=utf8", "root", "root");
        $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "select * from tienda";

        $sentencia = $conn -> prepare($sql);
        $sentencia -> setFetchMode(PDO::FETCH_NUM);
        $sentencia -> execute();

        while($fila = $sentencia -> fetch()){
            // Se muestra el array asociativo
            print_r($fila);
            echo "<br>";
            // Se muestran los datos.
            echo "Codigo: " . $fila["cod"] . "<br>";
            echo "Nombre: " . $fila["nombre"] . "<br>";
            echo "Teléfono: " . $fila["tlf"] . "<br>";
            echo "<br>";
        }

    }catch(PDOException $e) {
        echo $e -> getMessage();
    }
?>