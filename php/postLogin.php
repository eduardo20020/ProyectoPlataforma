<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST["email"];
    $password = $_POST["password"];

    if(empty($email) || empty($password)) {
        echo "<script>alert('Por favor, completa todos los campos.');</script>";
        echo "<script>window.location.replace('../index.php');</script>";
        exit(); 
    } else {
        require "conexion.php";
        
        $sql = "SELECT correo, usuario, rol FROM USUARIOS WHERE correo = :email AND password = :password";
        
        $stmt = $conn->prepare($sql);
        
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        
        $stmt->execute();
        
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if ($user) {
            session_start();
            $_SESSION["nombre"] = $user['usuario'];
            $_SESSION["rol"] = $user['rol'];

            
            switch ($user['rol']) {
                case "pasante":
                    header("Location: ../public/HomePasante.php");
                    break;
                case "empresa":
                    header("Location: ../public/HomeEmpresa.php");
                    break;
                case "admin":
                    header("Location: ../public/HomeAdmin.php");
                    break;
                default:
                    header("Location: ../index.php");
                    break;
            }
            exit(); 
        } else {
            echo "<script>alert('Correo electrónico o contraseña incorrectos.');</script>";
            echo "<script>window.location.replace('../index.php');</script>";
            exit(); 
        }
    }
}
?>
