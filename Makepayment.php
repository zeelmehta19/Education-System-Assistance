<?php
session_start();
 $name = $_SESSION['teachername'];
 $lec = $_SESSION['lectures'];
 $month = $_SESSION['month'];
 $year = $_SESSION['year'];
 $total = $_SESSION['total'];


 ?>

<html>
<head>
<title>payment</title>
<style>
label{
	font-size:1.2rem;
	margin-left:5%;
}
.input1{
	height:5%;
	width:17%;
	font-size:0.8em;
	margin-left:1.5%;
	margin-top:1%;
}
select{
	width:20%;
	font-size:1em;
	margin-left:0%;
	margin-top:1%;
}
</style>

<script>


</script>
</head>
<body style="background-color:rgb(92,218,177);">
	<?php include 'menu.php'; ?>
	<form class="" action="./includes/paid.php" method="post">
    <div style="background-color:white; border:1px solid black; margin-left:10%; width:80%; margin-top:5%; box-shadow:0 0 10px gray">
      <div style="background-color:aqua; height:10%; color:blue; margin-top:-3.5%; text-align:center; font-size:2rem; box-shadow:0px 10px 12px blue"><h3><b>Payment</b></h3></div>
      <br><br><br>
      <h3>
        LECTURES TAKEN IN MONTH OF <?php echo $month,$year;?> BY <?php echo $name; ?> <br>
        Total LECTURES = <?php echo $lec;?> TOTAL AMOUNT = <?php echo $total;?>



      </h3>
		<button type="submit" name="submit" style="background-color:rgb(0,200,0); margin-left:5%; width:10%; height:4%">Pay</button><br><br>





	</div>
</form>
</body>
</html>
