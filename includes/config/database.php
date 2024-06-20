<?php
    function conectarBD(){
        $host = "localhost";
        $dbname = "PedroPruebas";
        $username = "pruebas";
        $password = "1234";

        try {
            $conn = new PDO("pgsql:host=$host;dbname=$dbname", $username, $password);
            echo "Se conectó correctamente a la BD";
        } catch (PDOException $exp) {
            echo "No se pudo conectar a la BD: " . $exp->getMessage();
        }

        return $conn;
    }
    function obtenerCampoNumcdnumn(){
        $conn = conectarBD(); // Obtener la conexión a la BD
    
        try {
            // Preparar la consulta SQL
            $stmt = $conn->prepare("SELECT * FROM numerador WHERE numcdnumn = 3");
    
            // Ejecutar la consulta
            $stmt->execute();
    
            // Obtener el resultado como arreglo asociativo
            $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
    
            // Guardar el campo deseado (por ejemplo, numcdnumn)
            $campoGuardado = $resultado['numfolcon'];
    
            return $campoGuardado; // Retornar el valor del campo guardado
        } catch (PDOException $e) {
            echo "Error al ejecutar la consulta: " . $e->getMessage();
            return null;
        }
    }
    
