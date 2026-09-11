<?php
error_reporting(E_ALL);
ini_set('display_errors', 0);

require 'mail/PHPMailerAutoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $mail = new PHPMailer();
    $mail->CharSet = 'UTF-8';

    // SAFE INPUT
    $name  = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $mob   = $_POST['mob'] ?? '';
    $msg   = $_POST['msg'] ?? '';

    // VALIDATION
    if ($email == "" || $msg == "") {
        echo "error";
        exit();
    }

    try {

        $mail->SetFrom('info@accretion.in', 'Accretion Website');
        $mail->addReplyTo($email);

        $mail->Subject = "Accretion Contact Form";
        $mail->IsHTML(true);

        $body = "
            <h3>New Contact Enquiry</h3>
            <b>Name:</b> $name <br>
            <b>Email:</b> $email <br>
            <b>Phone:</b> $mob <br>
            <b>Message:</b> $msg <br>
        ";

        $mail->Body = $body;

        $mail->AddAddress("info@accretion.in", "Accretion");
        $mail->AddAddress("rahul@accretion.in", "Rahul Accretion");

        if ($mail->Send()) {
            echo "success";
        } else {
            echo "error";
        }

    } catch (Exception $e) {
        echo "error";
    }

} else {
    echo "error";
}
?>