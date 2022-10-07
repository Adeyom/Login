<!-- Pantalla login 
        email
        contraseña 
    
        liga para olvide contraseña
        boton inicio sesión
        liga para registrarse
    
    -->
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Login</title>
    <link rel="stylesheet" href="css/estiloslog.css">
    <link rel="shortcut icon" href="css/imagenes/favicon.ico" type="image/x-icon">
</head>
<body>

    <div id="contenedor">
        <div id="imagen_usuario" class="contenido"> <img src="../css/imagenes/user.png" id="tamaño"></div> 
        
        <div id="bienvenido" class="contenido">BIENVENIDO</div>
        
        <form action="loginusr.php" method="post">
        <input type="email" class="controles" name="mail" id="nombres" placeholder="Ingrese su nombre de usuario">
        <input type="password" class="controles" name="password" id="mail" placeholder="Ingrese contraseña">

        <div id="boton" class="contenido">
            <!-- <button type="submit" id="button">Iniciar Sesión</button> -->
            <input type="submit" id="button" value="Iniciar Sesion">
        </div>
        </form>
        <div id="pie" class="contenido">
            <a href="olvidepassword.php" >¿Olvidaste tu contraseña?</a>
        </div>

        <div id="nueva" class="contenido">
            <a href="registro.php"  >¿No tienes cuenta? Crear  nueva</a>
        </div>

    </div>



</body>
</html>