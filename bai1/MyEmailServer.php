<?php

namespace btth3\btth3; 
require_once __DIR__.'/EmailServerInterface.php';
use btth3\btth3\EmailServerInterface;
class MyEmailServer implements EmailServerInterface {
    
    function SendEmail($to,$subject,$mes){
        require_once dirname(__DIR__).'/vendor/autoload.php';
        $mail = new \PHPMailer\PHPMailer\PHPMailer();
        $mail->isSMTP();
        $mail->Host= 'smtp.gmail.com';
        $mail->SMTPAuth = true;

        $mail->Username = 'datraumuong@gmail.com';
        $mail->Password = 'voamdnnoxuktvtlq';

        $mail->SMTPSecure ='tls';
        $mail->Port= 587;

        $mail->setFrom('datraumuong@gmail.com', 'Trần Quý Đạt');
        $email_parts  = explode("@",$to);
        $mail->addAddress($to,$email_parts[0]);

        $mail->Subject = $subject;
        $mail->Body    = $mes;

        $mail->CharSet="UTF-8";

        if(!$mail->send()){
            echo"gui mail that bai!!";
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }
        else{
            echo"gui mail thanh cong";
        }
    }
}