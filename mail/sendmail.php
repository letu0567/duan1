<?php 
    include "PHPMailer/src/PHPMailer.php";
    include "PHPMailer/src/Exception.php";
    include "PHPMailer/src/OAuth.php";
    include "PHPMailer/src/POP3.php";
    include "PHPMailer/src/SMTP.php";
     
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
    // print_r($mail);

    try {
        //Server settings
        $mail->SMTPDebug = 2;                                 // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com;';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'letu0567@gmail.com';                 // SMTP username
        $mail->Password = 'ybqfneynjuswsgqp';                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to
     
        //Recipients
        $mail->setFrom('letu0567@gmail.com', 'Mailer');
        
        $mail->addAddress('tulvph22708@fpt.edu.vn', 'Lee tu');     // Add a recipient
        $mail->addAddress('tueovi2003@gmail.com', 'Tu le');               // Name is optional

        // $mail->addReplyTo('info@example.com', 'Information');
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');
     
        //Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
     
        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Test mail';
        $mail->Body    = 'NEw content test mail';
        // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
     
        $mail->send();
        echo 'Message has been sent';

    } catch (Exception $e) {

        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    }
?>