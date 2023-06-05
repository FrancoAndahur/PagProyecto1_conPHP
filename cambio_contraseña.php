<?php

include("conexion.php");
$con=conectar();

$correo=$_POST['correo'];
$contraseña=$_POST['contraseña'];

$sql="UPDATE usuarios SET contraseña='$contraseña' WHERE correo='$correo'";

if ($con->query($sql) == TRUE) {
    // La consulta se ejecutó correctamente
    Header("location: cambiocon_exitoso.php");
} else {
    // Ocurrió un error al ejecutar la consulta
    header("location: cambiocon_error.php");
}