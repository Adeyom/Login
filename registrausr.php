<?php


$nombres = $_POST["nombres"];
$mail = $_POST["mail"];
$password = $_POST["password"];
$confirmacion_pass = $_POST["confirmacion_pass"];

// if (isset($_POST["mail"]))
// {
//     echo "No ha ingresado correo<br>";
// } else {
//     echo "Correo: ". $mail.'<br>';
// }



echo "Nombre: ". $nombres.'<br>';
echo "Correo: ". $mail.'<br>';
echo "Password: ".$password.'<br>';
echo "Confirmacion: ".$confirmacion_pass.'<br>';
?>