<?php
session_start();
if(!isset($_POST['submit']))
{
    header("location: ../index.php");
    exit();
}
else

{
    include './script.php';
    $login = $_POST['login'];
    $password = $_POST['password'];
    $sql = " SELECT * FROM `admin` WHERE `login` = '$login' AND `password` = '$password';";
    $search = searchWhere($sql);
    if($search == "Nullify")
    {
      header("location: ../index.php?");
    }
    else {
      session_start();
      $_SESSION['uname']= "Admin";
      header("location: ../adminhome.php");
      }


}


?>
