<html>
<head>
<title>visitor</title>
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
</head>
<body style="background-color:white">
	<?php include 'menu.php'; ?>
	<form method="post" action="./includes/enterSchedule.php">
	<div style="background-color:white; border:1px solid black; margin-left:10%; width:80%; margin-top:5%; box-shadow:0 0 10px gray">
		<div style="background-color:green; height:10%; color:white; margin-top:-3.5%; text-align:center; font-size:2rem; box-shadow:0px 10px 7px rgb(150,150,150)"><h3><b>Schedule</b></h3></div>
		<br><br><h2><?php if($_GET['m'] == "OK") {echo "successfully added ! ";} ?></h2>

		<br><br><br>
		<label for="day">Select day :</label>
		<select name="day" id="day">
		<option>Monday</option>
		<option>Tuesday</option>
		<option>Wednesday</option>
		<option>Thursday</option>
		<option>Friday</option>
		<option>Saturday</option>
		<option>Sunday</option>
		</select>
		<label for="date" >Date : </label>
		<input type="date" class="input1" name="date" id="date" >
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
							echo '<option>'.$row['name'].'</option>';

					}

			}

	?>








		</select><br><br>
		<label for="time">Lecture hours :</label>
		<input class="input1" type="text" id="time" name="time" placeholder="hours"/><br><br>
		<input type="submit" value="Enter" name="submit" style="width:20%; background-color:green; height:5%; margin-left:18.5%; color:white; border-radius:10px"/><br><br>
	</div>
	</form>
</body>
</html>
