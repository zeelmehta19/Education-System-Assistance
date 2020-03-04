<?php

if(!isset($_POST['submit']))
{
    header("location: ../adminhome.php");
    exit();
}
else
{
    include './script.php';


    $day = $_POST['day'];
    $date = $_POST['date'];
    $name = $_POST['teacher'];
    $time = $_POST['time'];


    $sql = "INSERT INTO `schedule`(`date`, `day`, `teacher`, `time`)
     VALUES ('$date','$day','$name','$time') ;" ;
    $que = insertintoSql($sql);
    if($que)
    {

            header("location: ../schedule.php?m=OK");
        }

    else
       {
         header("location: ../schedule.php?m=sw");
        }







}


?>
