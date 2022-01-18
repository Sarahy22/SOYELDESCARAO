<?php

$asunto = $_POST['subject'];
$email = $_POST['email'];
$mensaje = $_POST['message'];

$correo = "soyeldescarao@gmail.com";

mail($correo, $asunto, $mensaje

header("location:Contacto.html");
?>