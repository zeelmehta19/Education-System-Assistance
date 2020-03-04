<?php
session_start();
if(!isset($_POST['submit']))
{
    header("location: ../menu.php");
    exit();

}
else

{
    include './script.php';
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $addr = $_POST['address'];
    $dob = $_POST['dob'];
    $experience = $_POST['exp'];

    $lecdate = $_POST['lecdate'];
    $allotment = $_POST['allotment'];
    $subject = $_POST['subject'];

    $_SESSION['tname'] = $name;
    $_SESSION['tsurname'] = $surname;
    $_SESSION['tmail'] = $email;
    $id = $_GET['id'];


    $sql = "UPDATE `teacherdetails` SET `name`='$name',
    `surname`='$surname',`email`='$email',
    `phone`='$phone',`dateofbirth`='$dob',
    `address`='$addr',`experience`='$experience',
    `firstlecdate`='$lecdate',`allotment`='$allotment' WHERE `teacherid`  = '$id' ;" ;
  $que = insertintoSql($sql);
    if($que)
    {
        if(isset($_POST['s0'])){  $s0 = 1; } else { $s0 = 0;}
        if(isset($_POST['s1'])){  $s1 = 1; } else { $s1 = 0;}
        if(isset($_POST['s2'])){  $s2 = 1; } else { $s2 = 0;}
        if(isset($_POST['s3'])){  $s3 = 1; } else { $s3 = 0;}
        if(isset($_POST['s4'])){  $s4 = 1; } else { $s4 = 0;}
        if(isset($_POST['s5'])){  $s5 = 1; } else { $s5 = 0;}

        $sql2 = " UPDATE `teacherexpertise` SET
        `eleventh`='$s0',
        `twelveth`='$s1',
        `phy`='$s2',
        `chem`='$s3',
        `maths`='$s4',
        `entrance`='$s5'
         WHERE `teacherid` = '$id'";
        $que2 = insertintoSql($sql2);
        if($que2)
        {
          //echo $name;
            header("location: ../viewteacher.php?m=ok");
        }
        else
           {
             header("location: ../edit1.php?m=".$s5);
            }

    }
    else
       {
         header("location: ../edit1.php?m=sw");
        }







}


?>
