<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';

    $mail = new PHPMailer(true);
    $mail->CharSet = 'UTF-8';
    $mail->setLanguage('ca', 'PHPMailer/language/');
    $mail->IsHTML(true);

    $mail->setForm('m69051236@gmail.com', 'Admin');
    $mail->addAddress('polinamakarenko.com@gmail.com');
    $mail->Subject = 'Hello! New message';

    $body = '<h1>New message</h1>';

    if(trim(!empty($_POST['name']))) {
        $body.='<p><strong>Name:</strong> '.$_POST['name'].'</p>';
    }
    if(trim(!empty($_POST['email']))) {
        $body.='<p><strong>E-mail:</strong> '.$_POST['email'].'</p>';
    }
    if(trim(!empty($_POST['message']))) {
        $body.='<p><strong>Message:</strong> '.$_POST['message'].'</p>';
    }

    $mail->Body = $body;

    if (!$mail->send()) {
        $message = 'Error';
    } else {
        $message = 'Data sent';
    }

    $response = ['message' => $message];

    header('Content-type: application/json');
    echo json_encode($response);
?>