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
    $rate = $_POST['rate'];
    $occ = $_POST['occ'];
    $details = $_POST['details'];
    $accno = $_POST['accno'];
    $ifsc = $_POST['ifsc'];
    $bankname = $_POST['bankname'];


    $sql1 = "INSERT INTO `teacherpayment`(`rate`, `occ`, `classes`, `accno`, `ifsc`, `bankname`)
    VALUES ('$rate','$occ','$details','$accno','$ifsc','$bankname')  ;";
  $quek = insertintoSql($sql1);
    if($quek)
    {
      $name = strtolower($_SESSION['tname']);
      $surname = strtolower($_SESSION['tsurname']);
      $email = $_SESSION['tmail'];
      $username = $name.".".$surname;
      $password = generate_password();
      $_SESSION['username'] = $username;
      $_SESSION['userpw'] = $password;

        $newsql = "INSERT INTO `teacherlogin`(`username`, `password`, `email`)
      VALUES ('$username','$password','$email'); " ;
      $qs = insertintoSql($newsql);
      
     header("location: ../teachercomplete.php");
    }
    else
       {
         header("location: ../addteacher3.php?m=sw");
        }







}


?>
