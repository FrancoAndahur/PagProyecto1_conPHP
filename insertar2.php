<?php
include("conexion.php");
$con=conectar();

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$usuario=$_POST['usuario'];
$correo=$_POST['correo'];
$contraseña=$_POST['contraseña'];
$nacimiento=$_POST['nacimiento'];
$genero=$_POST['genero'];
$telefono=$_POST['telefono'];

$sql="INSERT INTO usuarios(nombre,apellido,usuario,correo,contraseña,nacimiento,genero,telefono) VALUES('$nombre','$apellido','$usuario','$correo','$contraseña','$nacimiento','$genero','$telefono')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: registro_exitoso.php");
    
}else {
}
?>