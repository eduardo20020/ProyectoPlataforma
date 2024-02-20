<?php
$empresa = $_POST["nombreempresa"];
$sector = $_POST["sector"];
$correo = $_POST["correo"];
$password = $_POST["password"];
$ubicacion = $_POST["ubicacion"];
$telefono = $_POST["telefono"];

foreach ($_POST as $i){
    if (empty($i)){
        echo"rellena todos los campos";
        
    }
}
?>