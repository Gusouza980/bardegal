<?php

namespace App\Classes;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Email{
    
    public static function enviar($file, $assunto, $destinatario, $admin = false){
        $mail = new PHPMailer(true);

        try {

            // Mail server settings
            $mail->SMTPDebug = 0; // Enable verbose debug output
            $mail->isSMTP(); // Set mailer to use SMTP
            $mail->Host = "email-ssl.com.br"; // Endereço do servidor SMTP
            $mail->SMTPAuth = true; // Enable SMTP authentication
            $mail->Username = 'enviodeemail@7seventrends.com'; // SMTP username
            $mail->Password = '7se@77Adm'; // SMTP password
            $mail->SMTPSecure = 'ssl'; // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 465;

            $mail->setFrom('enviodeemail@7seventrends.com', 'Contato - Bardega');
            if($admin){
                $mail->addAddress("mkt@bardega.com.br"); // Add a recipient, Name is optional
                $mail->addAddress("rafael@bardega.com.br ");
                // $mail->addAddress("gusouza980@gmail.com");
            }else{
                $mail->addAddress($destinatario); // Add a recipient, Name is optional
            }
            $mail->addReplyTo('enviodeemail@7seventrends.com', 'Contato - Bardega');
            // print_r($_FILES['file']); exit;


            $mail->isHTML(true); // Set email format to HTML

            // $file = file_get_contents('site/emails/nova_senha.html');
            // $file = str_replace("{{senha}}", Str::random(6), $file);
            $mail->CharSet = 'UTF-8';
            $mail->Encoding = 'base64';
            
            $mail->Subject = $assunto;
            $mail->Body    = $file;

            // $mail->AltBody = plain text version of your message;

            if( !$mail->send() ) {
                return false;
            } else {
                return true;
            }

        } catch (Exception $e) {
            return false;
        }
    }

}

?>