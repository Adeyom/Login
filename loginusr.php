<?php

$mail = $_POST["mail"];
$password = $_POST["password"];


if (isset($_POST["mail"]))
{
    echo "No ha ingresado correo<br>";
} else {
    echo "Correo: ". $mail.'<br>';
}

if (isset($_POST["password"]))
{
    echo "No se ingreso contraseña";
} else {
    echo "Contraseña: ". $password.'<br>';
}

// echo "nombre: ". $nombres.'<br>';
// echo "Password: ".$password.'<br>';
// echo "Confirmacion: ".$confirmacion_pass.'<br>';