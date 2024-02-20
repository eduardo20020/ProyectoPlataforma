<?php
$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$carrera = $_POST["carrera"];
$password = $_POST["password"];
$telefono = $_POST["telefono"];
$correo = $_POST["correo"];
$direccion = $_POST["direccion"];


require "conexion.php";

foreach ($_POST as $i){
    if (empty($i)){
        echo"rellena todos los campos";
    }
}

    // Nombre del procedimiento almacenado
    $procedure_name = "insertarPasante";

    // Prepara la llamada al procedimiento almacenado
    $stmt = $conn->prepare("EXEC $procedure_name :nombre, :apellidos, :carrera, :password, :telefono, :correo, :direccion");
    

    // Ejecuta el procedimiento almacenado
    $stmt->execute(array(':nombre'=>$nombre, ':apellidos'=>$apellidos, ':carrera'=>$carrera, ':password'=>$password, ':telefono'=>$telefono, ':correo'=>$correo, ':direccion'=>$direccion));
    
    echo "Procedimiento almacenado ejecutado correctamente.";
    header("Location: ../public/login.php");
    exit;
?>