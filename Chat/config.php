<?php

$sn="remotemysql.com";
$un="9YeXwWhbvU";
$pswd= "ZwGmHV8J1b";
$dbn= "9YeXwWhbvU";

$conn=new mysqli($sn, $un, $pswd, $dbn);


if($conn->connect_error)
{
	die("connection failed:". $conn->connect_error);

}

?>
