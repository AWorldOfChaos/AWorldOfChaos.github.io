<?php

if (isset($_POST['submit'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $country = $_POST['country'];
    $subject = $_POST['subject'];

    $sub = "Feedback"
    $mailTo = "varisgreenleaf@outlook.com";
    $headers = "From: My Website";
    $txt = "You have received a feedback from".$firstname." ".$lastname."\n\n".subject;
    mail($mailTo, $sub, $txt, $headers);
    header("Location: index.php?mailsend");
}