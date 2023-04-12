<?php
if(isset($_GET['submit'])){
    $to = 'freedomwheelsdrivingschool@gmail.com';
    $subject = 'New message from website';
    $message = $_GET['message'];
    $headers = 'From: ' . $_GET['email'];

    mail($to, $subject, $message, $headers);

    header("Location: thank-you.html");
}
?>
