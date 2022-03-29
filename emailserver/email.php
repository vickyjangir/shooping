<?php
$to = "vikramkumarjangir2000@gmail.com  ";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: vikramkumarjangir2000@gmail.com" . "\r\n" .
"CC: vikram.jangir@byjus.com";

mail($to,$subject,$txt,$headers);
?>