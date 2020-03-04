<?php
session_start();
$to = $_SESSION['tmail'];
$subject = "Your Credentials"
$txt = "USERNAME:".$_SESSION['username']."PASSWORD:".$_SESSION['userpw'] ;


//mail($to,$subject,$txt);
header("location: ../teachercomplete.php?m=emailgone");
?>
