<?php
if (isset($_POST["name"]) && !empty($_POST["name"])
&& isset($_POST["email"]) && !empty($_POST["email"])
&& isset($_POST["subject"]) && !empty($_POST["subject"])
&& isset($_POST["message"]) && !empty($_POST["message"]) ){
    
    $destino = "info@pablogutierrezdev.com";
    $asunto = 'Email from Portfolio';
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $contenido =' 
    <html>
        <body>
            <ul>
                <li>Nombre : '.$name.'</li>
                <li>Email : '.$email.'</li>
                <li>Asunto : '.$subject.'</li>
                <li>Mensaje : '.$message.'</li>        
            </ul>
        </body>
    </html>';
    
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    mail($destino, $asunto, $contenido, $headers);

    header('Location:index.html'); 
    }else {
        echo"Error de envio";
    }
?>