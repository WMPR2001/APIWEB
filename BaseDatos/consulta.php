<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "usuario";
$password = "contraseña";
$dbname = "nombreBaseDeDatos";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Consulta SQL
    $sql = "SELECT * FROM tabla";

    // Ejecutar la consulta
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    // Mostrar los datos
    echo "<table>";
    echo "<tr><th>Columna 1</th><th>Columna 2</th></tr>";
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        echo "<td>" . $row['columna1'] . "</td>";
        echo "<td>" . $row['columna2'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";

    // Cerrar la conexión
    $conn = null;
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>