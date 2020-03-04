<?php

if(!isset($_POST['submit']))
{
    header("location: ../adminhome.php");
    exit();
}
else
{
    include './script.php';


    $fn = $_POST['fn'];
    $mn = $_POST['mn'];
    $ln = $_POST['ln'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $addr = $_POST['address'];
    $date = $_POST['dob'];
    $gender = $_POST['gender'];
    if(isset($_POST['c0'])){  $s0 = 1; } else { $s0 = 0;}
    if(isset($_POST['c1'])){  $s1 = 1; } else { $s1 = 0;}
    if(isset($_POST['c2'])){  $s2 = 1; } else { $s2 = 0;}

    $sql = "INSERT INTO `student-details`(`fn`, `mn`, `ln`, `dateofbirth`, `gender`, `email`, `phone`, `address`, `classXI`, `classXII`, `classent`)
     VALUES ('$fn','$mn','$ln','$date','$gender','$email','$phone','$addr','$s0','$s1','$s2') ;" ;
    $que = insertintoSql($sql);
    if($que)
    {
        $username = strtolower($fn).".".strtolower($ln);
        $passkey = strtolower($fn).substr($date,8,2).substr($date,5,2);
        $newsql = "INSERT INTO `studentlogin`(`username`, `password`, `email`)
      VALUES ('$username','$passkey','$email'); " ;
      $qs = insertintoSql($newsql);

            header("location: ../student.php?m=ok&u=".$username."&p=".$passkey);
        }

    else
       {
         header("location: ../visitor.php?m=sw");
        }







}


?>
