<?php

include "connection.php";

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['email'])) {
    $to = $_GET['remail'];
    $subject = "Blood Request";
    $message = "Your blood is urgently needed. Please donate if possible.";
    $headers = "From: jainnaman2774@gmail.com" . "\r\n" . "CC: somebodyelse@example.com";
    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully to " . $to;
    } else {
        echo "Email sending failed.";
    }
}
?>