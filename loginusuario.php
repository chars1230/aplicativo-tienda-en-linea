<?php
        session_start();
        if(isset($_POST["login"])) {
            $docusuario = $_POST["docusuario"];
            $contrasenausuario = $_POST["contrasenausuario"];
                $conexion = mysqli_connect('localhost','root','','civilc');
                $result = "select * from  registrousuario where docusuario='$docusuario' and contrasenausuario='$contrasenausuario'";
                $result=mysqli_query($connetc,$result);
                
                $filas=mysqli_num_rows($result);
                if($filas) {
                    echo "acceso correcto";
                }else{
                    header("location: login.php");
                }
            }else{
                exit();
            }
            
            ?>
            