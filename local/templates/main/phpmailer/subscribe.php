<?php

use PHPMailer\PHPMailer\PHPMailer;

if (isset($_POST["name"]) &&
   isset($_POST["email"]) && 
   isset($_POST["checkbox-read"]) &&
   isset($_POST["checkbox-agree"])) {

    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $checkbox_read = $_POST["checkbox-read"];
    $checkbox_agree = $_POST["checkbox-agree"];

    require 'PHPMailer.php';
    require 'SMTP.php';
    require 'config.php';

    $mail = new PHPMailer();
    $mail->CharSet = 'UTF-8';

    // Настройки SMTP
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPDebug = 0;

    $mail->Host = $Host;
    $mail->Username = $Username; // Для Яндекс почты должно быть одинаковым
    $mail->Password = $Password;

    $mail->Port = 465;

    // От кого
    $mail->From = $Username; // Для Яндекс почты должно быть одинаковым
    $mail->FromName = $Username; // Для Яндекс почты должно быть одинаковым

    // Кому
    $mail->addAddress($To);

    // Тема письма
    $mail->Subject = 'Сообщение с сайта Эристави';

    $mail->isHTML(true);

    if (strlen($name) >= 3 &&
      strlen($name) <= 30 &&
      strlen($email) >= 3 &&
      strlen($email) <= 50 &&
      $checkbox_read == "on" &&
      $checkbox_agree == "on") {

        // Тело письма
        $mail->Body = "Подписаться на рассылку<br> Имя: $name<br> Email: $email<br>";
        $mail->AltBody = "Подписаться на рассылку\r\n Имя: $name\r\n Email: $email\r\n";

        $mail->send();
    }

    $mail->smtpClose();

} else {
    header("Location: /");
    exit;
}

?>