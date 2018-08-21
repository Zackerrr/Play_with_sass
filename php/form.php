<?php
if(isset($_POST["submit"])) {
$recipient = "martawaldon@github.io"; //my email
echo $subject = 'Email message from Weekly Web Dev Form';
echo $name = $_POST ["Name"];
echo $email = $_POST["Email"];
echo  $message = $_POST["yourMessage"];

 $mailBody="Name: $name\nEmail: $email\n\n$message"; 

 mail($recipient, $subject, $mailBody, "From: $name <$email>");

echo $thankYou="<p>Thank you! We will be in contact with you shortly.</p>";

}
?>