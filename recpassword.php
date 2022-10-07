<?php


$mail = $_POST["mail"];

if (isset($_POST["mail"]))
{
    echo "No ha ingresado correo<br>";
} else {
    echo "Correo: ". $mail.'<br>';
}