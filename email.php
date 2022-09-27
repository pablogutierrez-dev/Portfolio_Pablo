<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

//echo $email . " " . $subject . " " . $message;

$destinatario = "pablo.grothcrew@hotmail.com";
$asunto = "Envio de prueba de correo";
$cuerpo =  '
    <html>
    <head>Prueba</head>
    <body>
        <h1>Prueba de email</h1>
    </body>
    </html>
';

$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

$headers .= "FROM: $name <$email>\r\n";
mail($destinatario,$asunto,$cuerpo,$headers);

echo "Correo Enviado";

?>

<a href="index.html"> Volver </a>