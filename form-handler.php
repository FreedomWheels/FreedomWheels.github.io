<?php
if(isset($_POST['submit'])){
    $to = 'freedomwheelsdrivingschool@gmail.com';
    $subject = 'New message from website';
    $message = $_POST['message'];
    $headers = 'From: ' . $_POST['email'];

    mail($to, $subject, $message, $headers);

    header("Location: thank-you.html");
}
?>