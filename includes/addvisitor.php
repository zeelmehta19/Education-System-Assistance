<?php

if(!isset($_POST['submit']))
{
    header("location: ../menu.php");
    exit();
}
else
{
    include './script.php';


    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $addr = $_POST['address'];
    $date = $_POST['date'];
    $enquiry = $_POST['enquiry'];
    if(isset($_POST['c0'])){  $s0 = 1; } else { $s0 = 0;}
    if(isset($_POST['c1'])){  $s1 = 1; } else { $s1 = 0;}
    if(isset($_POST['c2'])){  $s2 = 1; } else { $s2 = 0;}

    $sql = "INSERT INTO `visitor-details`(`name`, `email`, `phone`, `address`, `enquiry`, `classXI`, `classXII`, `classent`, `date`)
     VALUES ('$name','$email','$phone','$addr','$enquiry','$s0','$s1','$s2','$date') ;" ;
    $que = insertintoSql($sql);
    if($que)
    {

            header("location: ../menu.php?");
        }
    
    else
       {
         header("location: ../visitor.php?m=sw");
        }







}


?>
