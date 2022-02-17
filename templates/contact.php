<?php

if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $mailForm = $_POST['mail'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $mailTo = "karanshirke888@gmail.com";
    $headers = "From: ".$mailForm;
    $txt = "You have a message ".$name".\n\n".$message;

    mail($mailTo, $name, $txt, $headers);

    header("Location: inbox.html?MessageSent");
}
?>