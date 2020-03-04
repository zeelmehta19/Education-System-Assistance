<?php

if(!isset($_POST['submit']))
{
    header("location: ../adminhome.php");
    exit();
}
else
{
    include './script.php';


    $month = $_POST['month'];

    $name = $_POST['teacher'];
    $lec=0;


    $sql = "SELECT * FROM `schedule` WHERE `teacher`='$name' AND monthname(`date`) = '$month' ;" ;
    require './connect.php'; ////////// CONNECT TO DATABSE HERE///////
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql))
    {
        echo "something went wrong";
        exit();
    }
    else
    {
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        while($row = mysqli_fetch_assoc($result))
        {
                $lec = $lec+$row['time'];
        }

    }
$id = getTeacherid($name);
$rate = getTeacherRate($id);
$total = $lec * $rate;
$year = date("Y");


          session_start();
          $_SESSION['teachername'] =$name;
          $_SESSION['lectures'] =$lec;
          $_SESSION['month'] =$month;
          $_SESSION['year'] =$year;
          $_SESSION['total'] =$total;

          header("location: ../Makepayment.php");











}

 ?>
