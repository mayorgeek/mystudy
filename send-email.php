<?php

//to, subject, message, headers="From: blsaj@gmail.com" . "\r\n" . "CC: hakhfak@gmail.com";
    $sender = $_POST['email'];

    $to = "aiotouchmagic@gmail.com";
    $subject = "MyStudy Contact Form";

    $message = $_POST['comment'];

    $header = "From: " . $sender . "\r\n";
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-type: text/html\r\n";

    $retVal = mail($to, $subject, $message, $header);

    if ($retVal == true) {
        echo "Message sent successfully...";
    } else {
        echo "Message could not be sent...";
    }

?>