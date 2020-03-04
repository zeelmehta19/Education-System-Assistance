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
    $demodate = $_POST['demodate'];
    $topic = $_POST['demotopic'];
    $demosub = $_POST['demosub'];
    $att1 = $_POST['att1'];
    $att2 = $_POST['att2'];
    $att3 = $_POST['att3'];
    $feedback = $_POST['feedback'];

    $sql = "INSERT INTO `teacherdemo`(`demodate`, `demotopic`, `demosub`, `att1`, `att2`, `att3`, `feedback`)
    VALUES ('$demodate','$topic','$demosub','$att1','$att2','$att3','$feedback')  ;";
  $que = insertintoSql($sql);
    if($que)
    {
      header("location: ../addteacher3.php");
    }
    else
       {
         header("location: ../addteacher2.php?m=sw");
        }







}


?>
