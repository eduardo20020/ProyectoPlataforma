<?php
// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $usuario = $_POST['usuario'];
    $correo = $_POST['correo'];
    $password = $_POST['password'];
    $nombre = $_POST['nombres']; // Cambiado a 'nombres' para que coincida con el name del campo
    $telefono = $_POST['telefono'];
    $sector = $_POST['sector']; // Cambiado a 'sector' para que coincida con el name del campo
    $direccion = $_POST['direccion'];
    
    // Aquí puedes realizar cualquier validación de los datos recibidos
    
    // Procesamiento adicional, como guardar en la base de datos
    
    require "conexion.php"; // Ajusta el nombre de tu archivo de conexión
    $pp = "registrarEmpresa"; // Nombre del procedimiento almacenado
    // Prepara la llamada al procedimiento almacenado
    $stmt = $conn->prepare("EXEC $pp @usuario = :usuario, @correo = :correo, @password = :password, @nombre = :nombre, @telefono = :telefono, @sector = :sector, @direccion = :direccion");

    // Bind de parámetros
    $stmt->bindParam(':usuario', $usuario);
    $stmt->bindParam(':correo', $correo);
    $stmt->bindParam(':password', $password);
    $stmt->bindParam(':nombre', $nombre);
    $stmt->bindParam(':telefono', $telefono);
    $stmt->bindParam(':sector', $sector);
    $stmt->bindParam(':direccion', $direccion);

    // Ejecuta el procedimiento almacenado
    if($stmt->execute()){
        //AQUI DEBERIA IR UNA ALERTA DE QUE FUE CORRECTO
        echo "<script>alert('todo correcto');</script>";
        echo "<script>window.location.replace('../index.php');</script>";    }else{
        //AQUI DEBERIA IR UNA ALERTA 
        echo "<script>alert('algo salio mal');</script>";
        echo "<script>window.location.replace('../public/registros.php');</script>";
        exit();     }
    
   
    exit;
}
?>
