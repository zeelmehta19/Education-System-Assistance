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


    $sql = "INSERT INTO `teacherdetails`( `name`, `surname`, `email`, `phone`, `dateofbirth`, `address`, `experience`, `firstlecdate`, `allotment`)
              VALUES ('$name','$surname','$email','$phone','$dob','$addr','$experience','$lecdate','$allotment')   ;" ;
  $que = insertintoSql($sql);
    if($que)
    {
        if(isset($_POST['s0'])){  $s0 = 1; } else { $s0 = 0;}
        if(isset($_POST['s1'])){  $s1 = 1; } else { $s1 = 0;}
        if(isset($_POST['s2'])){  $s2 = 1; } else { $s2 = 0;}
        if(isset($_POST['s3'])){  $s3 = 1; } else { $s3 = 0;}
        if(isset($_POST['s4'])){  $s4 = 1; } else { $s4 = 0;}
        if(isset($_POST['s5'])){  $s5 = 1; } else { $s5 = 0;}

        $sql2 = "INSERT INTO `teacherexpertise`(`eleventh`, `twelveth`, `phy`, `chem`, `maths`, `entrance`)
                  VALUES ('$s0','$s1','$s2','$s3','$s4','$s5') ;";
        $que2 = insertintoSql($sql2);
        if($que2)
        {
            header("location: ../addteacher2.php?");
        }
        else
           {
             header("location: ../addteacher1.php?m=".$s5);
            }

    }
    else
       {
         header("location: ../addteacher1.php?m=sw");
        }







}


?>
