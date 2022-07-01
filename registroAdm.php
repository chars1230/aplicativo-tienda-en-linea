<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/registro.css">
    <title>Registro Administrador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    
     
    <!-- <form class="registro"> -->
        <form action="registro.php" method="POST">
        
        <h1>Registro Administrador CIVILC SAS</h1>

        <div class="contenedor"> 

        <input class="controls" type="number" name="documentoAdministrador" placeholder="Ingrese su Documento" required><br>
        <input class="controls" type="text" name="nombreAdministrador" placeholder="Ingrese sus Nombres" required><br>
        <input class="controls" type="text" name="apellidoAdministrador" placeholder="Ingrese sus Apellidos" required><br>
        <input class="controls" type="password" name="contrasenaAdministrador" placeholder="Ingrese su Contraseña" required><br>
        <input class="controls" type="text" name="correoAdministrador" placeholder="Ingrese su Correo" required><br>
        <input class="controls" type="number" name="fechaNacimiento" placeholder="Ingrese su Telefono" required><br>
        <input class="controls" type="text" name="telefonoAdministrador" placeholder="Ingrese su Direccion" required><br>
        
    
        <input class="botons" type="submit" name="login" value="Registrarse">
        <p>¿Ya tienes cuenta?<a class="link" href="login.html">Iniciar sesion</a></p>
    </form>
    </div>
</body>
</html>