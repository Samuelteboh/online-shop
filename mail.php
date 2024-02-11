<?php
//get data from form  
$name = $_POST['name'];
$number = $_POST['phone no.'];
$email= $_POST['email'];
$message= $_POST['message'];
$to = "polkadotshroombars@gmail.com";

$subject = "Mail From polkadotshroombars ";
$txt ="Name = ". $name . "\r\n phone no." . $number . "\r\n  Email = " . $email . "\r\n Message =" . $message;

$headers = "From: noreply@polkadotshroombars.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>