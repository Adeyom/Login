<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperacion de password</title>
    <link rel="stylesheet" href="css/estilospass.css">
</head>
<body>
<div id="contenedor">
        <div id="imagen_usuario" class="contenido"> <img src="css/imagenes/candado.png" id="tamaño"></div> 
        
        <h4>Recuperacion de contraseña</h4>
        <p>
            Las instrucciones de recuperacion de contraseña
            se enviaran al correo electronico especificdo en
            el registro 
        </p>
        
        <form action="recpassword.php" method="post">
        <input type="email" class="controles" name="mail" id="nombres" placeholder="Ingrese su correo">

        <div id="boton" class="contenido">
            <!-- <button id="button">Enviar</button> -->
            <input type="submit" id="button" value="Enviar">

        </div>
        </form>

        <div id="pie" class="contenido">
            <a href="login.php" >Ya tengo una cuenta</a>
        </div>

        <div id="nueva" class="contenido">
            <a href="registro.php"  >¿No tienes cuenta? Crear  nueva</a>
        </div>

    </div>
</body>
</html>