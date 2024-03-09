<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Recuperar los valores del formulario
    $email = $_POST["email"];
    $password = $_POST["password"];

    require "conexion.php";
    
    // Consulta SQL para verificar el correo electrónico y la contraseña
    $sql = "SELECT correo, usuario, rol FROM USUARIOS WHERE correo = :email AND password = :password";
    
    // Preparar la consulta
    $stmt = $conn->prepare($sql);
    
    // Vincular parámetros
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);
    
    // Ejecutar la consulta
    $stmt->execute();
    
    // Obtener el resultado
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if ($user) {
        // Usuario autenticado, puedes hacer algo con la información del usuario
        if($user['rol']=="pasante"){
            header("Location: ../public/HomePasante.php");
        }
        if($user['rol']=="empresa"){
            header("Location: ../public/HomeEmpresa.php");
        }
        if($user['rol']=="admin"){
            header("Location: ../public/HomeAdmin.php");
        }
    } else {
        // Usuario no encontrado o contraseña incorrecta
        header("Location: ../index.php");
    }
}
?>
