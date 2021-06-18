<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sender</title>
</head>

<body>
    <?php
    //get data from form  

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $to = "thirayutsae717@mail.com";
    $subject = "Mail From website";
    $txt = "Name = " . $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
    $headers = "From: noreply@teerayut-wedsite.com" . "\r\n" .
        "CC: somebodyelse@example.com";
    if ($email != NULL) {
        mail($to, $subject, $txt, $headers);
        echo "Sent successfully Thank you.";
    }
    //redirect
    header("Location:Contact.html");
    ?>
</body>

</html>