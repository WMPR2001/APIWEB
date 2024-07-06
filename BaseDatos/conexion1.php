<?php
class Cconexion {
    function Cconexionbd() {
        $host = "localhost";
        $dbname = "dbprueba";
        $username = "sa";
        $password = "123456789";
        $puerto = 1433; 

        try {
            $conn = new PDO("sqlsrv:server=$host,$puerto;Database=$dbname", $username, $password);
           // echo "Conexión con éxito";


            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Consulta SQL
    $sql = "SELECT * FROM Productos";

    // Ejecutar la consulta
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    

    
        } catch (PDOException $exp) {
            echo "Conexión no exitosa a $dbname, error en: " . $exp->getMessage();
        }

        return isset($conn) ? $conn : null;
    }
}
?>
