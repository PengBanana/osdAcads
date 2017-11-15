
<?php
$to = 'alvin_deguzman@dlsu.edu.ph';
$subject = 'Hello from XAMPP!';
$message = 'This is a test';
$headers = "From: osddlsu@gmail.com\r\n";
if (mail($to, $subject, $message, $headers)) {
   echo "SUCCESS";
} else {
   echo "ERROR";
}
?>
