<?php
$documentoAdministrador = $_POST['documentoAdministrador'];
$nombreAdministrador = $_POST['nombreAdministrador'];
$apellidoAdministrador = $_POST['apellidoAdministrador'];
$contrasenaAdministrador = $_POST['contrasenaAdministrador'];
$correoAdministrador = $_POST['correoAdministrador'];
$telefonoAdministrador = $_POST['Telefono'];
$fechaNacimiento =$_POST['fechaNacimiento'];


echo "los campos son : <br> ";
echo "$documentoAdministrador,$nombreAdministrador,$apellidoAdministrador,$contrasenaAdministrador,$correoAdministrador,$fechaNacimiento,$telefonoAdministrador";


    $conexion = mysqli_connect('localhost','root','','civilc');
    $INSERT="INSERT INTO `administrador`(`documentoAdministrador`, `nombreAdministrador`, `apellidoAdministrador`, `contrasenaAdministrador`, `correoAdministrador`, `fechaNacimiento`, `telefonoAdministrador`)
    VALUES ('$documentoAdministrador','$nombreAdministrador','$apellidoAdministrador','$contrasenaAdministrador','$correoAdministrador','$fechaNacimiento','$telefonoAdministrador')";
   
    $result = mysqli_query($conexion,$INSERT)or trigger_error("Query Failed! SQL- Error: ".mysqli_error($conexion), E_USER_ERROR);
    

// consulta sql

echo "<script>alert('bienvenido $_POST[Nombres]');window.location='index.html'</script>";