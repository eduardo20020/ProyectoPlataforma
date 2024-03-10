<?php
// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $usuario = $_POST['usuario'];
    $correo = $_POST['correo'];
    $password = $_POST['password'];
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $telefono = $_POST['telefono'];
    $carrera = $_POST['carrera'];
    
    // Aquí puedes realizar cualquier validación de los datos recibidos
    
    // Procesamiento adicional, como guardar en la base de datos
    
    require "conexion.php";
    $pp = "registrarPasante";
    // Prepara la llamada al procedimiento almacenado
    $stmt = $conn->prepare("EXEC $pp @usuario = :usuario, @correo = :correo, @password = :password, @nombre = :nombres, @apellidos = :apellidos, @telefono = :telefono, @carrera = :carrera");

    // Bind de parámetros
    $stmt->bindParam(':usuario', $usuario);
    $stmt->bindParam(':correo', $correo);
    $stmt->bindParam(':password', $password);
    $stmt->bindParam(':nombres', $nombres);
    $stmt->bindParam(':apellidos', $apellidos);
    $stmt->bindParam(':telefono', $telefono);
    $stmt->bindParam(':carrera', $carrera);

    // Ejecuta el procedimiento almacenado
    if($stmt->execute()){
        //AQUI DEBERIA IR UNA ALERTA DE QUE FUE CORRECTO
        echo "<script>alert('todo correcto');</script>";
        echo "<script>window.location.replace('../index.php');</script>";    
    }else{
        //AQUI DEBERIA IR UNA ALERTA 
        echo "<script>alert('algo salio mal');</script>";
        echo "<script>window.location.replace('../public/registros.php');</script>";
        exit();     
    }
   
    exit;
}
?>
