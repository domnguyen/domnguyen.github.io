<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $senders_name = $_POST['name'];
    $senders_email = $_POST['email'];
    $senders_phone = $_POST['phone'];
    $message = $_POST['message'];

    $to = "dom.nguyen1@gmail.com";
    $headers = "From:" . $from;

    if (mail($to, $subject, $message, $headers)) {
        echo "Mail Sent.";
    }
    else {
        echo "failed";
    }
}

?>
