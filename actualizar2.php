<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id'];

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$usuario=$_POST['usuario'];
$correo=$_POST['correo'];
$contraseña=$_POST['contraseña'];
$nacimiento=$_POST['nacimiento'];
$genero=$_POST['genero'];
$telefono=$_POST['telefono'];

$sql="UPDATE usuarios SET nombre='$nombre',apellido='$apellido',usuario='$usuario',correo='$correo',contraseña='$contraseña',nacimiento='$nacimiento',genero='$genero',telefono='$telefono' WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    }
?>