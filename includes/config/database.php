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
    function selectPrueba(){

        $conn = conectarBD();

        try {

            // Preparar la consulta SQL
            $sql = "SELECT * FROM articulos"; // Reemplaza 'nombre_de_la_tabla' por el nombre real de tu tabla
    
            // Ejecutar la consulta utilizando PDO
            $stmt = $conn->query($sql);
    
            // Comprobar si se encontraron filas
            // Comprobar si se encontraron filas
            if ($stmt->rowCount() > 0) {
                $results = ""; // Variable para almacenar resultados

                // Iterar sobre los resultados
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    // Construir el texto de los resultados
                    $results .= "{$row['columna1']} - {$row['columna2']} - {$row['columna3']}\n"; // Reemplaza 'columna1', 'columna2', etc., por los nombres reales de las columnas en tu tabla
                }

                return $results; // Devolver los resultados como texto
            } else {
                return "No se encontraron resultados.";
            }
        } catch (PDOException $e) {
            echo "Error al ejecutar la consulta: " . $e->getMessage();
        }
    }
    
