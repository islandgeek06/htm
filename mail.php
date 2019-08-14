<?php $name = $_POST['name'];
$email = $_POST['email'];
$submit = $_POST['submit'];

$formcontent = "From: $name $email  \n Message: $email";
$recipient = "info@trimidglobal.com";
$subject = "New Mail";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";


header("Location: index.html");
