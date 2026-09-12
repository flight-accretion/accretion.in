<?php
error_reporting(E_ALL);
ini_set('display_errors', 0);

require 'mail/PHPMailerAutoload.php';

function env_value($name, $default = '')
{
    $value = getenv($name);
    return $value === false ? $default : $value;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $mail = new PHPMailer();
    $mail->CharSet = 'UTF-8';

    // SAFE INPUT
    $name  = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $mob   = $_POST['mob'] ?? '';
    $msg   = $_POST['msg'] ?? '';

    // VALIDATION
    if ($email == "" || $msg == "" || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "error";
        exit();
    }

    try {
        $mailHost = env_value('MAIL_HOST');

        if ($mailHost !== '') {
            $mail->IsSMTP();
            $mail->Host = $mailHost;
            $mail->Port = (int) env_value('MAIL_PORT', '587');

            $mailUsername = env_value('MAIL_USERNAME');
            $mailPassword = env_value('MAIL_PASSWORD');
            if ($mailUsername !== '' || $mailPassword !== '') {
                $mail->SMTPAuth = true;
                $mail->Username = $mailUsername;
                $mail->Password = $mailPassword;
            }

            $mailEncryption = env_value('MAIL_ENCRYPTION', 'tls');
            if ($mailEncryption !== '') {
                $mail->SMTPSecure = $mailEncryption;
            }
        }

        $mail->SetFrom(
            env_value('MAIL_FROM_ADDRESS', 'info@accretion.in'),
            env_value('MAIL_FROM_NAME', 'Accretion Website')
        );
        $mail->addReplyTo($email, $name ?: $email);

        $mail->Subject = "Accretion Contact Form";
        $mail->IsHTML(true);

        $safeName = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
        $safeEmail = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
        $safeMob = htmlspecialchars($mob, ENT_QUOTES, 'UTF-8');
        $safeMsg = nl2br(htmlspecialchars($msg, ENT_QUOTES, 'UTF-8'));

        $body = "
            <h3>New Contact Enquiry</h3>
            <b>Name:</b> $safeName <br>
            <b>Email:</b> $safeEmail <br>
            <b>Phone:</b> $safeMob <br>
            <b>Message:</b> $safeMsg <br>
        ";

        $mail->Body = $body;

        $recipients = explode(',', env_value('MAIL_TO', 'info@accretion.in,rahul@accretion.in'));
        foreach ($recipients as $recipient) {
            $recipient = trim($recipient);
            if ($recipient !== '') {
                $mail->AddAddress($recipient);
            }
        }

        if ($mail->Send()) {
            echo "success";
        } else {
            error_log('Accretion contact form mail failed: ' . $mail->ErrorInfo);
            echo "error";
        }

    } catch (Exception $e) {
        error_log('Accretion contact form exception: ' . $e->getMessage());
        echo "error";
    }

} else {
    echo "error";
}
?>
