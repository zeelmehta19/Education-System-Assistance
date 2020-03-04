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
	<form class="" action="./includes/showtotal.php?id=<?php echo $id;?>" method="post">
	<div style="background-color:white; border:1px solid black; margin-left:10%; width:80%; margin-top:5%; box-shadow:0 0 10px gray">
		<div style="background-color:aqua; height:10%; color:blue; margin-top:-3.5%; text-align:center; font-size:2rem; box-shadow:0px 10px 12px blue"><h3><b>Payment</b></h3></div>
		<br><br><br>




		<label for="month">Select month :</label>
		<select name="month" id="month">
		<option value="January">January</option>
		<option value="February">February</option>
		<option value="March">March</option>
		<option value="April">April</option>
		<option value="May">May</option>
		<option value="June">June</option>
		<option value="July">July</option>
		<option value="August">August</option>
		<option value="September">September</option>
		<option value="October">October</option>
		<option value="November">November</option>
		<option value="December">December</option>
		</select>
		<label for="teacher">Teacher :</label>
		<select name="teacher" id="teacher">
			<?php
						require './includes/connect.php'; ////////// CONNECT TO DATABSE HERE///////
						$sql = "SELECT * FROM `teacherdetails`";
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
										echo '<option id="tname">'.$row['name'].'</option>';
										$id=$row['teacherid'];
								}
						}
				?>
		</select>
		<button type="submit" name="submit" style="background-color:rgb(0,200,0); margin-left:5%; width:10%; height:4%">Check</button><br><br>




		
	</div>
</form>
</body>
</html>
