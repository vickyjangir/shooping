<?php
$To = "vikramkumarjangir2000@gmail.com";
$Subject = " wel come to host";
$Txt = "Hello world!";
$Headers = "From: webmaster@example.com" . "\r\n" .
"CC: vikram.jangir@byjus.com.com";
mail($To,$Subject,$Txt,$Headers);
?>