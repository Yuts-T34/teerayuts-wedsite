<?php
    //get data from form  

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $to = "thirayutsae717@gmail.com";
    $subject = "Mail From website";
    $txt = "Name = " . $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
    $headers = "From: https://yuts-t34.github.io/." . "\r\n" .
        "CC: somebodyelse@example.com";
    if ($email != NULL) {
        mail($to, $subject, $txt, $headers);
        header("Location:Contact.html");
    }
?>
