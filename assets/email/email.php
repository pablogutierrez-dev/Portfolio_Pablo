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
                <li>Nombre : '.$name.'</li><br>
                <li>Email : '.$email.'</li><br>
                <li>Asunto : '.$subject.'</li><br>
                <li>Mensaje : '.$message.'</li><br>       
            </ul>
        </body>
    </html>';
    
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    mail($destino, $asunto, $contenido, $headers);

    sleep(4);
    header("Location: ../../index.html", true, 303);
    exit;
    
    }else {
        echo"Error de envio";
    }
?>
        