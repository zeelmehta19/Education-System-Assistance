<?php
include './script.php';
session_start();
 $name = $_SESSION['teachername'];
 $lec = $_SESSION['lectures'];
 $month = $_SESSION['month'];
 $year = $_SESSION['year'];
 $total = $_SESSION['total'];

 $pay = "INSERT INTO `monthly-payment`(`month`, `year`, `totallec`, `teacher`, `amt`, `paid`)
        VALUES ('$month','$year','$lec','$name','$total','YES') ;";

        $qsy = insertintoSql($pay);

        if($qsy)
        {
          header("location: ../adminhome.php");
        }
        



 ?>
