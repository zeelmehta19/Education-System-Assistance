
<?php

	$sn="localhost";
	$un="root";
	$pswd= "YOUR PASSWORD";
	$dbn= "YOUR DATABASE";

	$conn=new mysqli($sn, $un, $pswd, $dbn);


	if($conn->connect_error)
	{
		die("connection failed:". $conn->connect_error);

	}


?>
