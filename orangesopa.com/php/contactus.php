<?php

/* All form fields are automatically passed to the PHP script through the array $HTTP_POST_VARS. */
$headers .= "Content-type: text/html; charset=\"UTF-8\"; format=flowed";
$to = "colin@orangesopa.com,lily@orangesopa.com,juan@orangesopa.com,carolina@orangesopa.com";
$subject = "Website Inquiry";
$name = $HTTP_POST_VARS["inputName"];
$email = $HTTP_POST_VARS["inputEmail"];
$body = "NAME: " . $name . "\r\n" . "\r\n" .
           "EMAIL ADDRESS: " . $email . "\r\n" . "\r\n" .
           "MESSAGE: " . "\r\n" .
           $HTTP_POST_VARS["inputMessage"];

// PHP Mailer
if (mail($to, $subject, $body, $header)) {
  header('Location: http://orangesopa.com/dev');
} else {
  null;
}

?>
