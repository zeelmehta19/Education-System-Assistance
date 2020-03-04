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
    $p1 = $_POST['p1'];
    $p2 = $_POST['p2'];
    $login = $_POST['login'];

    if($p1 == $p2)
    {
      header("location: ../changepassword.php?m=samepassword");
    }


    $sql1 = "UPDATE `admin` SET `password`='$p2' WHERE  `login` = '$login' AND `password` = '$p1';";
  $quek = insertintoSql($sql1);
    if($quek)
    {


     header("location: ../changepassword.php?m=successfull");
    }
    else
       {
         header("location: ../changepassword.php?m=checkvalues");
        }







}


?>
