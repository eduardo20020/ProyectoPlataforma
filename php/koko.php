<?php
// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:dos.database.windows.net,1433; Database = dos", "brandon", "12345678X$");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "conexion existosA";
        // Preparar la consulta SQL
        $sql = "INSERT INTO prueba (nombre, apellido) VALUES (:nombre, :edad)";
        $stmt = $conn->prepare($sql);
        
        $nombre =44;
        $apellido = 44;
        // Asignar valores a los marcadores de posición
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':edad', $apellido);
        
        // Ejecutar la consulta
        $stmt->execute();
        
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}
?>