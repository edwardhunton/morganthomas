<?php

//print_r($_POST);

if(isset($_POST['email'])) {

    $email_from = "webmaster@firedoorlondon.co.uk";

    $email_to = "info@firedoorlondon.co.uk";

    $email_subject = "Fire Door London website enquiry";

    $email_message = "email: " . $_POST['email'] . "  phone: ". $_POST['phone'] . "  message: ". $_POST['message'];



// create email headers

$headers = 'From: '.$email_from."\r\n".

'Reply-To: '.$email_from."\r\n" .

'X-Mailer: PHP/' . phpversion();


mail($email_to, $email_subject, $email_message, $headers);

header('Location: /contact/thanks.html');







?>











<?php

}

?>