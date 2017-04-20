<?php
$myemail = "perla@pong.com.mx";
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$msg = "Nuevo correo para Promedics!\nNombre: " . $name . "\nEmail: " . $email . "\nTeléfono: " . $phone . "\nEmail: " . $email;
$msg = wordwrap($msg,70);
mail($myemail,"Nuevo correo de Promedics",$msg);
mail($email,"Gracias por contactarnos",$msg);
echo 'Gracias por escribirnos.<a href="index.html">Click para regresar al homepage.';

?>
