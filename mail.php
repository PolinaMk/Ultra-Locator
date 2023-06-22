<?php
    $fio = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $fio = htmlspecialchars($fio);
    $email = htmlspecialchars($email);
    $message = htmlspecialchars($message);
    $fio = urldecode($fio);
    $email = urldecode($email);
    $message = urldecode($message);
    $fio = trim($fio);
    $email = trim($email);
    $message = trim($message);
    //echo $fio;
    //echo "<br>";
    //echo $email;
    if (mail("polinamakarenko.com@gmail.com", "Заявка с сайта", "Имя:".$fio.". E-mail: ".$email , "Сообщение:".$message."."From: example2@mail.ru \r\n")){ 
        echo "сообщение успешно отправлено"; 
    } else { 
        echo "при отправке сообщения возникли ошибки";
    }
?>