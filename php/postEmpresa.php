<?php
$empresa = $_POST["nombreempresa"];
$sector = $_POST["sector"];
$correo = $_POST["correo"];
$password = $_POST["password"];
$ubicacion = $_POST["ubicacion"];
$telefono = $_POST["telefono"];

require "conexion.php";

foreach ($_POST as $i){
    if (empty($i)){
        echo"rellena todos los campos";
    }
}
    // Nombre del procedimiento almacenado
    $procedure_name = "insertarEmpresa";

    // Prepara la llamada al procedimiento almacenado
    $stmt = $conn->prepare("EXEC $procedure_name :nombre, :sector, :correo, :password, :ubicacion, :telefono");
    

    // Ejecuta el procedimiento almacenado
    $stmt->execute(array(':nombre'=>$empresa, ':sector'=>$sector, ':correo'=>$correo, ':password'=>$password, ':ubicacion'=>$ubicacion, ':telefono'=>$telefono));
    
    echo "Procedimiento almacenado ejecutado correctamente.";
    header("Location: ../public/login.php");
    exit;

?>