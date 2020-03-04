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
    $id = $_GET['id'];


    $sql1 = "UPDATE `teacherpayment` SET
    `rate`='$rate',
    `occ`='$occ',
    `classes`='$details',
    `accno`='$accno',
    `ifsc`='$ifsc',
    `bankname`='$bankname'
    WHERE  `teacherid` = '$id';";
  $quek = insertintoSql($sql1);
    if($quek)
    {


     header("location: ../viewteacher.php");
    }
    else
       {
         header("location: ../edit3.php?m=sw");
        }







}


?>
