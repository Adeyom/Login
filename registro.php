<!-- //Cuerpo de html -->
<!-- //Nombre de usuario -->
<!-- // email -->
<!-- // contraseña -->
<!-- // confirmacion de contraseña -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Registro</title>
    <link rel="stylesheet" href="css/estilosreg.css">
</head>
<body>
    <aside></aside>
    <div id="contenedor">
    <!-- <form action="registrausr.php" method="post"> -->
    <form action="" method="post">
        <div class="cajas_texto">
            <h4>Formulario de registro</h4>
            <input type="text" class="controles" name="nombres" id="nombres" placeholder="Ingrese su nombre de usuario">
            <input type="email" class="controles" name="mail" id="mail" placeholder="Ingrese correo electronico">
            <input type="password" class="controles" name="password" id="password" placeholder="Ingrese su contraseña">
            <input type="password" class="controles" name="confirmacion_pass" id="confirmacion_pass" placeholder="Confirme su contraseña">
        </div>

        <div class="boton">
        <input type="submit" onclick="validaUsr()" id="button" value="Registrar">
        </form>
        </div>

        <a href="login.php">Ya tengo una cuenta</a>
        <br>
        <br>
        <a href="olvidepassword.php">Olvide la contraseña</a>
        
    </div>
<script src="js/registro.js"></script>
</body>
</html>