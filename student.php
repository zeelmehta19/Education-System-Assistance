<html>
<head>
<title>student</title>
<style>
label{
	font-size:1.2rem;
	margin-left:5%;
}
.input1{
	height:5%;
	width:70%;
	font-size:0.8em;
	margin-left:5%;
	margin-top:1%;
}
textarea{
	width:70%;
	font-size:1em;
	margin-left:5%;
	margin-top:1%;
}
</style>







</head>
<body style="background-color:rgb(0,0,30)">

	<form method="post" action="./includes/addstudent.php">
	<div style="background-color:white; border:1px solid black; margin-left:10%; width:80%; margin-top:5%; box-shadow:0 0 10px gray">
		<div style="background-color:blue; height:10%; color:white; margin-top:-3.5%; text-align:center; font-size:2rem; box-shadow:0px 10px 7px rgb(150,150,150)"><h3><b>Student details</b></h3></div>
		<br><br><h2><?php if($_GET['m'] == "ok") {echo "successfully added ! ";} ?></h2>
		<br><br><br><label for="fn" style="margin-right:12.5%">First Name</label>
		<label for="mn" style="margin-right:10.5%">Middle Name</label>
		<label for="ln" style="margin-right:1%">Last Name</label><br>
		<input class="input1" type="text" id="fn" name="fn" placeholder="First name" style="margin-right:1%; width:20%"/>
		<input class="input1" type="text" id="mn" name="mn" placeholder="Middle name" style="margin-right:1%; width:20%"/>
		<input class="input1" type="text" id="ln" name="ln" placeholder="Last name" style="margin-right:1%; width:20%"/><br><br>
		<label for="contact">Phone Number</label><br>
		<input class="input1" type="tel" name="phone" id="contact" placeholder="Phone"/><br><br>
		<label for="email" >Email</label><br>
		<input class="input1" type="email" name="email" id="email" placeholder="Email Id"/><br><br>
		<label for="address" >Address</label><br>

		<textarea name="address" id="address" placeholder="Student's address ..." rows="5" cols="50"></textarea><br><br>
		<label for="date">Birth date</label>
		<input type="date" name="dob" style="height:5%; font-size:0.8em;	"/><br><br><br>
		<label>Gender </label>
		<input type="radio" name="gender" value="Male" />Male&nbsp&nbsp&nbsp&nbsp&nbsp<input type="radio" name="gender" value="female">Female<br><br><br>
		<label>Lectures : &nbsp&nbsp&nbsp&nbsp&nbsp</label>
		<input type="checkbox" name="c0" value="XI">XI&nbsp&nbsp&nbsp&nbsp&nbsp
		<input type="checkbox" name="c1" value="XII">XII&nbsp&nbsp&nbsp&nbsp&nbsp
		<input type="checkbox" name="c2" value="entrance">Entrance<br><br><br>
		<br><br>
		<input type="submit" name="submit" value="Confirm ->" style="width:60%; height:10%; color:white; background-color:black; font-size:1.2rem; margin-left:20%"><br><br><br>
	</div>
</form>
</body>
</html>
