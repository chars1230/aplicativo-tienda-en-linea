<?php 


$Documento = $_POST['Documento'];
$Nombres = $_POST['Nombres'];
$Apellidos = $_POST['Apellidos'];
$Contrasena = $_POST['Contrasena'];
$Correo = $_POST['Correo'];
$Telefono = $_POST['Telefono'];
$Direccion = $_POST['Direccion'];
$Ciudad =$_POST['Ciudad'];


echo "los campos son : <br> ";
echo "$Documento,$Nombres,$Apellidos,$Contrasena,$Correo,$Telefono,$Direccion,$Ciudad";


    $conexion = mysqli_connect('localhost','root','','civilc');
    $INSERT="INSERT INTO `usuarios`(`Documento`, `Nombres`, `Apellidos`, `Contrasena`, `Correo`, `Telefono`, `Direccion`, `Ciudad`) 
    VALUES ('$Documento','$Nombres','$Apellidos','$Contrasena','$Correo','$Telefono','$Direccion','$Ciudad')";
   
    $result = mysqli_query($conexion,$INSERT)or trigger_error("Query Failed! SQL- Error: ".mysqli_error($conexion), E_USER_ERROR);
    

// consulta sql

echo "<script>alert('bienvenid@ $_POST[Nombres]');window.location='index.html'</script>";

?>