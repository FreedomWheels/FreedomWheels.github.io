<?php
if(isset($_GET['submit'])){
    $to = 'freedomwheelsdrivingschool@gmail.com';
    $subject = 'New message from website';
    $message = $_GET['message'];
    $headers = 'From: ' . $_GET['email'];

    mail($to, $subject, $message, $headers);
    if (error_get_last()) {
        error_log(print_r(error_get_last(), true));
    }
    
    header("Location: thank-you.html");
}
?>
