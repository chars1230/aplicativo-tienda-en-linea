<?php
session_start();
if(!isset($_POST["login"])) {
$documentoAdministrador = $_POST["documentoAdministrador"];
$contrasenaAdministrador = $_POST["contrasenaAdministrador"];
$conexion = mysqli_connect('localhost','root','','civilc');
$query = "SELECT * FROM `administrador` WHERE documentoAdministrador='$documentoAdministrador' AND contrasenaAdministrador='$contrasenaAdministrador'";
$result = mysqli_query($conexion,$query);

$filas = mysqli_num_rows($result);
if($filas) {
    echo "<script>alert('bienvenido $_POST[Nombres]');window.location='index.html'</script>";
}else{
    
    header("location: login.php");
}
    echo "<script>alert('bienvenid@ $_POST[nombreAdministrador]');window.location='index.html'</script>";
}else{
    header("location: login.php");
    exit();
            }


            