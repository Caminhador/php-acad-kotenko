<?php

use PHPMailer\PHPMailer\PHPMailer;

require_once __DIR__ . '/vendor/autoload.php';

$mail = new PHPMailer(true);
try {
    $mail->setFrom('test@test.com');
    $mail->addAddress($_POST['email']);
    $mail->Subject = $_POST['title'];
    $mail->Body = $_POST['message'];

    $result = $mail->send();
    var_dump($result);
} catch (Exception $exception) {
    echo $exception->getMessage();
}
