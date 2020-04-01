<?php
session_start();

$sn="localhost";
	$un="root";
	$pswd= "YOUR PASSWORD";
	$dbn= "YOUR DATABASE";

	$conn=new mysqli($sn, $un, $pswd, $dbn);

if(isset($_POST['user_comm']) && isset($_POST['user_name']))
{
  $comment=$_POST['user_comm'];
  $name=$_POST['user_name'];
  $sql = "INSERT INTO `comment`(`name`, `comment`, `post_time`) VALUES('$name','$comment',CURRENT_TIMESTAMP);";
  $conn->query($sql) ;
}
?>
