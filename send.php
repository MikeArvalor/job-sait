<?php
$name=$_POST['name'];
$email=$_POST['email'];
$tel=$_POST['tel'];
$message=$_POST['message'];

$name=htmlspecialchars($name);
$email=htmlspecialchars($email);
$tel=htmlspecialchars($tel);
$message=htmlspecialchars($message);

$name=urldecode($name);
$email=urldecode($email);
$tel=urldecode($tel);
$message=urldecode($message);

$name=trim($name);
$email=trim($email);
$tel=trim($tel);
$message=trim($message);
mail("mail@londoncityassociates.com","London City Associates Ltd",
"Name: ".$name."\n"."Email: ".$email."\n"."Telephone: ".$tel."\n"."Message: ".$message,"From:\r\n")

?>