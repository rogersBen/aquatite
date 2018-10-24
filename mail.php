<?php
// the message
$msg = "First line of text\nSecond line of text";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

echo $msg;

// send email
mail("ben.tfpm@gmail.com","My subject",$msg);
?>