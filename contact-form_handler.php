<?php
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    $email_from ='interstate1717@gmail.com';

    $email_subject = "Enquiry for service";

    $email_body = "User Name: $name.\n".
                    "Surname: $surname.\n".
                        "User Email: $visitor_email.\n".
                            "User Message: $message.\n";

    $to = "interstate1717@gmail.com";

    $headers = "From: $email_from \r\n";

    $headers = "Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: contact_us.html");





?>
