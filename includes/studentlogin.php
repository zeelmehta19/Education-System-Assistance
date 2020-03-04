<?php
session_start();
if(!isset($_POST['submit']))
{
    header("location: ../studentlogin.php");
    exit();
}
else

{
    include './script.php';
    $login = $_POST['login'];
    $password = $_POST['password'];
    $sql = " SELECT * FROM `studentlogin` WHERE `username` = '$login' AND `password` = '$password';";
    $search = searchWhere($sql);
    if($search == "Nullify")
    {
      header("location: ../studentlogin.php?m=incorrertLoginDetails");
    }
    else {
      session_start();
      $_SESSION['stname'] = $login;
      header("location: ../studenthome.php");
      }


}


?>
