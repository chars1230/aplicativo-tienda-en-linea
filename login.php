<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="estilos/registro.css">
</head>
<body>
    
    
    <form action="loginusuario.php" method="POST" class="registro">
        
        <h1>LOGIN</h1>
        <div class="contenedor"> 
        <input class="controls" type="text" name="docusuario" placeholder="Ingrese su Documento" required><br>
        <input class="controls" type="password" name="contrasenausuario" placeholder="Ingrese su Contraseña" required><br>
       
    
        <button class="botons" type="submit" name="login">Iniciar sesion</button>
        
        <p><a class="link" href="registrousuario.">Iniciar como administrador</a></p><br><p>¿Aun no tienes cuenta?<a class="link" href="registrousuario.html">Registrarse</a></p>
        
    </form>
    </div>
</body>
</html>