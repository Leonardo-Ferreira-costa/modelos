<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Require
//require 'src/PHPMailerAutoload.php';

require 'src/Exception.php'; 
require 'src/PHPMailer.php';
require 'src/SMTP.php'; 

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->SMTPAuth   = true;
	$mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
	$mail->Username   = 'leonardo.fcosta69824@gmail.com';                     //SMTP username
    $mail->Password   = '-riitighoxhrptuna-';                               //SMTP password gerado exclusivo para este envio, não é a mesma senha do email.
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = 

    //Recipients
    $mail->setFrom('leonardo.fcosta69824@gmail.com', 'Nome remetente');
    $mail->addAddress('leonardo.fcosta69824@gmail.com', 'Nome destinatario');     //Add a recipient
    $mail->addReplyTo('leonardo.fcosta69824@gmail.com', 'Responda para:');

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Assunto aqui';
    $mail->Body    = 'Corpo do email em  <b>HTML!</b>';
    $mail->AltBody = 'Corpo do email para clientes de email sem HTML.';

    $mail->send();
    echo 'Mensagem enviada com sucesso.';
} catch (Exception $e) {
    echo "A mensagem não pode ser enviada. CODIGO DO ERRO: {$mail->ErrorInfo}";
}

?>